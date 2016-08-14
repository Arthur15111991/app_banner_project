<?php
/*
Plugin Name: Application banners
Description: Allows you to create, edit custom banners for user application.
Version: 0.0.1
Author: Arthur Chernyshev
Author URI: https://vk.com/id28808075/
*/

include_once('config.class.php');
if (!class_exists('AppBanners' && class_exists('AppBanners'))) {

    class AppBanners extends AppBannersConfig 
    {
        function __construct()
        {
            parent::__construct();
            add_action('admin_menu', array(&$this, 'fn_reg_admin_page'));
        }

        public function fn_reg_admin_page() 
        {
            $menu_page = add_menu_page(__('App Banners', BANNER_DOMAIN), __('App Banners', BANNER_DOMAIN), BANNER_ACCESS, 'app-banners', array(&$this, 'fn_manage_banners'));
            add_submenu_page('app-banners', __('Manage banners', BANNER_DOMAIN), __('Manage banners', BANNER_DOMAIN), BANNER_ACCESS, 'app-banners', array(&$this, 'fn_manage_banners'));
        }

        public function fn_manage_banners() 
        {
            include_once('list.admin.class.php');
            $list = new BannersManage();
            $list->page();
        }        
    }
}

$custom_banners_options = new AppBanners();