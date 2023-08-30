<?php
 /* Contact Info Start */
 $contact_info_Arr = array();
 $contact_info = contact_info::get_data($contact_info_Arr);
 $contact_info = $contact_info[0];	

 if(isset($meta_title) && !empty($meta_title)) { $meta_title = str_replace('[PHONE]',_isset($contact_info, 'phone_number'),$meta_title); }
 if(isset($meta_description) && !empty($meta_description)) { $meta_description = str_replace('[PHONE]',_isset($contact_info, 'phone_number'),$meta_description); }
 if(isset($meta_keyword) && !empty($meta_keyword)) { $meta_keyword = str_replace('[PHONE]',_isset($contact_info, 'phone_number'),$meta_keyword); }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Site Title -->
		<title><?php if(isset($meta_title) && !empty($meta_title)) { echo $meta_title;}?></title>
		<meta name="title" content="<?php if(isset($meta_title) && !empty($meta_title)) { echo $meta_title;}?>">
		<meta name="description" content="<?php if(isset($meta_description) && !empty($meta_description)) { echo $meta_description;}?>">
		<meta name="keyword" content="<?php if(isset($meta_keyword) && !empty($meta_keyword)) { echo $meta_keyword;}?>">
		
		<meta property="og:type" content="website">
		<meta property="og:url" content="<?php if(isset($meta_url) && !empty($meta_url)) { echo $meta_url;}?>">
		<meta property="og:title" content="<?php if(isset($meta_title) && !empty($meta_title)) { echo $meta_title;}?>">
		<meta property="og:description" content="<?php if(isset($meta_description) && !empty($meta_description)) { echo $meta_description;}?>">
		<meta property="og:image" content="<?php if(isset($meta_image) && !empty($meta_image)) { echo $meta_image;}?>">
		<meta property="twitter:card" content="summary_large_image">
		
		<meta property="twitter:url" content="<?php if(isset($meta_url) && !empty($meta_url)) { echo $meta_url;}?>">
		<meta property="twitter:title" content="<?php if(isset($meta_title) && !empty($meta_title)) { echo $meta_title;}?>">
		<meta property="twitter:description" content="<?php if(isset($meta_description) && !empty($meta_description)) { echo $meta_description;}?>">
		<meta property="twitter:image" content="<?php if(isset($meta_image) && !empty($meta_image)) { echo $meta_image;}?>">

        <!-- Favicon -->
        <link rel="icon" href="<?php echo V_CDN_URL.V_THEME_DIR;?>_assets/images/favicon.png">

        <link rel="stylesheet" type="text/css" href="<?php echo V_CDN_URL.V_THEME_DIR;?>_assets/css/main.css?ver=<?php echo time();?>">
        <?php if(isset($authentication_area['head']) && !empty($authentication_area['head'])) { echo str_replace(array('<br>','</br>'), array("",""),$authentication_area['head']);}?>
    </head>
    <?php
    $filepageclass = '';
    if(isset($filepagename) && $filepagename != ''){
        $filepageclass = str_replace('_','-',$filepagename);
    }
    ?>
    <body class="<?=$filepageclass?>-page-layout">
    <?php if(isset($authentication_area['body_start_content']) && !empty($authentication_area['body_start_content'])) { echo str_replace(array('<br>','</br>'), array("",""),$authentication_area['body_start_content']);}?>

    