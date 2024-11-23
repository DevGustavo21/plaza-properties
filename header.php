<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Start_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo the_title() ?> - Plaza Properties</title>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://db.onlinewebfonts.com/c/7520a52bbfcfbc6ab8cd9aa5a35bf35b?family=Coldiac+Free+Regular" rel="stylesheet">                
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> style="position:relative">
    <?php wp_body_open(); ?>

    <?php get_template_part('template-parts/header/header-normal'); ?>
