<?php
function the_sidebar_menu(){
	wp_nav_menu(array('theme_location'=>'header-menu','container_class'=>'primary','container'=>'nav','items_wrap'=>'<ul><li id="menu-close">&#xe654;</li>%3$s</ul>','fallback_cb'=>'defalutmenu')); 
}
function defalutmenu(){
	$menutext='<nav class="primary"><ul><li id="menu-close">&#xe654;</li><li><a href="'.home_url() .'">'.__('Home').'</a></li></ul></nav>';
	echo $menutext;
}
register_nav_menus(array('header-menu' => __( '导航菜单')));
