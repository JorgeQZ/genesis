<?php

/**
 * Template Name: Home Page
 */


    get_header();
    $seccion_principal = get_field('seccion_principal');
    $seccion_caracteristicas = get_field('seccion_caracteristicas');
    $seccion_quienes_somos = get_field('seccion_quienes_somos');
?>

<!-- Banner -->
<!-- <div class="contenedor-general-items">

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

</div> -->
<!-- Banner -->

<!-- Home Hero -->
<div class="home-banner">
    <div class="cont-size" style="background-image: url('<?php echo $seccion_principal['imagen']; ?>')">
        <img src="<?php echo $seccion_principal['imagen']; ?>" alt="">
        <div class="cont-info">
            <?php echo $seccion_principal['informacion']; ?>
            <!--
            <h1>Te damos más</h1>
            <h1> <strong> por tu dinero. </strong></h1>
            <ul>
                <li>Estado de méxico</li>
                <li>Los cabos, bcs</li>
                <li>Guadalajara, Jal</li>
                <li>Irapuato, gto</li>
            </ul>
            -->
        </div>
    </div>
</div><!-- Home Hero -->

<!-- Mini Banner Ads -->
<?php if(have_rows('banners')): ?>
<div class="owl-carousel owl-theme mini-banner-slider">
    <?php while(have_rows('banners')): the_row();
            $informacion = get_sub_field('informacion');
            $imagen = get_sub_field('imagen');
        ?>

    <div class="item" style="background-image: url(<?php the_sub_field('imagen'); ?>);">
        <?php the_sub_field('informacion'); ?>
    </div>

    <?php endwhile; ?>
</div>
<?php endif; ?>

<!--
<div class="owl-carousel owl-theme mini-banner-slider">
    <div class="item">
        <div class="bold-title">
            departamentos
        </div>
        <div class="title">
            desde $2.5 millones
        </div>
    </div>
    <div class="item">
        <div class="bold-title">
            departamentos
        </div>
        <div class="title">
            desde $2.5 millones
        </div>
    </div>
    <div class="item">
        <div class="bold-title">
            departamentos
        </div>
        <div class="title">
            desde $2.5 millones
        </div>
    </div>
</div>
-->
<!-- Mini Banner Ads -->

<!-- Grid Departments -->
<div class="grid-dept-container">
    <div class="item">

        <div class="bg-image" style="background-image: url(<?php echo get_template_directory_uri().'/img/grid-ancora-pic.jpg'; ?>);"></div>

        <div class="logo-dept">
            <img src="<?php echo get_template_directory_uri().'/img/logo-ancora.png'; ?>" alt="">
        </div>
    </div>
    <div class="item">

        <div class="bg-image" style="background-image: url(<?php echo get_template_directory_uri().'/img/grid-bolognia-pic.jpg'; ?>);"></div>
        <div class="logo-dept">
            <img src="<?php echo get_template_directory_uri().'/img/logo-bologna.png'; ?>" alt="">
        </div>
    </div>
    <div class="item">

        <div class="bg-image" style="background-image: url(<?php echo get_template_directory_uri().'/img/grid-montalva-pic.jpg'; ?>);"></div>
        <div class="logo-dept">
            <img src="<?php echo get_template_directory_uri().'/img/logo-montalva.png'; ?>" alt="">
        </div>
    </div>
    <div class="item">

        <div class="bg-image" style="background-image: url(<?php echo get_template_directory_uri().'/img/grid-tlane-pic.jpg'; ?>);"></div>
        <div class="logo-dept">
            <img src="<?php echo get_template_directory_uri().'/img/logo-tlane.png'; ?>" alt="">
        </div>
    </div>
</div><!-- Grid Departments -->

<!-- Map -->
<?php get_template_part('template-parts/map'); ?>
<!-- Map -->


