<?php
/* menu single record start*/
$header_settings_Arr = array();
$header_settings = header_settings::get_data($header_settings_Arr);
$header_settings = $header_settings[0];
/* menu single record end */

/* menu multi record start */
$header_menu_section_Arr = array('orderBy' => 'dragSortOrder ASC');
$header_menu_section = header_menu::get_data($header_menu_section_Arr);
/* menu multi record end */

// Services list for menu
$services_menu_list_Arr = array();
$services_menu_list = services_menu_list::get_data($services_menu_list_Arr);
?>

<header class="header pb-2" id="header">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center px-xl-4 py-2 py-md-3">
            <div class="col-auto d-lg-none">
                <button type="button" class="showSlideNav bg-transparent border-none">
                    <svg width="26" height="22" viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.214355 2.80707C0.214355 1.7025 1.10979 0.807068 2.21436 0.807068H23.3086C24.4132 0.807068 25.3086 1.7025 25.3086 2.80707C25.3086 3.91164 24.4132 4.80707 23.3086 4.80707H2.21436C1.10979 4.80707 0.214355 3.91164 0.214355 2.80707ZM0.214355 11C0.214355 9.89546 1.10979 9.00003 2.21436 9.00003H23.3086C24.4132 9.00003 25.3086 9.89546 25.3086 11C25.3086 12.1046 24.4132 13 23.3086 13H2.21436C1.10979 13 0.214355 12.1046 0.214355 11ZM0.214355 19.193C0.214355 18.0884 1.10979 17.193 2.21436 17.193H23.3086C24.4132 17.193 25.3086 18.0884 25.3086 19.193C25.3086 20.2976 24.4132 21.193 23.3086 21.193H2.21436C1.10979 21.193 0.214355 20.2976 0.214355 19.193Z" fill="white" />
                    </svg>
                </button>
            </div>

            <div class="col-auto">
                <a href="<?php echo V_SITE_URL; ?>"><?= _imgSrc($header_settings, 'site_logo', 'header__logo'); ?></a>
            </div>

            <div class="col d-none d-lg-block">
                <?php if (!empty($header_menu_section)) { ?>
                    <nav class="navbar navbar-expand-lg collapsed ">
                        <div class="collapse navbar-collapse  justify-content-center" id="navbarContent">
                            <ul id="menu-primary-menu" class="nav justify-content-center align-items-center">
                                <?php foreach ($header_menu_section as $key => $value) { ?>
                                    <li class="nav-item">
                                        <a href="<?= _issetUrl($value, 'link'); ?>" class="nav-link text-white"><?= _isset($value, 'title'); ?></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </nav>
                <?php } ?>
            </div>

            <div class="col-auto d-none d-md-block">
                <div class="row align-items-center gx-xl-4">
                    <div class="col-auto">
                        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/brighte.png" alt="brighte" />
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <a href="tel:<?php echo preg_replace('/[^\d]/i', '', _isset($contact_info, 'phone_number')); ?>" class="btn btn-primary text-white fs-27 text-italic fw-700 gap-2">
                            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/icons/buzzing-phone.gif" width=38 height=38 alt="Phone" />
                            <?= _isset($contact_info, 'phone_number'); ?>
                        </a>
                    </div>
                    <?php if (!empty(_isset($contact_info, 'facebook_link'))) : ?>
                        <div class="col-auto">
                            <a href="<?= _isset($contact_info, 'facebook_link') ?>">
                                <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.3957 14.3505L13.1042 9.94372H8.99481V7.10067C8.99481 6.1056 9.56162 4.96837 11.4037 4.96837H13.2459V1.2724C13.2459 1.2724 11.5454 0.988098 9.84502 0.988098C6.44417 0.988098 4.17693 3.12039 4.17693 6.81636V10.0859H0.492676V14.4926H4.31864V24.8698C5.02715 25.0119 5.87736 25.0119 6.72757 25.0119C7.57779 25.0119 8.2863 25.0119 9.13651 24.8698V14.3505H12.3957Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty(_isset($contact_info, 'instagram_link'))) : ?>
                        <div class="col-auto">
                            <a href="<?= _isset($contact_info, 'instagram_link') ?>">
                                <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.1156 5.98907C18.2652 5.98907 17.6982 6.53649 17.6982 7.35762C17.6982 8.17874 18.2652 8.72616 19.1156 8.72616C19.966 8.72616 20.5329 8.17874 20.5329 7.35762C20.5329 6.53649 19.8243 5.98907 19.1156 5.98907Z" fill="white" />
                                    <path d="M12.8798 7.76642C9.61985 7.76642 6.92688 10.3673 6.92688 13.5157C6.92688 16.6642 9.61985 19.2651 12.8798 19.2651C16.1397 19.2651 18.8326 16.6642 18.8326 13.5157C18.6909 10.2304 16.1397 7.76642 12.8798 7.76642ZM12.8798 17.0748C10.7537 17.0748 9.05291 15.4322 9.05291 13.3789C9.05291 11.3255 10.7537 9.81975 12.8798 9.81975C15.0058 9.81975 16.7066 11.4624 16.7066 13.5157C16.7066 15.5691 14.8641 17.0748 12.8798 17.0748Z" fill="white" />
                                    <path d="M17.5569 25.0147H7.91891C3.95033 25.0147 0.69043 21.7444 0.69043 17.7632V8.23681C0.69043 4.25562 3.95033 0.985352 7.91891 0.985352H17.5569C21.5255 0.985352 24.7854 4.25562 24.7854 8.23681V17.7632C24.7854 21.8866 21.5255 25.0147 17.5569 25.0147ZM7.91891 3.11813C5.22594 3.11813 2.95819 5.3931 2.95819 8.09463V17.7632C2.95819 20.4648 5.22594 22.7397 7.91891 22.7397H17.5569C20.2498 22.7397 22.5176 20.4648 22.5176 17.7632V8.23681C22.5176 5.53529 20.2498 3.26032 17.5569 3.26032H7.91891V3.11813Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-auto d-xl-none">
                <a href="tel:<?php echo preg_replace('/[^\d]/i', '', _isset($contact_info, 'phone_number')); ?>">
                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/icons/buzzing-phone-dark.gif" width=38 height=38 alt="Phone" />
                </a>
            </div>
        </div>
        <?php if (!empty($services_menu_list)) : ?>
            <div class="row g-2 d-none d-lg-flex">
                <?php foreach ($services_menu_list as $index => $service) : ?>
                    <div class="col">
                        <a class="serviceBtn <?= (count($services_menu_list) == $index + 1) ? 'bg-danger' : '' ?>" href="<?= _issetUrl($service, 'link') ?>">
                            <?= _imgSrc($service, 'icon') ?>

                            <p><?= _isset($service, 'title') ?></p>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</header>

