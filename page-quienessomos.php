<?php
/**
 * Template Name: Quienes Somos
 */

get_header(); ?>

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
                Somos una desarrolladora que nace bajo la premisa de dar solidez a proyectos residenciales,
                corporativos y comerciales que se rigen bajo los más estrictos estándares de calidad.
                Por ello nuestro equipo está conformado por expertos del sector que cuentan con más de 15 años
                de experiencia, generando propuestas de vanguardia y reafirmando nuestro compromiso con la calidad,
                el diseño y la exclusividad.
                <br><br>
                Cada uno de nuestros proyectos cuenta con una ubicación privilegiada, convirtiéndolos en un referente
                local importante, pues no solo tienen acceso a las principales vías de comunicación, también cuentan con
                una gran conectividad a sitios importantes de la zona, aumentando su valor y plusvalía.
                <br><br>
                Nuestros diseños son una propuesta arquitectónica que buscan satisfacer las necesidades de nuestros clientes
                desde una perspectiva vanguardista, elegante y confortable, que se alineen al entorno y que sume valor a la zona,
                generando un impacto positivo para el lugar.
            </div>
        </div>
    </div>
</div>
<!-- Quienes somos -->

<!-- Contacto -->
<div class="contact" id="contacto">
    <?php get_template_part('template-parts/contact'); ?>
</div>
<!-- Contacto -->

<!-- Conoce al equipo -->
<div class="meet-the-team">
    <div class="title">
        conoce
        <div class="bolder">
            al equipo
        </div>
    </div>

    <div class="grid">
        <?php
        $args = array(
            'posts_per_page' => -1,
            'post_type'   => 'miembros',
            'post_status' => 'publish'
        );

        $members = get_posts( $args );
        if ( $members ) :
            foreach ( $members as $post ) :
                $image_id = get_field('foto', $post->ID);
                $image = wp_get_attachment_image_src( $image_id, 'member-size');
                ?>

        <div class="item">
            <div class="image">
                <img src="<?php echo $image[0]; ?>" alt="">
            </div>
            <div class="desc">
                <div class="name"><?php echo get_field('nombre', $post->ID) ?></div>
                <div class="phone">
                    <img src="<?php echo get_template_directory_uri().'/img/phone-alternate.png' ?>" alt="">
                    <span>
                        <a href="tel:<?php echo get_field('telefono', $post->ID) ?>" target="_top">
                            <?php echo get_field('telefono', $post->ID) ?>
                        </a>
                    </span>
                </div>
            </div>
        </div>
        <?php
            endforeach;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</div>
<?php get_footer(); ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>

<style>
.about-container .container .content,
.contact-container .container .col>div {
    opacity: 0;
}

</style>

<script>
var $j = jQuery.noConflict();

jQuery(function($j) {

    $j('.about-container .container .content, .contact-container .container .col > div').waypoint(function() {
        $j(this).toggleClass('fadeIn animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });

});
</script>
