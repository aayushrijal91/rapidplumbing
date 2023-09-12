<?php

class router {
	
	/* array key mean url first segment and value array means first key is file name and other all key is a $_GET array key */
	public static $allPath = array(
		'' => array('home'),	
		'ajax' => array('ajax'),		
		'sitemap' => array('sitemap'),
		'about-us' => array('about-us'),
		'services' => array('services'),
		'faqs' => array('faqs'),
		'careers' => array('careers'),
		'home-safety-inspection' => array('home-safety-inspection'),
		'blogs' => array('blogs'),
		'contact-us' => array('contact-us'),
		'book-online' => array('book-online'),
		'memberships' => array('memberships'),
		'blocked-drains' => array('blocked-drains'),
		'gas-plumbing' => array('gas-plumbing'),
		'emergency-plumbing' => array('emergency-plumbing'),
		'hot-water-services' => array('hot-water-services'),
		'taps-toilets' => array('taps-toilets'),
		'rainwater-tanks-pumps' => array('rainwater-tanks-pumps'),
		'general-plumbing' => array('general-plumbing'),
		'property-strata-managers' => array('property-strata-managers'),
		'leak-detection' => array('leak-detection'),
		'renovation-plumber' => array('renovation-plumber'),
		'roofing-guttering' => array('roofing-guttering'),
		'septic-systems' => array('septic-systems'),
		'backflow-prevention' => array('backflow-prevention'),
		'backflow-prevention' => array('backflow-prevention'),
		'water-filters' => array('water-filters'),
		'commercial-plumbing' => array('commercial-plumbing'),
		'schools' => array('schools'),
	);
	
	public static function init() {
		global $filepagename;
		 // Parse URL and Path data
		$url = parse_url((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
		$url = (object) $url;
		$url->path = ltrim($url->path, '/');
		
		$url->path = implode( '/', config::get_paths());
		
		
		// Handle feed.rss, sitemap.xml, robots.txt and known file exceptions.
		$known_files = array ('feed.rss', 'sitemap','site-map','sitemap.xml', 'robots.txt', 'ajax.js');
		if (in_array($url->path, $known_files)){
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
		if(isset($url->path)){
			/* get include file name */
			$fileName = self::_includeFile($url->path);
			$filepagename = $fileName;
			require 'themes/'.$fileName.'.php';
		}

		
		$render = ob_get_contents();
		ob_end_clean();
		/*echo $render;*/
		$minify = new minify();
		echo $render = $minify->html($render);
		/*$cache->create($render);*/

	}

	
	
	public static function _includeFile($path = ''){
		/* default file 404 other wise find in all path array */
		$tmpPath = explode('/',$path);
		$fileName = '404';
		$tmpUrl = array();
		foreach($tmpPath as $key => $val){
			if(in_array($val,array_keys(self::$allPath)) && $key == 0){
				$tmpUrl = self::$allPath[$val];
				$fileName = $tmpUrl[$key];
			}else if(!isset($tmpUrl[$key]) && !empty($val)){
				$fileName = '404';
			}else if(!empty($val) && count($tmpUrl) && isset($tmpUrl[$key]) && !empty($tmpUrl[$key])){
				$_GET[$tmpUrl[$key]] = $val;
			}else{
				continue;
			}
		}
		return $fileName;
	}
}