<nav class="slide-nav">
    <div class="container">
        <div class="row justify-content-between align-items-center py-2 py-md-3 gy-4">
            <div class="col-auto">
                <button type="button" class="showSlideNav bg-transparent border-none">
                    <svg width="26" height="22" viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.214355 2.80707C0.214355 1.7025 1.10979 0.807068 2.21436 0.807068H23.3086C24.4132 0.807068 25.3086 1.7025 25.3086 2.80707C25.3086 3.91164 24.4132 4.80707 23.3086 4.80707H2.21436C1.10979 4.80707 0.214355 3.91164 0.214355 2.80707ZM0.214355 11C0.214355 9.89546 1.10979 9.00003 2.21436 9.00003H23.3086C24.4132 9.00003 25.3086 9.89546 25.3086 11C25.3086 12.1046 24.4132 13 23.3086 13H2.21436C1.10979 13 0.214355 12.1046 0.214355 11ZM0.214355 19.193C0.214355 18.0884 1.10979 17.193 2.21436 17.193H23.3086C24.4132 17.193 25.3086 18.0884 25.3086 19.193C25.3086 20.2976 24.4132 21.193 23.3086 21.193H2.21436C1.10979 21.193 0.214355 20.2976 0.214355 19.193Z" fill="white" />
                    </svg>
                </button>
            </div>

            <div class="col-auto">
                <a href="<?php echo V_SITE_URL; ?>"><?= _imgSrc($header_settings, 'site_logo', 'header__logo'); ?></a>
            </div>

            <div class="col-auto">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/brighte.png" alt="brighte" />
                    </div>
                    <?php if (!empty(_isset($contact_info, 'facebook_link'))) : ?>
                        <div class="col-auto">
                            <a href="<?= _isset($contact_info, 'facebook_link') ?>">
                                <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.3957 14.3505L13.1042 9.94372H8.99481V7.10067C8.99481 6.1056 9.56162 4.96837 11.4037 4.96837H13.2459V1.2724C13.2459 1.2724 11.5454 0.988098 9.84502 0.988098C6.44417 0.988098 4.17693 3.12039 4.17693 6.81636V10.0859H0.492676V14.4926H4.31864V24.8698C5.02715 25.0119 5.87736 25.0119 6.72757 25.0119C7.57779 25.0119 8.2863 25.0119 9.13651 24.8698V14.3505H12.3957Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty(_isset($contact_info, 'instagram_link'))) : ?>
                        <div class="col-auto">
                            <a href="<?= _isset($contact_info, 'instagram_link') ?>">
                                <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.1156 5.98907C18.2652 5.98907 17.6982 6.53649 17.6982 7.35762C17.6982 8.17874 18.2652 8.72616 19.1156 8.72616C19.966 8.72616 20.5329 8.17874 20.5329 7.35762C20.5329 6.53649 19.8243 5.98907 19.1156 5.98907Z" fill="white" />
                                    <path d="M12.8798 7.76642C9.61985 7.76642 6.92688 10.3673 6.92688 13.5157C6.92688 16.6642 9.61985 19.2651 12.8798 19.2651C16.1397 19.2651 18.8326 16.6642 18.8326 13.5157C18.6909 10.2304 16.1397 7.76642 12.8798 7.76642ZM12.8798 17.0748C10.7537 17.0748 9.05291 15.4322 9.05291 13.3789C9.05291 11.3255 10.7537 9.81975 12.8798 9.81975C15.0058 9.81975 16.7066 11.4624 16.7066 13.5157C16.7066 15.5691 14.8641 17.0748 12.8798 17.0748Z" fill="white" />
                                    <path d="M17.5569 25.0147H7.91891C3.95033 25.0147 0.69043 21.7444 0.69043 17.7632V8.23681C0.69043 4.25562 3.95033 0.985352 7.91891 0.985352H17.5569C21.5255 0.985352 24.7854 4.25562 24.7854 8.23681V17.7632C24.7854 21.8866 21.5255 25.0147 17.5569 25.0147ZM7.91891 3.11813C5.22594 3.11813 2.95819 5.3931 2.95819 8.09463V17.7632C2.95819 20.4648 5.22594 22.7397 7.91891 22.7397H17.5569C20.2498 22.7397 22.5176 20.4648 22.5176 17.7632V8.23681C22.5176 5.53529 20.2498 3.26032 17.5569 3.26032H7.91891V3.11813Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-auto">
                <a href="tel:<?php echo preg_replace('/[^\d]/i', '', _isset($contact_info, 'phone_number')); ?>">
                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/icons/buzzing-phone-dark.gif" width=38 height=38 alt="Phone" />
                </a>
            </div>
        </div>

        <?php if (!empty($header_menu_section)) { ?>
            <ul class="d-flex flex-column gap-4 mt-5">
                <?php foreach ($header_menu_section as $key => $value) { ?>
                    <li><a href="<?= _issetUrl($value, 'link'); ?>" class="nav-link text-white"><?= _isset($value, 'title'); ?></a></li>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>
</nav>