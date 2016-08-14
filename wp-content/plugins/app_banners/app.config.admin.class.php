<?php

if(!class_exists('AppConfigManage')) {
    class AppConfigManage 
    {
        private function fn_get_apps($wpdb)
        {
            $ab_table = "dp24_apps_banners";
            $b_sql = "SHOW COLUMNS FROM {$ab_table} WHERE Field = 'app'";
            $apps = $wpdb->get_results($b_sql, ARRAY_A);
            preg_match("/^enum\(\'(.*)\'\)$/", $apps['0']['Type'], $matches);
            $enum = explode("','", $matches['1']);
            return $enum;
        }

        public function page() 
        {
            global $wpdb;  			

            if (isset($_POST['create_config'])) {
                self::fn_create_config_files($wpdb, $_POST['link_data']['create_config_file']);
            }
            $apps = self::fn_get_apps($wpdb); ?>
            <div class='wrap'>
                <h2><?php _e('Application', BANNER_DOMAIN); ?></h2>
                <div class="clear"></div>
                <form method="post" action="<?php echo $_SERVER["REQUEST_URI"];?>">
                    <table class="widefat fixed" cellpadding="0">
                        <thead>
                            <tr>
                                <th id="t-name" class="column-title" style="width:31%;"><?php _e('Name', BANNER_DOMAIN);?></th>     
                                <th id="t-status" class="column-title" style="width:5%;"><?php _e('create config', BANNER_DOMAIN); ?></th>
                            </tr>
                        </thead>
                        <body>
                            <?php foreach ($apps as $i => $app) { ?>
                                <tr class="<?php echo (($i & 1) ? 'alternate' : ''); ?>">
                                    <td class="post-title column-title"><strong><?php echo $app; ?></strong></td>						
                                    <td class="post-title column-title"><input type="checkbox" name="link_data[create_config_file][<?php echo $app; ?>]" id="is_create"></td>
                                </tr>
                            <?php } ?>
                        </body>
                    </table>
                    <button id="submit_button" class="color-btn color-btn-left" name="create_config" type="submit">
                        <?php _e('create_config', BANNER_DOMAIN) ?>
                    </button>
                </form>
            </div>
        <?php
        }
    }
}

