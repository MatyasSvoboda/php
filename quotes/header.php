<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="Václav Němec">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo("name"); ?></title>
  <link rel="stylesheet" href="<?php bloginfo("template_url");?>/style.css">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="wrapper">
    <header>
      <h1>
        <a href="<?php bloginfo("url");?>">
          <?php bloginfo("name"); ?>
        </a>
      </h1>
      <nav>
        <?php wp_nav_menu(["theme_location" => "primary"]); ?>
      </nav>
    </header>
    <main>