<?php

function _send_mail($tomail, $Subject, $MessagesBody, $mCc, $mBcc)
{
	$to_email = $tomail;
	$subject = $Subject;
	$message = $MessagesBody;

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From:E1 Pest Solutions <info@elitepestsolutions.com.au>' . "\r\n";
	$headers .= 'Cc: ' . $mCc . '' . "\r\n";
	$headers .= 'Bcc: ' . $mBcc . ' ' . "\r\n";

	mail($to_email, $subject, $message, $headers);
}

function _isArray($tmpData = array())
{
	if (isset($tmpData) && is_array($tmpData) && count($tmpData)) {
		return true;
	}
	return false;
}

function _isset($DataArray = array(), $field = array())
{
	$echoValue = '';
	if (isset($DataArray[$field]) && !empty($DataArray[$field])) {
		$echoValue = $DataArray[$field];
	}
	return $echoValue;
}

function _issetUrl($DataArray = array(), $field = array())
{
	$echoValue = '';
	if (isset($DataArray[$field]) && !empty($DataArray[$field])) {
		$echoValue = $DataArray[$field];
	}
	return '/rapid'.$echoValue;
}

/* get image src alt and title */
function _imgSrc($tmpArr = array(), $key = '', $extraClass = '')
{
	$tmpHTML = '';
	if ($extraClass != '') {
		$extraClass = ' ' . $extraClass;
	}
	if (isset($tmpArr[$key][0]['info1']) && $tmpArr[$key][0]['info1'] == '') {
		$tmpArr[$key][0]['info1'] = V_DEFAULT_IMG_ALT;
	}

	if (isset($key) && !empty($key) && isset($tmpArr[$key][0]['urlPath']) &&  $tmpArr[$key][0]['urlPath'] != '') {
		$tmpHTML .= '<img src="' . V_CDN_URL . $tmpArr[$key][0]['urlPath'] . '"  class="' . $extraClass . '" alt="' . $tmpArr[$key][0]['info1'] . '" title="' . $tmpArr[$key][0]['info2'] . '" width="' . $tmpArr[$key][0]['width'] . '" height="' . $tmpArr[$key][0]['height'] . '">';
	}

	return $tmpHTML;
}

/* get image src with webp and alt and title */
function _img_webp_Src($tmpArr = array(), $key = '', $extraClass = '')
{
	$tmpHTML = '';
	if ($extraClass != '') {
		$extraClass = ' ' . $extraClass;
	}
	if (isset($tmpArr[$key][0]['info1']) && $tmpArr[$key][0]['info1'] == '') {
		$tmpArr[$key][0]['info1'] = V_DEFAULT_IMG_ALT;
	}
	$s = ["uploads", ".png", ".jpg", ".jpeg", ".gif"];
	$r   = ["uploads-webp", ".webp", ".webp", ".webp", ".webp"];

	if (isset($key) && !empty($key) && isset($tmpArr[$key][0]['urlPath']) &&  $tmpArr[$key][0]['urlPath'] != '') {
		$webp = str_replace($s, $r, $tmpArr[$key][0]['urlPath']);
		$tmpHTML = $tmpHTML = '<picture>';
		if ($webp != '') {
			$tmpHTML .= '<source type="image/webp" srcset="' . V_CDN_URL . $webp . '">';
		}
		$tmpHTML .= '<img src="' . V_CDN_URL . $tmpArr[$key][0]['urlPath'] . '"  class="' . $extraClass . '" alt="' . $tmpArr[$key][0]['info1'] . '" title="' . $tmpArr[$key][0]['info2'] . '"  width="' . $tmpArr[$key][0]['width'] . '" height="' . $tmpArr[$key][0]['height'] . '">
	  </picture>';
	}
	return $tmpHTML;
}

/* get image src with webp and alt and title */
function _img_webp_Src_Multi($tmpArr = array(), $extraClass = '')
{
	$tmpHTML = '';
	if ($extraClass != '') {
		$extraClass = ' ' . $extraClass;
	}
	if (isset($tmpArr['info1']) && $tmpArr['info1'] == '') {
		$tmpArr['info1'] = V_DEFAULT_IMG_ALT;
	}
	$s = ["uploads", ".png", ".jpg", ".jpeg", ".gif"];
	$r   = ["uploads-webp", ".webp", ".webp", ".webp", ".webp"];

	if (isset($tmpArr['urlPath']) &&  $tmpArr['urlPath'] != '') {
		$webp = str_replace($s, $r, $tmpArr['urlPath']);
		$tmpHTML = $tmpHTML = '<picture>';
		if ($webp != '') {
			$tmpHTML .= '<source type="image/webp" srcset="' . V_CDN_URL . $webp . '">';
		}
		$tmpHTML .= '<img src="' . V_CDN_URL . $tmpArr['urlPath'] . '"  class="' . $extraClass . '" alt="' . $tmpArr['info1'] . '" title="' . $tmpArr['info2'] . '"  width="' . $tmpArr['width'] . '" height="' . $tmpArr['height'] . '">
	  </picture>';
	}
	return $tmpHTML;
}

