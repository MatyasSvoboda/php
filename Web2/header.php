<!DOCTYPE html>
<html <?php language_attributes();?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo("template_url");?>/style.css">
    <title><?php bloginfo("name"); ?></title>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <section class="header-photo">
        <a href="#nav" class="buttonTop">&#8679;</a>
        <header>
            <nav id="nav">
                <label for="menu-toggle"><span class="material-icons">menu</span></label>
                <input id="menu-toggle" name="menu-toggle" type="checkbox">
                <?php wp_nav_menu(["theme_location"=>"primary","menu_class"=>"menu"]); ?>
            </nav>
        </header>