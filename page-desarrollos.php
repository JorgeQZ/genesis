<?php
/**
 * Template Name: Desarrollos
 */

get_header(); ?>

<div class="contenedor-general-desarrollos">
    <?php  $terms = get_terms(array ('taxonomy' => 'categorias-desarrollos',  'hide_empty' => true) ); ?>

    <?php foreach($terms as $item):
            $tax_name = 'categorias-desarrollos';
            $id = $tax_name.'_'.$item->term_id;
            $precio = get_field('caracteristicas_precio', $id);
            $area = get_field('caracteristicas_area', $id);
            $min_banos = get_field('caracteristicas_min_banos', $id);
            $max_banos = get_field('caracteristicas_max_banos', $id);
            $min_recamaras = get_field('caracteristicas_min_recamaras', $id);
            $max_recamaras = get_field('caracteristicas_max_recamaras', $id);
            $estacionamiento = get_field('caracteristicas_estacionamiento', $id);
            $color = get_field('color_de_desarrollo', $id);
            $term_link = get_term_link($item->term_id);
    ?>

    <div class="contenedor-general-desarrollo" style="background-image: unset; background-color: <?php echo $color; ?>">
        <div class="contenedor-desarrollo">
            <img class="logo-esq" src="<?php echo get_field('logo_white', $id); ?>'" alt="">
            <div class="cont-info">
                <div class="info">
                    <h1> <?php echo get_field('nombre_desarrollo', $id); ?></h1>
                    <p>Precios Desde: <span><?php  echo $precio; ?></span></p>
                    <p class="ubicacion"><?php echo get_field('direccion', $id); ?></p>
                    <div class="detalles">
                        <div>
                            <img src="<?php echo get_template_directory_uri().'/img/icon-size.png'?>" alt="">
                            <p><?php echo $area ?>m<sup>2</sup></p>
                        </div>
                        <div>
                            <img src="<?php echo get_template_directory_uri().'/img/icon-bath.png'?>" alt="">
                            <p>Desde <span><?php echo $min_banos ?></span> a <span><?php echo $max_banos ?></span> Baños</p>
                        </div>
                        <div>
                            <img src="<?php echo get_template_directory_uri().'/img/icon-bed.png'?>" alt="">
                            <p>Desde <span><?php echo $min_recamaras ?></span> a <span><?php echo $max_recamaras ?></span> Recámaras</p>
                        </div>
                        <div>
                            <img src="<?php echo get_template_directory_uri().'/img/icon-car.png'?>" alt="">
                            <p><?php echo $estacionamiento; ?> Est.</p>
                        </div>
                    </div>
                    <a id="link_<?php echo $id?>" class="link-desarrollo" href="<?php echo $term_link ?>">ver desarrollo</a>
                    <style>
                    #link_<?php echo $id ?> {
                        color: <?php echo $color;
                        ?>
                    }

                    #link_<?php echo $id ?>:hover {
                        color: white;
                    }

                    </style>
                </div>

            </div>
            <div class="cont-media">
                <div class="desarrollo-slider owl-carousel owl-theme">
                    <?php
                    $des_carrusel = get_field('carrusel_de_imagenes', $id);
                    if($des_carrusel != ''):
                        foreach($des_carrusel as $item_id){
                            $image_carr = wp_get_attachment_image_src( $item_id, 'carrusel-size');
                            echo '<div class="item"><img src="'.$image_carr[0].'" alt=""></div>';
                        }
                    endif;
                ?>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<!-- Contacto -->
<div class="contact" id="contacto">
    <?php get_template_part('template-parts/contact'); ?>
</div>
<!-- Contacto -->

<?php get_footer(); ?>

<script>
$(document).ready(function() {
    $(".desarrollo-slider").owlCarousel({
        loop: false,
        items: 1,
        dots: true,
        slideSpeed: 300,
        paginationSpeed: 400
    });
});
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>

<style>
.contenedor-general-desarrollos .contenedor-general-desarrollo .contenedor-desarrollo>div,
.contact-container .container .col>div {
    opacity: 0;
}

</style>

<script>
var $j = jQuery.noConflict();
jQuery(function($j) {
    $j('.contenedor-general-desarrollos .contenedor-general-desarrollo .contenedor-desarrollo > div, .contact-container .container .col > div').waypoint(function() {
        $j(this).toggleClass('fadeIn animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });
});
</script>
