<?php /* Template Name: Tailwind  */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div data-scroll-container>
        <main role="main">
            <?php wp_body_open(); ?>
            <?php blade('pages.page'); ?>