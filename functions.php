<?php

function kfum_enqueue_style () {
    wp_enqueue_style("kfum-style", get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "kfum_enqueue_style");

function kfum_register_menu () {
    register_nav_menu("main-menu", "Main menu");
}
add_action("init", "kfum_register_menu");
?>