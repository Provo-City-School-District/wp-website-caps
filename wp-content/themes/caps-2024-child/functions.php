<?php

function my_theme_variables()
{
    $my_theme_variables = array(
        'logo' => get_stylesheet_directory_uri() . '/assets/img/site-logo.png',
        'full_school_name' => 'Provo Center for Advanced Professional Studies (CAPS)',
        'short_school_name' => 'Provo CAPS',
        // 'school_address' => '1199 N. Lakeshore Dr. Provo, Utah 84601',
        'google_tag_manager_id' => 'G-FTPJPV04N2',
        'top_sidebar_cal' => '[calendar id="2064"]',
        'bot_sidebar_cal' => '[calendar id="2066"]',
        'front_page_cal' => '[calendar id="102"]',
        'insta_link' => '#',
        'facebook_link' => '#',
        // 'twitter_link' => '#',
        'full_calendar_link' => 'https://provohigh.provo.edu/school-calendar/',
        // 'search_icon' => get_template_directory_uri() . '/assets/icons/search-loupe.svg',
        'blogLink' => 'https://provohigh.provo.edu/category/news/',
    );
    return $my_theme_variables;
}
function sidebar_menu()
{
    //TODO: add a wp menu here instead of hardcoding
    echo "<ul>";
    echo "<li><a href='https://provohigh.provo.edu/school-calendar/a-b-calendar-month-view/'>A/B Calendar Month View</a></li>";
    echo "</ul>";
}
function pcsd_child_theme_enqueue_styles()
{
    wp_enqueue_style('variables', get_stylesheet_directory_uri() . '/assets/css/variables.css', '', '1.0.0', false);
    //if custom styles are needed
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'pcsd_child_theme_enqueue_styles', 9999);
