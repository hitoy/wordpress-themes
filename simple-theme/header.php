<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=yes">
    <title><?php wp_title('-',true,'right');?></title>
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css">
    <link rel="alternate" type="application/rss+xml" title="test &raquo; Feed" href="<?php bloginfo('rss2_url');?>">
    <link rel="icon" href="<?php bloginfo('template_url');?>/images/favicon.ico">
</head>
<body>
<header class="site-header">
    <div class="topmenu" id="topmenu">&#xe726;</div>
    <div class="logo"><a href="<?php bloginfo('siteurl');?>"><h1><?php bloginfo('name');?></h1></a></div>
    <div class="search"><form action="<?php bloginfo('siteurl')?>/index.php"><input type="text" name="s" class="search-input"><input type="submit" value="&#xe65a;" class="search-btn"></div>
</header>
<aside class="left sidebar" id="sidebar-menu">
    <section class="widget">
            <?php the_sidebar_menu()?>
    </section>
</aside>
