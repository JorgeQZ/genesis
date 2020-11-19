<?php
$term = get_queried_object();
$args = array(
    'posts_per_page' => -1,
    'post_type' => 'departamento',
    'post_status'   => 'publish',
    'orderby' => 'title',
    'order' => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => 'categorias-ubicaciones',
            'field'  => 'name',
            'terms' => $term->name
        )
    )
);

$ubi_query = new WP_Query($args);
$desarrollos_id = [];
if($ubi_query->have_posts()):
    while($ubi_query->have_posts()):
        $ubi_query->the_post();
        $term_post = wp_get_post_terms($post->ID, 'categorias-desarrollos');
        array_push($desarrollos_id, $term_post[0]->term_id);
    endwhile;
endif;

$unique_id = array_unique($desarrollos_id);

?>

<div class="contenedor-general-desarrollos">
    <?php
    $tax_name = 'categorias-desarrollos';
    foreach($unique_id as $id_):
        $id = $tax_name.'_'.$id_;
        $precio = get_field('caracteristicas_precio', $id);
        $area = get_field('caracteristicas_area', $id);
        $min_banos = get_field('caracteristicas_min_banos', $id);
        $max_banos = get_field('caracteristicas_max_banos', $id);
        $min_recamaras = get_field('caracteristicas_min_recamaras', $id);
        $max_recamaras = get_field('caracteristicas_max_recamaras', $id);
        $estacionamiento = get_field('caracteristicas_estacionamiento', $id);
        $color = get_field('color_de_desarrollo', $id);
        $term_link = get_term_link($id_);
        ?>
    <div class="contenedor-general-desarrollo" style="background-image: unset; background-color: <?php echo $color; ?>">
        <div class="contenedor-desarrollo">
            <img class="logo-esq" src="<?php echo get_field('logo_white', $id); ?>'" alt="">
            <div class="cont-info">
                <div class="info">
                    <h1> <?php echo get_field('nombre_desarrollo', $id); ?></h1>
                    <p>Precios Desde: <span>$<?php  echo number_format($precio); ?></span></p>
                    <p class="ubicacion"><?php echo get_field('direccion', $id); ?></p>
                    <div class="detalles">
                        <div>
                            <img src="<?php echo get_template_directory_uri().'/img/icon-size.png'?>" alt="">
                            <p><?php echo $area ?>m<sup>2</sup></p>
                        </div>
                        <div>
                            <img src="<?php echo get_template_directory_uri().'/img/icon-bath.png'?>" alt="">
                            <?php if($min_banos == $max_banos): ?>
                            <p>
                                <span><?php echo $max_banos ?></span>
                                <?php if($max_banos > 1): ?>
                                Baños
                                <?php else:  ?>
                                Baño
                                <?php endif; ?>
                            </p>
                            <?php else: ?>
                            <p>Desde <span><?php echo $min_banos ?></span> a <span><?php echo $max_banos ?></span> Baños</p>
                            <?php endif; ?>
                        </div>
                        <div>
                            <img src="<?php echo get_template_directory_uri().'/img/icon-bed.png'?>" alt="">
                            <?php if($min_banos == $max_banos): ?>
                            <p>
                                <span><?php echo $max_recamaras ?></span>
                                <?php if($max_recamaras > 1):?>
                                Recámaras
                                <?php else: ?>
                                Recámara
                                <?php endif; ?>
                            </p>
                            <?php else: ?>
                            <p>Desde <span><?php echo $min_recamaras ?></span> a <span><?php echo $max_recamaras ?></span> Recámaras</p>
                            <?php endif; ?>
                        </div>
                        <div>
                            <img src="<?php echo get_template_directory_uri().'/img/icon-car.png'?>" alt="">
                            <p><span><?php echo $estacionamiento; ?></span> Est.</p>
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
    <?php
    endforeach;
    ?>
</div>

<!-- Contacto -->
<div class="contact" id="contacto">
    <?php get_template_part('template-parts/contact'); ?>
</div>
<!-- Contacto -->

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
