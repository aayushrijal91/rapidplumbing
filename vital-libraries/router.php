<?php

class router
{
	/* array key mean url first segment and value array means first key is file name and other all key is a $_GET array key */
	public static $allPath = array(
		'' => 'home',
		'ajax' => 'ajax',
		'sitemap' => 'sitemap',
		'about-us' => 'about-us',
		'our-services' => 'our-services',
		'faqs' => 'faqs',
		'careers' => 'careers',
		'home-safety-inspection' => 'home-safety-inspection',
		'blogs' => 'blogs',
		'contact-us' => 'contact-us',
		'book-online' => 'book-online',
		'memberships' => 'memberships',
		'blocked-drains' => 'blocked-drains',
		'gas-plumbing' => 'gas-plumbing',
		'emergency-plumbing' => 'emergency-plumbing',
		'hot-water-services' => 'hot-water-services',
		'taps-toilets' => 'taps-toilets',
		'rainwater-tanks-pumps' => 'rainwater-tanks-pumps',
		'general-plumbing' => 'general-plumbing',
		'property-strata-managers' => 'property-strata-managers',
		'leak-detection' => 'leak-detection',
		'renovation-plumber' => 'renovation-plumber',
		'roofing-guttering' => 'roofing-guttering',
		'septic-systems' => 'septic-systems',
		'backflow-prevention' => 'backflow-prevention',
		'water-filters' => 'water-filters',
		'commercial-plumbing' => 'commercial-plumbing',
		'schools' => 'schools',
		'suburbs' => 'suburbs',
		'thank-you' => 'thank-you',
		'thank-you-book' => 'thank-you-book',
		'thank-you-careers' => 'thank-you-careers',
	);

	public static function init()
	{
		global $filepagename;
		// Parse URL and Path data
		$url = parse_url((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
		$url = (object) $url;
		$url->path = ltrim($url->path, '/');
		$url->path = implode('/', config::get_paths());

		// Handle feed.rss, sitemap.xml, robots.txt and known file exceptions.
		$known_files = array('feed.rss', 'sitemap', 'site-map', 'sitemap.xml', 'robots.txt', 'ajax.js');
		if (in_array($url->path, $known_files)) {
			require 'themes/' . $url->path . '.php';
			exit();
		}

		// Set Headers
		header('X-XSS-Protection: 1; mode=block'); // Set Security Headers
		header('X-Frame-Options: SAMEORIGIN'); // Sets X-Frame-Options
		header('X-Frame-Options: DENY'); // Sets X-Frame-Options
		header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload'); // HSTS Enabled
		header('Content-language: en-au'); // Sets Language
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		date_default_timezone_set('Australia/Melbourne'); // Sets Timezone

		$cache = new cache();
		$cache->check($url->path);

		ob_start();
		if (isset($url->path)) {
			/* get include file name */
			$fileName = self::_includeFile($url->path);
			$filepagename = $fileName;
			require 'themes/' . $fileName . '.php';
		}

		$render = ob_get_contents();
		ob_end_clean();
		/*echo $render;*/
		$minify = new minify();
		echo $render = $minify->html($render);
		/*$cache->create($render);*/
	}

	public static function _includeFile($path = '')
	{
		if (array_key_exists($path, self::$allPath)) {
			return self::$allPath[$path];
		} else {
			return "404";
		}
	}
}
