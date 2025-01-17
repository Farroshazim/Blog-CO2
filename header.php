<!DOCTYPE html>
<html lang="id" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widht-device-widht, initial-scale=1">

    <title><?php bloginfo('name'); ?> | <?php wp_title(); ?> </title>

    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?v=xze">
    <link rel="profile" href="http://pmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
    <div class="header">
        <div class="logo" >
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/image/logo.png" alt="<?php bloginfo('name'); ?> "></a>
        </div>
        <div class="header-right">
            <ul>
                    <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
            </ul>
        </div>
    </div>
    