<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }


     /**
     * Return sidebar choice from Advanced Custom Fields
     *
     * @return array
     */
    public function sideBar() {
        $sidebar = get_field('sidebar');
        return $sidebar;

    } //end public function homeExtras


    public function userInfo()
    {
        $user_info = [];

        $current_user = wp_get_current_user();
        $user_name = $current_user->user_login;

        array_push($user_info, $user_name); //[0]

        return $user_info;
    }
}
