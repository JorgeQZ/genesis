<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://use.typekit.net/nkj7tom.css">
    <?php wp_head(); ?>
</head>

<body>

    <header>
        <a href="#" class="brand-logo">
            <img src="<?php echo get_template_directory_uri().'/img/logo.png'?>" alt="Genesis Capital">
        </a>

        <div class="menu">
            <ul>
                <li class="active"><a href="#">Inicio</a></li>
                <li><a href="#">quienés somos</a></li>
                <li><a href="#">desarrollos</a></li>
                <li><a href="#">contacto</a></li>
            </ul>
            <div class="social-links">
                <a href="" class="item"><img src="<?php  echo get_template_directory_uri().'/img/phone.png'?>" alt=""></a>
                <a href="" class="item"><img src="<?php  echo get_template_directory_uri().'/img/mail.png'?>" alt=""></a>
            </div>
        </div>
    </header>
