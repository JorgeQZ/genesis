<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://use.typekit.net/nkj7tom.css">
    <?php wp_head(); ?>
</head>

<body>
    <a class="call-center" href="#" target="_blank">
        <div class="text">
            call-center <br>
            <small>800-0910-800</small>
        </div>
        <div class="image">
            <img src="<?php echo get_template_directory_uri().'/img/headset.png' ?>" alt="">
        </div>
    </a>
    <header class="">
        <a href="<?php echo home_url(); ?>" class="brand-logo">
            <img src="<?php echo get_template_directory_uri().'/img/logo-color.png'?>" alt="Genesis Capital">
            <img class="scrolled" src="<?php echo get_template_directory_uri().'/img/logo.png'?>" alt="Genesis Capital">
        </a>

        <div class="menu-button" id="menu-button">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="cont-menu">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'Header'
                )
            );
            ?>

            <div class="social-links">
                <a href="<?php echo home_url().'/busqueda-avanzada/'; ?>" class="item">
                    <img src="<?php  echo get_template_directory_uri().'/img/icon-search.png'?>" alt="">
                    <img class="img-alt" src="<?php  echo get_template_directory_uri().'/img/icon-search-alt.png'?>" alt="">
                </a>
                <a href="" class="item">
                    <img src="<?php  echo get_template_directory_uri().'/img/mail.png'?>" alt="">
                    <img class="img-alt" src="<?php  echo get_template_directory_uri().'/img/mail-alternate.png'?>" alt="">
                </a>
                <a class="item" href="">
                    <img src="<?php  echo get_template_directory_uri().'/img/phone.png'?>" alt="">
                    <img class="img-alt" src="<?php  echo get_template_directory_uri().'/img/phone-alternate.png'?>" alt="">
                </a>
                <a class="item-txt">
                    800 0910 800
                </a>
            </div>
        </div>
    </header>
