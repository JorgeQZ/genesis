<?php

/**
 * Template Name: Home Page
 */

?>

<?php get_header();?>

<!-- Banner -->
<div class="contenedor-general-items">

    <div class="contenedor-items">
        <div class="cont-item">
            <img src="<?php echo get_template_directory_uri().'/img/edo-mx.jpg' ?>" alt="">
            <div class="mask">
                <p>estado de méxico</p>
                <img src="<?php echo get_template_directory_uri().'/img/triangulo-flecha.png' ?>" alt="">
            </div>
        </div>
        <div class="cont-item">
            <img src="<?php echo get_template_directory_uri().'/img/cabos.jpg' ?>" alt="">
            <div class="mask">
                <p>los cabos</p>
                <img src="<?php echo get_template_directory_uri().'/img/triangulo-flecha.png' ?>" alt="">
            </div>
        </div>
        <div class="cont-item">
            <img src="<?php echo get_template_directory_uri().'/img/guadalajara.jpg' ?>" alt="">
            <div class="mask">
                <p>guadalajara</p>
                <img src="<?php echo get_template_directory_uri().'/img/triangulo-flecha.png' ?>" alt="">
            </div>
        </div>
        <div class="cont-item">
            <img src="<?php echo get_template_directory_uri().'/img/guanajuato.jpg' ?>" alt="">
            <div class="mask">
                <p>guanajuato</p> 
                <img src="<?php echo get_template_directory_uri().'/img/triangulo-flecha.png' ?>" alt="">
            </div>
        </div>
    </div>

</div>
<!-- Banner -->

<!-- Filtros -->
<div class="filter-container">
    <div class="filter-title">
        Encuentra el departamento
        <div class="focus">
            que estabas buscando.
        </div>
    </div>

    <!-- Filters -->
    <div class="filters">
        <!-- col -->
        <div class="col">
            <div class="filter-cont">
                <div class="value">Ubicación </div>
                <ul>
                    <li>Test 1</li>
                    <li>Test 2</li>
                    <li>Test 3</li>
                </ul>
            </div>
        </div> <!-- col -->

        <!-- col -->
        <div class="col">
            <div class="filter-cont">
                <div class="value">Nº de recamaras </div>
                <ul>
                    <li>Test 1</li>
                    <li>Test 2</li>
                    <li>Test 3</li>
                </ul>
            </div>
        </div> <!-- col -->
    </div><!-- Filters -->
    <!-- Filters -->
    <div class="filters">
        <!-- col -->

        <div class="col">
            <div class="filter-cont">
                <div class="value">Baños </div>
                <ul>
                    <li>Test 1</li>
                    <li>Test 2</li>
                    <li>Test 3</li>
                </ul>
            </div>
        </div> <!-- col -->

        <!-- col -->
        <div class="col">
            <div class="filter-cont">
                <div class="value">rango de precios </div>

                <ul>
                    <li>Test 1</li>
                    <li>Test 2</li>
                    <li>Test 3</li>
                </ul>
            </div>
        </div> <!-- col -->

    </div><!-- Filters -->

    <!-- Busqueda avanzada -->
    <div class="advanced-search">
        <div class="title">
            Busqueda avanzada
            <div class="little-arrow"></div>
        </div>
    </div> <!-- Busqueda avanzada -->

    <!-- Boton buscar -->
    <div class="filter-submit">
        <div class="submit-cont">
            <input type="submit" value="Buscar">
        </div>
    </div><!-- Boton buscar -->

</div><!-- Filtros -->

<!-- Quienes somos -->
<div class="about-container">
    <div class="container">
        <div class="content">
            <div class="about-title">
                <div class="about-upper-title">
                    <span>
                        quiénes somos
                    </span>
                </div>
                <div class="focus" data-text="GÉNESIS CAPITAL">GÉNESIS CAPITAL</div>
            </div>
            <div class="text">
                Somos una desarrolladora que nace bajo la premisa de dar solidez a proyectos residenciales, corporativos y comerciales que se rigen bajo los más estrictos estándares de calidad. Por ello nuestro equipo está conformado por expertos del sector que cuentan con más de 15 años de experiencia, generando propuestas de vanguardia y reafirmando nuestro compromiso con la calidad, el diseño y la exclusividad.
            </div>
            <div class="vermas">
                Ver más
            </div>
        </div>
    </div>
