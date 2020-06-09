<?php
/**
 * Template Name: Desarrollo Ciudad
 */

get_header(); ?>

<div class="contenedor-general-desarrollos">

    <div class="contenedor-general-desarrollo" style="background-image: url(<?php echo get_template_directory_uri().'/img/fondo-ancora.jpg'?>;">
        <div class="contenedor-desarrollo">
            <div class="cont-info">
            <!--    <img src="<?php echo get_template_directory_uri().'/img/ancora.png'?>" alt=""> -->
                <div class="info">
                    <h1>Áncora Satélite</h1>
                    <p>Precios Desde: <span>$3.000.000</span></p>
                    <p class="ubicacion"> Av. Sor Juana Inés de la Cruz 312, <br> Tlalnepantla Estado de México.</p>
                    <div class="detalles">
                        <div>
                            <img src="<?php echo get_template_directory_uri().'/img/icon-size.png'?>" alt="">
                            <p>5201m</p> 
                        </div>
                        <div>
                            <img src="<?php echo get_template_directory_uri().'/img/icon-bath.png'?>" alt="">
                            <p>Desde <span>1</span> a <span>3</span> Baños</p> 
                        </div>
                        <div>
                            <img src="<?php echo get_template_directory_uri().'/img/icon-bed.png'?>" alt="">
                            <p>Desde <span>2</span> a <span>4</span> Recámaras</p> 
                        </div>
                        <div>
                            <img src="<?php echo get_template_directory_uri().'/img/icon-car.png'?>" alt=""> 
                            <p>2 Est.</p>
                        </div>
                    </div>
                    <a href="#">ver desarrollo</a>
                </div>

            </div>
            <div class="cont-media">
                <div class="desarrollo-slider owl-carousel owl-theme">
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri().'/img/ancora-slide.jpg'?>" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri().'/img/ancora-slide.jpg'?>" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri().'/img/ancora-slide.jpg'?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Contacto -->
<div class="contact" id="contacto">
    <?php get_template_part('template-parts/contact'); ?>
</div>
<!-- Contacto -->

<?php get_footer(); ?>

<script>

    $(document).ready(function(){

        $(".desarrollo-slider").owlCarousel({
            loop: false,
            items: 1,
            dots: true,
            slideSpeed : 300,
            paginationSpeed : 400
        });

    });

</script>