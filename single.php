<?php
get_header();
 if (get_post_type() === 'departamento'):
?>

<div class="light-box">
    <div class="cont">
        <div class="button" id="close-button">
            <img src="<?php echo get_template_directory_uri().'/img/close.png';?>" alt="Cerrar">
        </div>
        <img src="<?php echo get_template_directory_uri().'/img/img-1.jpg';?>" alt="" id="img_light-box">
    </div>
</div>

<div class="video-container">
    <img src="<?php echo get_template_directory_uri().'/img/desarrollos-angora.jpg'?>" alt="">
</div>

<div class="container">
    <div class="middle-description">
        <div class="title">
            satélite residencial
        </div>
        <div class="bold-title">
            áncora
        </div>

        <div class="text">
            Es un proyecto arquitectónico de usos mixtos único en la zona norte de la CDMX (Satélite). Fue concebido por el despacho de LEGORRETA con la intención de acercar a las personas a una de las expresiones más tangibles del arte: la arquitectura. Para inspirar y apreciar el arte de vivir, Áncora integra el color y la geometría precisos para generar espacios que capturan los sentidos de sus usuarios. Áncora es en una experiencia arquitectónica única que se traduce en comodidad y vanguardia en un espacio que lo tiene <br>
            todo: departamentos, exclusivas amenidades, centro comercial y oficinas.
        </div>

        <!-- GRID -->

        <div class="location-container">
            <!-- 1st column -->
            <div class="column">
                <img src="<?php echo get_template_directory_uri().'/img/pin-purple.png'; ?>" alt="">
            </div>

            <!-- 2nd column -->
            <div class="column">
                <img src="<?php echo get_template_directory_uri().'/img/project-img-demo.png'; ?>" alt="">
            </div>

            <!-- 3rd column -->
            <div class="column">
                <div class="text">
                    <div class="title">
                        ubicacion
                    </div>
                    <div class="list">
                        <ul>
                            <li>5 min. Plaza satélite</li>
                            <li>5 min. Periférico</li>
                            <li>1 min. Gutazvo Baz</li>
                            <li>15 min. Nuevo Polanco</li>
                            <li>20 min. Polanco</li>
                        </ul>
                        <br>
                        <br>
                        <p>

                            Av. Del Cristo 101, xocoyahualco 54080, Tlalnepantla.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Meet Us -->

        <!-- Conocelo -->
        <div class="meet-us-container">
            <div class="column">
                <div>
                    conócelo <img src="<?php echo get_template_directory_uri().'/img/arrow-purple.png';?>" alt="" class="arrow">
                </div>
            </div>
            <div class="column">
                <img src="<?php echo get_template_directory_uri().'/img/paseo-virtual.jpg';?>" alt="">
            </div>
        </div>

        <!-- Visitalo -->
        <div class="meet-us-container">
            <div class="column">
                <div>
                    visítalo <img src="<?php echo get_template_directory_uri().'/img/arrow-purple.png';?>" alt="" class="arrow">
                </div>
            </div>
            <div class="column">
                <img src="<?php echo get_template_directory_uri().'/img/paseo-virtual.jpg';?>" alt="">
            </div>
        </div>

        <!-- Recamaras -->
        <div class="rooms-container">
            <!-- tabs -->
            <div class="tabs-left">
                <div class="title">
                    prototitpos
                </div>
                <div class="tab-container">
                    <div data-id="type-a" class="room-tab tab active">Tipo A</div>
                    <div data-id="type-b" class="room-tab tab">Tipo B</div>
                    <div data-id="type-c" class="room-tab tab">Tipo C</div>
                    <div data-id="type-d" class="room-tab tab">Tipo D</div>
                    <div data-id="type-e" class="room-tab tab">Tipo E</div>
                </div>
            </div>
            <!-- tabs content -->
            <div class="tabs-content">
                <div class="option-container">
                    <!-- A -->
                    <div id="type-a" class="room-type option active">

                        <div class="option-tabs-container">
                            <div data-id="type-a-sub-1" class="option-tab active">1 Recámara</div>
                            <div data-id="type-a-sub-2" class="option-tab">2 Recámaras</div>
                            <div data-id="type-a-sub-3" class="option-tab">3 Recámaras</div>
                        </div>

                        <div id="type-a-sub-1" class="sub-option active option-container">
                            <div class="column light">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri().'/img/fullscreen-icon.png'?>" alt="">
                                </div>
                                <img src="<?php echo get_template_directory_uri().'/img/result-img.png'; ?>" alt="" class="bed-img">
                            </div>
                            <div class="column">
                                <div class="title">
                                    Puerta Tlanepantla A 1
                                </div>
                                <div class="price">
                                    <div class="price-text">
                                        Precios desde:
                                    </div>
                                    <span>
                                        $3.000.000
                                    </span>
                                </div>

                                <div class="address">
                                    <div class="pin">
                                        <img src="<?php echo get_template_directory_uri().'/img/pin-purple.png' ?>" alt="">
                                    </div>
                                    <div class="desc">
                                        Av. Sor Juna Inez de la Cruz 312, <br>
                                        Tlanepantla Estado de Mexico
                                    </div>
                                </div>

                                <div class="amenities">
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/area-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">5,201 m<sup>2</sup></div>
                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/bath-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            2.5 baños
                                        </div>

                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/bed-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            3 recamaras
                                        </div>

                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/pickup-car-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            2 Est.
                                        </div>
                                    </div>
                                </div>

                                <div class="list-amenities">
                                    <ul>
                                        <li>juegos infantiles</li>
                                        <li>palapas con asadores</li>
                                        <li>áreas verdes</li>
                                        <li>cancha multiusos</li>
                                        <li>gym</li>
                                        <li>salón de usos multiples</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="type-a-sub-2" class="sub-option option-container">
                            <div class="column light">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri().'/img/fullscreen-icon.png'?>" alt="">
                                </div>
                                <img src="<?php echo get_template_directory_uri().'/img/result-img.png'; ?>" alt="" class="bed-img">
                            </div>
                            <div class="column">
                                <div class="title">
                                    Puerta Tlanepantla A 2
                                </div>
                                <div class="price">
                                    <div class="price-text">
                                        Precios desde:
                                    </div>
                                    <span>
                                        $3.000.000
                                    </span>
                                </div>

                                <div class="address">
                                    <div class="pin">
                                        <img src="<?php echo get_template_directory_uri().'/img/pin-purple.png' ?>" alt="">
                                    </div>
                                    <div class="desc">
                                        Av. Sor Juna Inez de la Cruz 312, <br>
                                        Tlanepantla Estado de Mexico
                                    </div>
                                </div>

                                <div class="amenities">
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/area-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">5,201 m<sup>2</sup></div>
                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/bath-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            2.5 baños
                                        </div>

                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/bed-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            3 recamaras
                                        </div>

                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/pickup-car-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            2 Est.
                                        </div>
                                    </div>
                                </div>

                                <div class="list-amenities">
                                    <ul>
                                        <li>juegos infantiles</li>
                                        <li>palapas con asadores</li>
                                        <li>áreas verdes</li>
                                        <li>cancha multiusos</li>
                                        <li>gym</li>
                                        <li>salón de usos multiples</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="type-a-sub-3" class="sub-option option-container">
                            <div class="column light">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri().'/img/fullscreen-icon.png'?>" alt="">
                                </div>
                                <img src="<?php echo get_template_directory_uri().'/img/result-img.png'; ?>" alt="" class="bed-img">
                            </div>
                            <div class="column">
                                <div class="title">
                                    Puerta Tlanepantla A 3
                                </div>
                                <div class="price">
                                    <div class="price-text">
                                        Precios desde:
                                    </div>
                                    <span>
                                        $3.000.000
                                    </span>
                                </div>

                                <div class="address">
                                    <div class="pin">
                                        <img src="<?php echo get_template_directory_uri().'/img/pin-purple.png' ?>" alt="">
                                    </div>
                                    <div class="desc">
                                        Av. Sor Juna Inez de la Cruz 312, <br>
                                        Tlanepantla Estado de Mexico
                                    </div>
                                </div>

                                <div class="amenities">
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/area-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">5,201 m<sup>2</sup></div>
                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/bath-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            2.5 baños
                                        </div>

                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/bed-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            3 recamaras
                                        </div>

                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/pickup-car-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            2 Est.
                                        </div>
                                    </div>
                                </div>

                                <div class="list-amenities">
                                    <ul>
                                        <li>juegos infantiles</li>
                                        <li>palapas con asadores</li>
                                        <li>áreas verdes</li>
                                        <li>cancha multiusos</li>
                                        <li>gym</li>
                                        <li>salón de usos multiples</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- B -->
                    <div id="type-b" class="room-type option">
                        <div class="option-tabs-container">
                            <div data-id="type-b-sub-1" class="option-tab  active">1 Recámara</div>
                            <div data-id="type-b-sub-2" class="option-tab ">2 Recámaras</div>
                            <div data-id="type-b-sub-3" class="option-tab ">3 Recámaras</div>
                        </div>

                        <div id="type-b-sub-1" class="sub-option active option-container">
                            <div class="column light">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri().'/img/fullscreen-icon.png'?>" alt="">
                                </div>
                                <img src="<?php echo get_template_directory_uri().'/img/result-img.png'; ?>" alt="" class="bed-img">
                            </div>
                            <div class="column">
                                <div class="title">
                                    Puerta Tlanepantla B 1
                                </div>
                                <div class="price">
                                    <div class="price-text">
                                        Precios desde:
                                    </div>
                                    <span>
                                        $3.000.000
                                    </span>
                                </div>

                                <div class="address">
                                    <div class="pin">
                                        <img src="<?php echo get_template_directory_uri().'/img/pin-purple.png' ?>" alt="">
                                    </div>
                                    <div class="desc">
                                        Av. Sor Juna Inez de la Cruz 312, <br>
                                        Tlanepantla Estado de Mexico
                                    </div>
                                </div>

                                <div class="amenities">
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/area-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">5,201 m<sup>2</sup></div>
                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/bath-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            2.5 baños
                                        </div>

                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/bed-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            3 recamaras
                                        </div>

                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/pickup-car-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            2 Est.
                                        </div>
                                    </div>
                                </div>

                                <div class="list-amenities">
                                    <ul>
                                        <li>juegos infantiles</li>
                                        <li>palapas con asadores</li>
                                        <li>áreas verdes</li>
                                        <li>cancha multiusos</li>
                                        <li>gym</li>
                                        <li>salón de usos multiples</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="type-b-sub-2" class="sub-option option-container">
                            <div class="column light">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri().'/img/fullscreen-icon.png'?>" alt="">
                                </div>
                                <img src="<?php echo get_template_directory_uri().'/img/result-img.png'; ?>" alt="" class="bed-img">
                            </div>
                            <div class="column">
                                <div class="title">
                                    Puerta Tlanepantla B 2
                                </div>
                                <div class="price">
                                    <div class="price-text">
                                        Precios desde:
                                    </div>
                                    <span>
                                        $3.000.000
                                    </span>
                                </div>

                                <div class="address">
                                    <div class="pin">
                                        <img src="<?php echo get_template_directory_uri().'/img/pin-purple.png' ?>" alt="">
                                    </div>
                                    <div class="desc">
                                        Av. Sor Juna Inez de la Cruz 312, <br>
                                        Tlanepantla Estado de Mexico
                                    </div>
                                </div>

                                <div class="amenities">
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/area-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">5,201 m<sup>2</sup></div>
                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/bath-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            2.5 baños
                                        </div>

                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/bed-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            3 recamaras
                                        </div>

                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/pickup-car-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            2 Est.
                                        </div>
                                    </div>
                                </div>

                                <div class="list-amenities">
                                    <ul>
                                        <li>juegos infantiles</li>
                                        <li>palapas con asadores</li>
                                        <li>áreas verdes</li>
                                        <li>cancha multiusos</li>
                                        <li>gym</li>
                                        <li>salón de usos multiples</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="type-b-sub-3" class="sub-option option-container">
                            <div class="column light">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri().'/img/fullscreen-icon.png'?>" alt="">
                                </div>
                                <img src="<?php echo get_template_directory_uri().'/img/result-img.png'; ?>" alt="" class="bed-img">
                            </div>
                            <div class="column">
                                <div class="title">
                                    Puerta Tlanepantla B 3
                                </div>
                                <div class="price">
                                    <div class="price-text">
                                        Precios desde:
                                    </div>
                                    <span>
                                        $3.000.000
                                    </span>
                                </div>

                                <div class="address">
                                    <div class="pin">
                                        <img src="<?php echo get_template_directory_uri().'/img/pin-purple.png' ?>" alt="">
                                    </div>
                                    <div class="desc">
                                        Av. Sor Juna Inez de la Cruz 312, <br>
                                        Tlanepantla Estado de Mexico
                                    </div>
                                </div>

                                <div class="amenities">
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/area-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">5,201 m<sup>2</sup></div>
                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/bath-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            2.5 baños
                                        </div>

                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/bed-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            3 recamaras
                                        </div>

                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/pickup-car-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            2 Est.
                                        </div>
                                    </div>
                                </div>

                                <div class="list-amenities">
                                    <ul>
                                        <li>juegos infantiles</li>
                                        <li>palapas con asadores</li>
                                        <li>áreas verdes</li>
                                        <li>cancha multiusos</li>
                                        <li>gym</li>
                                        <li>salón de usos multiples</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- C -->
                    <div id="type-c" class="room-type option">
                        <div class="option-tabs-container">
                            <div data-id="type-c-sub-1" class="option-tab active">1 Recámara</div>
                            <div data-id="type-c-sub-2" class="option-tab">1 Recámara</div>
                            <div data-id="type-c-sub-3" class="option-tab">1 Recámara</div>
                        </div>

                        <div id="type-c-sub-1" class="sub-option active option-container">
                            <div class="column light">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri().'/img/fullscreen-icon.png'?>" alt="">
                                </div>
                                <img src="<?php echo get_template_directory_uri().'/img/result-img.png'; ?>" alt="" class="bed-img">
                            </div>
                            <div class="column">
                                <div class="title">
                                    Puerta Tlanepantla C 1
                                </div>
                                <div class="price">
                                    <div class="price-text">
                                        Precios desde:
                                    </div>
                                    <span>
                                        $3.000.000
                                    </span>
                                </div>

                                <div class="address">
                                    <div class="pin">
                                        <img src="<?php echo get_template_directory_uri().'/img/pin-purple.png' ?>" alt="">
                                    </div>
                                    <div class="desc">
                                        Av. Sor Juna Inez de la Cruz 312, <br>
                                        Tlanepantla Estado de Mexico
                                    </div>
                                </div>

                                <div class="amenities">
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/area-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">5,201 m<sup>2</sup></div>
                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/bath-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            2.5 baños
                                        </div>

                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/bed-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            3 recamaras
                                        </div>

                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/pickup-car-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            2 Est.
                                        </div>
                                    </div>
                                </div>

                                <div class="list-amenities">
                                    <ul>
                                        <li>juegos infantiles</li>
                                        <li>palapas con asadores</li>
                                        <li>áreas verdes</li>
                                        <li>cancha multiusos</li>
                                        <li>gym</li>
                                        <li>salón de usos multiples</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="type-c-sub-2" class="sub-option option-container">
                            <div class="column light">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri().'/img/fullscreen-icon.png'?>" alt="">
                                </div>
                                <img src="<?php echo get_template_directory_uri().'/img/result-img.png'; ?>" alt="" class="bed-img">
                            </div>
                            <div class="column">
                                <div class="title">
                                    Puerta Tlanepantla C 2
                                </div>
                                <div class="price">
                                    <div class="price-text">
                                        Precios desde:
                                    </div>
                                    <span>
                                        $3.000.000
                                    </span>
                                </div>

                                <div class="address">
                                    <div class="pin">
                                        <img src="<?php echo get_template_directory_uri().'/img/pin-purple.png' ?>" alt="">
                                    </div>
                                    <div class="desc">
                                        Av. Sor Juna Inez de la Cruz 312, <br>
                                        Tlanepantla Estado de Mexico
                                    </div>
                                </div>

                                <div class="amenities">
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/area-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">5,201 m<sup>2</sup></div>
                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/bath-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            2.5 baños
                                        </div>

                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/bed-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            3 recamaras
                                        </div>

                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/pickup-car-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            2 Est.
                                        </div>
                                    </div>
                                </div>

                                <div class="list-amenities">
                                    <ul>
                                        <li>juegos infantiles</li>
                                        <li>palapas con asadores</li>
                                        <li>áreas verdes</li>
                                        <li>cancha multiusos</li>
                                        <li>gym</li>
                                        <li>salón de usos multiples</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="type-c-sub-3" class="sub-option option-container">
                            <div class="column light">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri().'/img/fullscreen-icon.png'?>" alt="">
                                </div>
                                <img src="<?php echo get_template_directory_uri().'/img/result-img.png'; ?>" alt="" class="bed-img">
                            </div>
                            <div class="column">
                                <div class="title">
                                    Puerta Tlanepantla C 3
                                </div>
                                <div class="price">
                                    <div class="price-text">
                                        Precios desde:
                                    </div>
                                    <span>
                                        $3.000.000
                                    </span>
                                </div>

                                <div class="address">
                                    <div class="pin">
                                        <img src="<?php echo get_template_directory_uri().'/img/pin-purple.png' ?>" alt="">
                                    </div>
                                    <div class="desc">
                                        Av. Sor Juna Inez de la Cruz 312, <br>
                                        Tlanepantla Estado de Mexico
                                    </div>
                                </div>

                                <div class="amenities">
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/area-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">5,201 m<sup>2</sup></div>
                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/bath-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            2.5 baños
                                        </div>

                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/bed-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            3 recamaras
                                        </div>

                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/pickup-car-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            2 Est.
                                        </div>
                                    </div>
                                </div>

                                <div class="list-amenities">
                                    <ul>
                                        <li>juegos infantiles</li>
                                        <li>palapas con asadores</li>
                                        <li>áreas verdes</li>
                                        <li>cancha multiusos</li>
                                        <li>gym</li>
                                        <li>salón de usos multiples</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- D -->
                    <div id="type-d" class="room-type option">
                        <div class="option-tabs-container">
                            <div data-id="type-d-sub-1" class="option-tab active">1 Recámara</div>
                            <div data-id="type-d-sub-2" class="option-tab">1 Recámara</div>
                            <div data-id="type-d-sub-3" class="option-tab">1 Recámara</div>
                        </div>

                        <div id="type-d-sub-1" class="sub-option active option-container">
                            <div class="column light">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri().'/img/fullscreen-icon.png'?>" alt="">
                                </div>
                                <img src="<?php echo get_template_directory_uri().'/img/result-img.png'; ?>" alt="" class="bed-img">
                            </div>
                            <div class="column">
                                <div class="title">
                                    Puerta Tlanepantla D 1
                                </div>
                                <div class="price">
                                    <div class="price-text">
                                        Precios desde:
                                    </div>
                                    <span>
                                        $3.000.000
                                    </span>
                                </div>

                                <div class="address">
                                    <div class="pin">
                                        <img src="<?php echo get_template_directory_uri().'/img/pin-purple.png' ?>" alt="">
                                    </div>
                                    <div class="desc">
                                        Av. Sor Juna Inez de la Cruz 312, <br>
                                        Tlanepantla Estado de Mexico
                                    </div>
                                </div>

                                <div class="amenities">
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/area-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">5,201 m<sup>2</sup></div>
                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/bath-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            2.5 baños
                                        </div>

                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/bed-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            3 recamaras
                                        </div>

                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/pickup-car-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            2 Est.
                                        </div>
                                    </div>
                                </div>

                                <div class="list-amenities">
                                    <ul>
                                        <li>juegos infantiles</li>
                                        <li>palapas con asadores</li>
                                        <li>áreas verdes</li>
                                        <li>cancha multiusos</li>
                                        <li>gym</li>
                                        <li>salón de usos multiples</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="type-d-sub-2" class="sub-option option-container">
                            <div class="column light">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri().'/img/fullscreen-icon.png'?>" alt="">
                                </div>
                                <img src="<?php echo get_template_directory_uri().'/img/result-img.png'; ?>" alt="" class="bed-img">
                            </div>
                            <div class="column">
                                <div class="title">
                                    Puerta Tlanepantla D 2
                                </div>
                                <div class="price">
                                    <div class="price-text">
                                        Precios desde:
                                    </div>
                                    <span>
                                        $3.000.000
                                    </span>
                                </div>

                                <div class="address">
                                    <div class="pin">
                                        <img src="<?php echo get_template_directory_uri().'/img/pin-purple.png' ?>" alt="">
                                    </div>
                                    <div class="desc">
                                        Av. Sor Juna Inez de la Cruz 312, <br>
                                        Tlanepantla Estado de Mexico
                                    </div>
                                </div>

                                <div class="amenities">
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/area-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">5,201 m<sup>2</sup></div>
                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/bath-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            2.5 baños
                                        </div>

                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/bed-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            3 recamaras
                                        </div>

                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/pickup-car-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            2 Est.
                                        </div>
                                    </div>
                                </div>

                                <div class="list-amenities">
                                    <ul>
                                        <li>juegos infantiles</li>
                                        <li>palapas con asadores</li>
                                        <li>áreas verdes</li>
                                        <li>cancha multiusos</li>
                                        <li>gym</li>
                                        <li>salón de usos multiples</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="type-d-sub-3" class="sub-option option-container">
                            <div class="column light">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri().'/img/fullscreen-icon.png'?>" alt="">
                                </div>
                                <img src="<?php echo get_template_directory_uri().'/img/result-img.png'; ?>" alt="" class="bed-img">
                            </div>
                            <div class="column">
                                <div class="title">
                                    Puerta Tlanepantla D 3
                                </div>
                                <div class="price">
                                    <div class="price-text">
                                        Precios desde:
                                    </div>
                                    <span>
                                        $3.000.000
                                    </span>
                                </div>

                                <div class="address">
                                    <div class="pin">
                                        <img src="<?php echo get_template_directory_uri().'/img/pin-purple.png' ?>" alt="">
                                    </div>
                                    <div class="desc">
                                        Av. Sor Juna Inez de la Cruz 312, <br>
                                        Tlanepantla Estado de Mexico
                                    </div>
                                </div>

                                <div class="amenities">
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/area-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">5,201 m<sup>2</sup></div>
                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/bath-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            2.5 baños
                                        </div>

                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/bed-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            3 recamaras
                                        </div>

                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/pickup-car-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            2 Est.
                                        </div>
                                    </div>
                                </div>

                                <div class="list-amenities">
                                    <ul>
                                        <li>juegos infantiles</li>
                                        <li>palapas con asadores</li>
                                        <li>áreas verdes</li>
                                        <li>cancha multiusos</li>
                                        <li>gym</li>
                                        <li>salón de usos multiples</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- E -->
                    <div id="type-e" class="room-type option">
                        <div class="option-tabs-container">
                            <div data-id="type-e-sub-1" class="option-tab active">1 Recámara</div>
                            <div data-id="type-e-sub-2" class="option-tab">1 Recámara</div>
                            <div data-id="type-e-sub-3" class="option-tab">1 Recámara</div>
                        </div>

                        <div id="type-e-sub-1" class="sub-option active option-container">
                            <div class="column light">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri().'/img/fullscreen-icon.png'?>" alt="">
                                </div>
                                <img src="<?php echo get_template_directory_uri().'/img/result-img.png'; ?>" alt="" class="bed-img">
                            </div>
                            <div class="column">
                                <div class="title">
                                    Puerta Tlanepantla E 1
                                </div>
                                <div class="price">
                                    <div class="price-text">
                                        Precios desde:
                                    </div>
                                    <span>
                                        $3.000.000
                                    </span>
                                </div>

                                <div class="address">
                                    <div class="pin">
                                        <img src="<?php echo get_template_directory_uri().'/img/pin-purple.png' ?>" alt="">
                                    </div>
                                    <div class="desc">
                                        Av. Sor Juna Inez de la Cruz 312, <br>
                                        Tlanepantla Estado de Mexico
                                    </div>
                                </div>

                                <div class="amenities">
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/area-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">5,201 m<sup>2</sup></div>
                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/bath-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            2.5 baños
                                        </div>

                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/bed-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            3 recamaras
                                        </div>

                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/pickup-car-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            2 Est.
                                        </div>
                                    </div>
                                </div>

                                <div class="list-amenities">
                                    <ul>
                                        <li>juegos infantiles</li>
                                        <li>palapas con asadores</li>
                                        <li>áreas verdes</li>
                                        <li>cancha multiusos</li>
                                        <li>gym</li>
                                        <li>salón de usos multiples</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="type-e-sub-2" class="sub-option option-container">
                            <div class="column light">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri().'/img/fullscreen-icon.png'?>" alt="">
                                </div>
                                <img src="<?php echo get_template_directory_uri().'/img/result-img.png'; ?>" alt="" class="bed-img">
                            </div>
                            <div class="column">
                                <div class="title">
                                    Puerta Tlanepantla E 2
                                </div>
                                <div class="price">
                                    <div class="price-text">
                                        Precios desde:
                                    </div>
                                    <span>
                                        $3.000.000
                                    </span>
                                </div>

                                <div class="address">
                                    <div class="pin">
                                        <img src="<?php echo get_template_directory_uri().'/img/pin-purple.png' ?>" alt="">
                                    </div>
                                    <div class="desc">
                                        Av. Sor Juna Inez de la Cruz 312, <br>
                                        Tlanepantla Estado de Mexico
                                    </div>
                                </div>

                                <div class="amenities">
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/area-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">5,201 m<sup>2</sup></div>
                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/bath-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            2.5 baños
                                        </div>

                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/bed-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            3 recamaras
                                        </div>

                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/pickup-car-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            2 Est.
                                        </div>
                                    </div>
                                </div>

                                <div class="list-amenities">
                                    <ul>
                                        <li>juegos infantiles</li>
                                        <li>palapas con asadores</li>
                                        <li>áreas verdes</li>
                                        <li>cancha multiusos</li>
                                        <li>gym</li>
                                        <li>salón de usos multiples</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="type-e-sub-3" class="sub-option option-container">
                            <div class="column light">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri().'/img/fullscreen-icon.png'?>" alt="">
                                </div>
                                <img src="<?php echo get_template_directory_uri().'/img/result-img.png'; ?>" alt="" class="bed-img">
                            </div>
                            <div class="column">
                                <div class="title">
                                    Puerta Tlanepantla E 3
                                </div>
                                <div class="price">
                                    <div class="price-text">
                                        Precios desde:
                                    </div>
                                    <span>
                                        $3.000.000
                                    </span>
                                </div>

                                <div class="address">
                                    <div class="pin">
                                        <img src="<?php echo get_template_directory_uri().'/img/pin-purple.png' ?>" alt="">
                                    </div>
                                    <div class="desc">
                                        Av. Sor Juna Inez de la Cruz 312, <br>
                                        Tlanepantla Estado de Mexico
                                    </div>
                                </div>

                                <div class="amenities">
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/area-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">5,201 m<sup>2</sup></div>
                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/bath-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            2.5 baños
                                        </div>

                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/bed-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            3 recamaras
                                        </div>

                                    </div>
                                    <div class="column">
                                        <div class="img">
                                            <img src="<?php echo get_template_directory_uri().'/img/pickup-car-purple.png'; ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            2 Est.
                                        </div>
                                    </div>
                                </div>

                                <div class="list-amenities">
                                    <ul>
                                        <li>juegos infantiles</li>
                                        <li>palapas con asadores</li>
                                        <li>áreas verdes</li>
                                        <li>cancha multiusos</li>
                                        <li>gym</li>
                                        <li>salón de usos multiples</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-form">
    <div class="container">
        <div class="column">
            <div class="title">
                quiero información
            </div>
            <div class="desc">
                Si requiere ponerse en contacto con nosotros, le ofrecemos diferentes medios para que pueda hacerlo, utilice el que más le convenga y con mucho gusto le atenderemos.
            </div>
        </div>
        <div class="column">
            <form class="contact">
                <div class="col">
                    <input type="text" name="" id="" placeholder="NOMBRE">
                    <input type="text" name="" id="" placeholder="TELÉFONO">
                </div>
                <div class="col">
                    <input type="email" name="" id="" placeholder="EMAIL">
                    <select name="" id="">
                        <option value="test">MOTIVO</option>
                        <option value="test">MOTIVO1</option>
                    </select>
                </div>
                <div class="col">
                    <textarea name="" id="" cols="30" rows="10" placeholder="MENSAJE"></textarea>
                </div>
                <div class="col">
                    <input type="submit" value="enviar">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="slider-container">
    <div class="owl-carousel owl-theme" data-slider-id="project">
        <div class="item">
            <img data-thumb="<?php echo get_template_directory_uri().'/img/panoramic-1.jpg' ?>" src="<?php echo get_template_directory_uri().'/img/panoramic-1.jpg' ?>" alt="">
        </div>
        <div class="item">
            <img data-thumb="<?php echo get_template_directory_uri().'/img/panoramic-2.jpg' ?>" src="<?php echo get_template_directory_uri().'/img/panoramic-2.jpg' ?>" alt="">
        </div>
        <div class="item">
            <img data-thumb="<?php echo get_template_directory_uri().'/img/panoramic-3.jpg' ?>" src="<?php echo get_template_directory_uri().'/img/panoramic-3.jpg' ?>" alt="">
        </div>
        <div class="item">
            <img data-thumb="<?php echo get_template_directory_uri().'/img/panoramic-1.jpg' ?>" src="<?php echo get_template_directory_uri().'/img/panoramic-1.jpg' ?>" alt="">
        </div>
        <div class="item">
            <img data-thumb="<?php echo get_template_directory_uri().'/img/panoramic-1.jpg' ?>" src="<?php echo get_template_directory_uri().'/img/panoramic-2.jpg' ?>" alt="">
        </div>
        <div class="item">
            <img data-thumb="<?php echo get_template_directory_uri().'/img/panoramic-1.jpg' ?>" src="<?php echo get_template_directory_uri().'/img/panoramic-3.jpg' ?>" alt="">
        </div>
    </div>

