<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.typekit.net/nxx5hnk.css">
  <link rel="stylesheet" href="dist/styles/main.css">
  <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon.png">
  <title>Gelato</title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php
  // @link https://developer.wordpress.org/reference/functions/wp_body_open/
  // Fires the wp_body_open action.
  wp_body_open();
  get_template_part('components/header')
  ?>
<main>