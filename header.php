<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <title>つぶやきブログ</title>
    <?php wp_head(); ?>
</head>

<body>
<div id="wrap">
<nav class="navbar navbar-toggleable-sm navbar-light bg-info navbar-inverse" style="min-height:60px;">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">

                    <a class="nav-link text-light" href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a>

                </li>
                <li class="nav-item active">
                    <a class="nav-link text-light" href="<?php echo get_page_link(65); ?>">Profile</a>
                </li>
                <li class="nav-item active">
                  
                </li>
            </ul>
    </nav>
    <header class="header-top">
        <h1>
        <a id="header-h1-a" href="<?php echo esc_url( home_url( '/' ) ); ?>">つぶやきブログ</a>
        </h1>
        <?php if ( is_active_sidebar( 'header-nav-widget' ) ) : ?>
        <div class="header-widget">
            <?php dynamic_sidebar( 'header-nav-widget' ); ?>
        </div>
        <?php endif; ?>
    </header>
    <div id="container">
        <div class="row">
            <div class="col-sm-8 main">