</div>
<!-- Quienes somos -->
<!-- Video -->
<div class="video-container">
    <div class="container">
        <div class="title">
            INIGUALABLE
            <div class="focus" data-text="GÉNESIS CAPITAL">ESTILO PARA DISFRUTAR</div>
        </div>

        <div class="video">
            <iframe src="https://www.youtube.com/embed/1WTqnmMNKE8?start=0&modestbranding=1&showinfo=0&rel=0&cc_load_policy=1&iv_load_policy=3&theme=light&fs=0&color=white&autohide=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="grid">
            <div class="item">
                <img src="<?php echo get_template_directory_uri().'/img/icon-residencias.png' ?>" alt="">
                <div class="content">
                    <div class="min-title">
                        Espacios <br> Residenciales
                    </div>
                    <div class="text">
                        los mejores acabados
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri().'/img/icon-comer.png' ?>" alt="">
                <div class="content">
                    <div class="min-title">
                        Espacios <br> Comerciales

                    </div>
                    <div class="text">
                        la mejor ubicación y distribución
                    </div>
                </div>

            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri().'/img/icon-corpo.png' ?>" alt="">
                <div class="content">
                    <div class="min-title">
                        Espacios <br> Corporativos

                    </div>
                    <div class="text">
                        una excelente organización
                    </div>
                </div>


            </div>
        </div>
    </div>
</div><!-- Video -->

<!-- Contacto -->
<!-- <div class="contact-container">
    <div class="container">
        <div class="col">
            <div class="title" data-text="Contáctanos">Contáctanos</div>
            <div class="text">Si requiere ponerse en contacto con nosotros, le ofrecemos diferentes medios para que pueda hacerlo, utilice el que más le convenga y con mucho gusto le atenderemos.</div>

            <div class="form">
                <div class="form-row">
                    <div class="form-group">
                        <input type="text" name="NOMBRE" id="NOMBRE" placeholder="NOMBRE">
                    </div>

                    <div class="form-group">
                        <input type="text" name="EMAIL" id="EMAIL" placeholder="EMAIL">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <input type="text" name="TELÉFONO" id="TELÉFONO" placeholder="TELÉFONO">
                    </div>

                    <div class="form-group">
                        <div class="select-cont">
                            <div class="value">MOTIVO </div>
                            <ul>
                                <li>Información de desarrollos residenciales</li>
                                <li>Ofrecer producto/servicio</li>
                                <li>Otro</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <textarea name="" id="" cols="30" rows="10" placeholder="MENSAJE"></textarea>
                </div>
                <div class="form-row">
                    <div class="submit-cont">
                        <input type="submit" value="Enviar">
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="content">
                <div class="row">
                    <div class="column">
                        <img src="<?php echo get_template_directory_uri().'/img/PIN.png'?>" alt="">
                    </div>
                    <div class="column">
                        Ferrocarril De Cuernavaca 76, Piso 4, Col. Lomas De Chapultepec,
                        Delegación Miguel Hidalgo C.P. 11000, CDMX.

                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <img src="<?php echo get_template_directory_uri().'/img/mail.png'?>" alt="">
                    </div>
                    <div class="column">
                        <a href="mailto:ventas@genesiscapital.mx" target="_top">
                            ventas@genesiscapital.mx
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <img src="<?php echo get_template_directory_uri().'/img/phone.png'?>" alt="">
                    </div>
                    <div class="column">
                        <a href="tel:01 800 0910 800" target="_top">01 800 0910 800</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<?php get_template_part('template-parts/contact'); ?>
<!-- Contacto -->
<?php get_footer();?>

<script>
$(document).ready(function() {


    $(".contenedor-general-banner .cont-contenido .cont-edificios .items .col").each(function(index) {

        $(this).hover(function() {
            $(".contenedor-general-banner .cont-contenido .cont-edificios .hovers img").eq(index).addClass("active");
            $(".contenedor-general-banner .cont-contenido .cont-logo .logo").eq(index).addClass("active");
        }, function() {
            $(".contenedor-general-banner .cont-contenido .cont-edificios .hovers img").eq(index).removeClass("active");
            $(".contenedor-general-banner .cont-contenido .cont-logo .logo").eq(index).removeClass("active");
        });

    });

});
</script>





<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>

<style>
.contenedor-general-banner .cont-contenido .cont-edificios,
.filter-container>div,
.about-container .container .content,
.video-container .container>div,
.contact-container .container .col>div {
    opacity: 0;
}

</style>

<script>
var $j = jQuery.noConflict();

jQuery(function($j) {
    /*
        $j('.bascule-container .content-front .options .option, .bascule-container .content-behinde .text .title, .bascule-container .content-behinde .text .desc').waypoint(function() {
            $j(this).toggleClass('fadeInUp animated');
        }, {
            offset: '75%',
            triggerOnce: true
        });
    */
    $j('.contenedor-general-banner .cont-contenido .cont-edificios, .filter-container > div, .about-container .container .content, .video-container .container > div, .contact-container .container .col > div').waypoint(function() {
        $j(this).toggleClass('fadeIn animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });
    /*
        $j('.hero-banner .hero-title').waypoint(function() {
            $j(this).toggleClass('fadeIn animated');
        }, {
            offset: '100%',
            triggerOnce: true
        });
    */

});
</script>