<!-- Valores -->
<!-- <div class="contenedor-general-valores">
    <img class="dec-izq" src="<?php echo get_template_directory_uri().'/img/valores-dec-izq.png' ?>" alt="">
    <img class="dec-der" src="<?php echo get_template_directory_uri().'/img/valores-dec-der.png' ?>" alt="">
    <div class="title">
        NUESTROS
        <div class="focus">VALORES</div>
    </div>
    <div class="contenedor-info-valores">
        <div class="cont-info-valor">
            <div class="info">
                <img src="<?php echo get_template_directory_uri().'/img/icon-valor.png' ?>" alt="">
                <p class="tit">comunicación</p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi euismod diam ac diam porta.
                </p>
            </div>
        </div>
        <div class="cont-info-valor">
            <div class="info">
                <img src="<?php echo get_template_directory_uri().'/img/icon-valor.png' ?>" alt="">
                <p class="tit">profesionalismo</p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi euismod diam ac diam porta,
                    vitae viverra ante dictum. Praesent imperdiet arcu vel varius imperdiet. Ut posuere dolor.
                </p>
            </div>
        </div>
        <div class="cont-info-valor">
            <div class="info">
                <img src="<?php echo get_template_directory_uri().'/img/icon-valor.png' ?>" alt="">
                <p class="tit">transparencia</p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi euismod diam ac diam porta,
                    vitae viverra ante dictum. Praesent imperdiet arcu vel varius imperdiet. Ut posuere dolor
                    vitae nisl facilisis hendrerit. Vivamus erat libero.
                </p>
            </div>
        </div>
        <div class="cont-info-valor">
            <div class="info">
                <img src="<?php echo get_template_directory_uri().'/img/icon-valor.png' ?>" alt="">
                <p class="tit">colaboración</p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi euismod diam ac diam porta,
                    vitae viverra ante dictum. Praesent imperdiet arcu vel varius imperdiet. Ut posuere dolor
                    vitae nisl facilisis hendrerit. Vivamus erat libero, ultricies id egestas eu, tincidunt non
                    libero. Fusce vel gravida orci. Praesent vitae arcu urna.
                </p>
            </div>
        </div>
        <div class="cont-info-valor">
            <div class="info">
                <img src="<?php echo get_template_directory_uri().'/img/icon-valor.png' ?>" alt="">
                <p class="tit">respeto</p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi euismod diam ac diam porta,
                    vitae viverra ante dictum. Praesent imperdiet arcu vel varius imperdiet. Ut posuere dolor
                    vitae nisl facilisis hendrerit. Vivamus erat liber.
                </p>
            </div>
        </div>
        <div class="cont-info-valor">
            <div class="info">
                <img src="<?php echo get_template_directory_uri().'/img/icon-valor.png' ?>" alt="">
                <p class="tit">servicio</p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi euismod diam ac diam porta,
                    vitae viverra ante dictum. Praesent imperdiet arcu vel varius imperdiet. Ut posuere dolor.
                </p>
            </div>
        </div>
        <div class="cont-info-valor">
            <div class="info">
                <img src="<?php echo get_template_directory_uri().'/img/icon-valor.png' ?>" alt="">
                <p class="tit">confianza</p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi euismod diam ac diam porta.
                </p>
            </div>
        </div>
    </div>
    <div class="contenedor-valores">
        <div class="cont-valor">
            <div class="item"></div>
            <p class="tit">comunicación</p>
        </div>
        <div class="cont-valor">
            <div class="item"></div>
            <p class="tit">profesionalismo</p>
        </div>
        <div class="cont-valor">
            <div class="item"></div>
            <p class="tit">transparencia</p>
        </div>
        <div class="cont-valor">
            <div class="item"></div>
            <p class="tit">colaboración</p>
        </div>
        <div class="cont-valor">
            <div class="item"></div>
            <p class="tit">respeto</p>
        </div>
        <div class="cont-valor">
            <div class="item"></div>
            <p class="tit">servicio</p>
        </div>
        <div class="cont-valor">
            <div class="item"></div>
            <p class="tit">confianza</p>
        </div>
    </div>
</div> -->
<!-- Valores -->


<!-- Video -->
<div class="video-container">
    <div class="container">
        <div class="title">
            INIGUALABLE
            <div class="focus" data-text="GÉNESIS CAPITAL">ESTILO PARA DISFRUTAR</div>
        </div>

        <div class="cont">
            <div class="grid">


                <?php
            if( have_rows('seccion_caracteristicas') ): while ( have_rows('seccion_caracteristicas') ) : the_row();
                if( have_rows('caracteristicas') ): while ( have_rows('caracteristicas') ) : the_row();
                    $imagen = get_sub_field('imagen');
                    $titulo = get_sub_field('titulo');
                    $descripcion = get_sub_field('descripcion');
                ?>

                <div class="item">
                    <img src="<?php the_sub_field('imagen'); ?>" alt="">
                    <div class="content">
                        <div class="min-title">
                            <?php the_sub_field('titulo'); ?>
                        </div>
                        <div class="text">
                            <?php the_sub_field('descripcion'); ?>
                        </div>
                    </div>
                </div>

                <?php
                endwhile; endif;
            endwhile; endif;
            ?>

                <!--
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
            -->
            </div>

            <div class="video">
                <?php echo $seccion_caracteristicas['video']; ?>
                <!--
                <iframe src="https://www.youtube.com/embed/1WTqnmMNKE8?start=0&modestbranding=1&showinfo=0&rel=0&cc_load_policy=1&iv_load_policy=3&theme=light&fs=0&color=white&autohide=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            -->
            </div>

        </div>
    </div>
</div><!-- Video -->


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
                <div class="focus" data-text="GÉNESIS CAPITAL"> <?php echo $seccion_quienes_somos['titulo']; ?> </div>
            </div>
            <div class="text">
                <?php echo $seccion_quienes_somos['descripcion']; ?>
            </div>
            <div class="vermas">
                <a href="<?php echo $seccion_quienes_somos['enlace']; ?>">
                    Ver más
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Quienes somos -->
<!-- Contacto -->
<?php get_template_part('template-parts/contact'); ?>
<!-- Contacto -->
<?php get_footer();?>

<script>
$(document).ready(function() {


    $(".contenedor-general-valores .contenedor-valores .cont-valor").each(function(index) {

        $(this).hover(function() {
            $(".contenedor-general-valores .contenedor-info-valores .cont-info-valor").eq(index).addClass("active");
        }, function() {
            $(".contenedor-general-valores .contenedor-info-valores .cont-info-valor").eq(index).removeClass("active");
        });

    });

});
</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>

<style>
.contenedor-general-items .contenedor-items,
.contenedor-general-valores>img,
.contenedor-general-valores>div,
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

    $j('.contenedor-general-items .contenedor-items, .contenedor-general-valores > img, .contenedor-general-valores > div, .filter-container > div, .about-container .container .content, .video-container .container > div, .contact-container .container .col > div').waypoint(function() {
        $j(this).toggleClass('fadeIn animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });

});
</script>