function _imgSrc_Lazy($tmpArr = array(), $key = '', $extraClass = '', $slicklazy = '')
{
	$tmpHTML = '';
	if ($extraClass != '') {
		$extraClass = ' ' . $extraClass;
	}
	if (isset($tmpArr[$key][0]['info1']) && $tmpArr[$key][0]['info1'] == '') {
		$tmpArr[$key][0]['info1'] = V_DEFAULT_IMG_ALT;
	}
	$srcatt = ($slicklazy == 'slicklazy') ? 'lazy' : 'src';
	$lazyclass = ($slicklazy == 'slicklazy') ? '' : 'lazy';
	if (isset($key) && !empty($key) && isset($tmpArr[$key][0]['urlPath']) &&  $tmpArr[$key][0]['urlPath'] != '') {
		$tmpHTML .= '<img data-' . $srcatt . '="' . V_CDN_URL . $tmpArr[$key][0]['urlPath'] . '"  class="' . $lazyclass . ' ' . $extraClass . '" alt="' . $tmpArr[$key][0]['info1'] . '" title="' . $tmpArr[$key][0]['info2'] . '"  width="' . $tmpArr[$key][0]['width'] . '" height="' . $tmpArr[$key][0]['height'] . '">';
	}
	return $tmpHTML;
}
function _imgSrc_webp_Lazy($tmpArr = array(), $key = '', $extraClass = '', $slicklazy = '')
{
	$tmpHTML = '';

	if ($extraClass != '') {
		$extraClass = ' ' . $extraClass;
	}
	if (isset($tmpArr[$key][0]['info1']) && $tmpArr[$key][0]['info1'] == '') {
		$tmpArr[$key][0]['info1'] = V_DEFAULT_IMG_ALT;
	}
	$s = ["uploads", ".png", ".jpg", ".jpeg", ".gif"];
	$r   = ["uploads-webp", ".webp", ".webp", ".webp", ".webp"];
	$srcatt = ($slicklazy == 'slicklazy') ? 'lazy' : 'src';
	$lazyclass = ($slicklazy == 'slicklazy') ? '' : 'lazy';

	if (isset($key) && !empty($key) && isset($tmpArr[$key][0]['urlPath']) &&  $tmpArr[$key][0]['urlPath'] != '') {
		$webp = str_replace($s, $r, $tmpArr[$key][0]['urlPath']);
		$tmpHTML = $tmpHTML = '<picture>';
		if ($webp != '') {
			$tmpHTML .= '<source type="image/webp" data-srcset="' . V_CDN_URL . $webp . '">';
		}
		$tmpHTML .= '<img data-' . $srcatt . '="' . V_CDN_URL . $tmpArr[$key][0]['urlPath'] . '"  class="' . $lazyclass . ' ' . $extraClass . '" alt="' . $tmpArr[$key][0]['info1'] . '" title="' . $tmpArr[$key][0]['info2'] . '"  width="' . $tmpArr[$key][0]['width'] . '" height="' . $tmpArr[$key][0]['height'] . '">
	  </picture>';
	}
	return $tmpHTML;
}

function __multi_imgSrc_webp_Lazy($tmpArr = array(), $extraClass = '', $slicklazy = '')
{
	$tmpHTML = '';
	if ($extraClass != '') {
		$extraClass = ' ' . $extraClass;
	}
	if (isset($tmpArr['info1']) && $tmpArr['info1'] == '') {
		$tmpArr['info1'] = V_DEFAULT_IMG_ALT;
	}
	$s = ["uploads", ".png", ".jpg", ".jpeg", ".gif"];
	$r   = ["uploads-webp", ".webp", ".webp", ".webp", ".webp"];
	$srcatt = ($slicklazy == 'slicklazy') ? 'lazy' : 'src';
	$lazyclass = ($slicklazy == 'slicklazy') ? '' : 'lazy';
	if (isset($tmpArr['urlPath']) &&  $tmpArr['urlPath'] != '') {
		$webp = str_replace($s, $r, $tmpArr['urlPath']);
		$tmpHTML = $tmpHTML = '<picture>';
		if ($webp != '') {
			$tmpHTML .= '<source type="image/webp" data-srcset="' . V_CDN_URL . $webp . '">';
		}
		$tmpHTML .= '<img data-' . $srcatt . '="' . V_CDN_URL . $tmpArr['urlPath'] . '"  class="' . $lazyclass . ' ' . $extraClass . '" alt="' . $tmpArr['info1'] . '" title="' . $tmpArr['info2'] . '"  width="' . $tmpArr['width'] . '" height="' . $tmpArr['height'] . '">
	  </picture>';
	}
	return $tmpHTML;
}

function _imgSrc_Lazy_bg($tmpArr = array(), $key = '', $extraClass = '')
{
	$tmpHTML = '';
	if ($extraClass != '') {
		$extraClass = ' ' . $extraClass;
	}
	if (isset($tmpArr[$key][0]['info1']) && $tmpArr[$key][0]['info1'] == '') {
		$tmpArr[$key][0]['info1'] = V_DEFAULT_IMG_ALT;
	}
	if (isset($key) && !empty($key) && isset($tmpArr[$key][0]['urlPath']) &&  $tmpArr[$key][0]['urlPath'] != '') {
		$tmpHTML = 'data-bg="' . V_CDN_URL . $tmpArr[$key][0]['urlPath'] . '" alt="' . $tmpArr[$key][0]['info1'] . '" title="' . $tmpArr[$key][0]['info2'] . '"';
	}
	return $tmpHTML;
}

function html_tag($DataArray = array(), $field = array())
{
	$tagValue = 'h2';
	if (isset($DataArray[$field]) && !empty($DataArray[$field])) {
		$tagValue = $DataArray[$field];
	}
	return $tagValue;
}

function slugify($text)
{
	$text = preg_replace('~[^\pL\d]+~u', '-', $text);
	$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
	$text = preg_replace('~[^-\w]+~', '', $text);
	$text = trim($text, '-');
	$text = preg_replace('~-+~', '-', $text);
	$text = strtolower($text);
	if (empty($text)) {
		return 'n-a';
	}
	return $text;
}

function explode_li($string)
{
	$array = explode("</li>", $string);
	foreach ($array as $key => $val) {
		$array[$key] = strip_tags($val);
	}
	array_pop($array); // last element should be nothing.
	return $array;
}
