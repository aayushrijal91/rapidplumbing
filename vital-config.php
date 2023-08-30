<?php @session_start();
	
	class config {
		public static function site_dir_path( $path = "" ) {
			$dirPath = '';
			if($_SERVER['REMOTE_ADDR']=='127.0.0.1' || $_SERVER['REMOTE_ADDR']=='::1') {
				$dirPath = '/rapid/';
			}			
			$dirPath = $dirPath . $path;
			return $dirPath;
		}
		
		public static function theme_dir(  ) {
			$dirPath = '/themes/';
			return $dirPath;
		}
		
		public static function full_dir_path( $path="" ) {
			$dirPath = $_SERVER['DOCUMENT_ROOT']. config::site_dir_path().$path;
			$dirPath = str_replace("//","/",$dirPath);
			return $dirPath;
		}
		
		public static function get_paths() {
			
			$site_dir = config::site_dir_path();
			$request = $_SERVER['REQUEST_URI'];
			$arrSplit = explode("?", $request);
			if(isset($arrSplit[0])) {
				$request = $arrSplit[0];
			}
			if($site_dir != '/') {
				$arrPaths = array_filter(array_values(explode('/', str_replace($site_dir, '', $request))));
			} else {
				$arrPaths = array_filter(array_values(explode('/', $request)));
			}
			$returnarrPaths  = array();
			foreach($arrPaths as $index => $value ) {
				if( !empty($arrPaths) ) {
					$returnarrPaths[] = $value;
				}
			}
			return $returnarrPaths;
			
		}
		public static function site_url( $path="" ) {
			$site_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].$path;
			if($_SERVER['REMOTE_ADDR']=='127.0.0.1' || $_SERVER['REMOTE_ADDR']=='::1') {
				$site_url = "http://localhost/rapid".$path;
			}
			return $site_url;
		}
		
		public static function theme_url( $path="" ) {
			return config::site_url(config::theme_dir());
		}
		
		public static function site_admin_url() {
			$site_url = "https://rapid.aiims-staging.com.au/";
			
			if($_SERVER['REMOTE_ADDR']=='::1') {
				$site_url = "http://localhost/rapid";
			}
			return $site_url;
		}
	}
	
?>