</div>


<div class="grid-gallery">
    <div class="title">
        tu ubicación
    </div>
    <div class="bold-title">
        ideal
    </div>

    <div class="gallery-container">
        <div class="item">
            <img src="<?php echo get_template_directory_uri().'/img/panoramic-1.jpg' ?>" alt="">
        </div>
        <div class="item">
            <img src="<?php echo get_template_directory_uri().'/img/panoramic-1.jpg' ?>" alt="">
        </div>
        <div class="item">
            <img src="<?php echo get_template_directory_uri().'/img/panoramic-1.jpg' ?>" alt="">
        </div>
        <div class="item">
            <img src="<?php echo get_template_directory_uri().'/img/panoramic-1.jpg' ?>" alt="">
        </div>
        <div class="item">
            <img src="<?php echo get_template_directory_uri().'/img/panoramic-1.jpg' ?>" alt="">
        </div>
        <div class="item">
            <img src="<?php echo get_template_directory_uri().'/img/panoramic-1.jpg' ?>" alt="">
        </div>
        <div class="item">
            <img src="<?php echo get_template_directory_uri().'/img/panoramic-1.jpg' ?>" alt="">
        </div>
        <div class="item">
            <img src="<?php echo get_template_directory_uri().'/img/panoramic-1.jpg' ?>" alt="">
        </div>
        <div class="item">
            <img src="<?php echo get_template_directory_uri().'/img/panoramic-1.jpg' ?>" alt="">
        </div>
    </div>
</div>




<script>
$('.owl-carousel').owlCarousel({

    nav: true,
    dots: true,
    items: 1,
    navText: ['<img class="prev" src=<?php echo get_template_directory_uri()."/img/arrow-purple.png" ?>>', '<img class="next" src=<?php echo get_template_directory_uri()."/img/arrow-purple.png" ?>>'],
    // Enable thumbnails
    thumbs: true,

    // When only using images in your slide (like the demo) use this option to dynamicly create thumbnails without using the attribute data-thumb.
    thumbImage: true,

    // Enable this if you have pre-rendered thumbnails in your html instead of letting this plugin generate them. This is recommended as it will prevent FOUC
    thumbsPrerendered: false,

    // Class that will be used on the thumbnail container
    thumbContainerClass: 'owl-thumbs',

    // Class that will be used on the thumbnail item's
    thumbItemClass: 'owl-thumb-item'

})
</script>

<?php
 endif;
get_footer();

?>
