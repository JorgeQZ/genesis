<?php
/**
 * Template Name: Desarrollos
 */

get_header(); ?>
<div class="light-box">
    <div class="cont">
        <div class="button" id="close-button">
            <img src="<?php echo get_template_directory_uri().'/img/close.png';?>" alt="Cerrar">
        </div>
        <img src="<?php echo get_template_directory_uri().'/img/img-1.jpg';?>" alt="" id="img_light-box">
    </div>
</div>

<div class="hero-container">
    <img src="<?php echo get_template_directory_uri().'/img/logo-03.png'?>" alt="">
</div>

<div class="menu-navigation">
    <ul>
        <li><a href="#master-plan">master plan</a></li>
        <li><a href="#departamentos">departamentos<a></li>
        <li><a href="#amenidades">amenidades<a></li>
        <li><a href="#recorridos">recorridos 360º y videos<a></li>
        <li><a href="#galeria">galería<a></li>
        <li><a href="#ubicacion">ubicación<a></li>
        <li><a href="#vistas-panoramicas">vistas panorámicas<a></li>
        <li>brochure <span><img src="" alt=""></span></li>
        <li><a href="#contacto">solicitar información<a></li>

    </ul>
</div>

<div class="video-cont" id="master-plan">
    <img src="<?php echo get_template_directory_uri().'/img/VIDEO.jpg'; ?>" alt="">
</div>

<!-- Description -->
<div class="description-container">
    <div class="col">
        <div class="img-desc">
            <img src="<?php echo get_template_directory_uri().'/img/ancora-desc.jpg'; ?>" alt="ANCORA">
        </div>
    </div>
    <div class="col">
        <!-- Title -->
        <div class="upper-title" data-text="satélite residencial">
            satélite residencial
        </div>
        <div class="title">
            áncora
        </div> <!-- Title -->

        <!-- Descripcion -->
        <div class="description">
            <p>
                Es un proyecto arquitectónico de usos mixtos único en la zona norte de la CDMX (Satélite). Fue concebido por el despacho de LEGORRETA con la intención de acercar a las personas a una de las expresiones más tangibles del arte: la arquitectura.
                <br><br>
                Para inspirar y apreciar el arte de vivir, Áncora integra el color y la geometría precisos para generar espacios que capturan los
                sentidos de sus usuarios.
                <br><br>
                Áncora es en una experiencia arquitectónica única que se
                traduce en comodidad y vanguardia en un espacio que lo tiene
                todo: departamentos, exclusivas amenidades, centro comercial
                y oficinas.
            </p>
        </div><!-- Descripcion -->

        <!-- Datos -->
        <div class="data">
            <div class="number">840</div>
            <div class="text">departamentos</div>
        </div>
        <div class="data">
            <div class="number">7</div>
            <div class="text">torres (23 pisos)</div>
        </div><!-- Datos -->

        <!-- Métrica -->
        <div class="meters">
            100m<sup>2</sup> - 200m<sup>2</sup>
        </div>
        <!-- Métrica -->
    </div>
</div><!-- Description -->

<!-- Gallery -->
<div class="gallery-container" id="galeria">
    <div class="title">
        Galería
    </div>
    <div class="owl-carousel owl-theme gallery-carousel">
        <div class="item">
            <div class="icon">
                <img src="<?php echo get_template_directory_uri().'/img/fullscreen-icon.png'?>" alt="">
            </div>
            <div class="img-item lightbox-item">
                <img src="<?php echo get_template_directory_uri().'/img/img-1.jpg';?>" alt="">
            </div>
        </div>
        <div class="item">
            <div class="icon">
                <img src="<?php echo get_template_directory_uri().'/img/fullscreen-icon.png'?>" alt="">
            </div>
            <div class="img-item lightbox-item">
                <img src="<?php echo get_template_directory_uri().'/img/img-2.jpg';?>" alt="">
            </div>
        </div>
        <div class="item">
            <div class="icon">
                <img src="<?php echo get_template_directory_uri().'/img/fullscreen-icon.png'?>" alt="">
            </div>
            <div class="img-item lightbox-item">
                <img src="<?php echo get_template_directory_uri().'/img/img-3.jpg';?>" alt="">
            </div>
        </div>

    </div>

</div><!-- Gallery -->

<!-- Departamentos  -->
<div class="departments-container" id="departamentos">
    <div class="title" data-text="ángora">
        departamentos
    </div>
    <div class="owl-carousel owl-theme departments-carousel">
        <div class="item">
            <div class="type">tipo a</div>
            <div class="price">
                precios desde $2,300,000
            </div>
            <div class="img-department">
                <img src="<?php echo get_template_directory_uri().'/img/type-dep.png'; ?>" alt="">
            </div>
            <div class="type-desc">
                <div class="des">
                    <strong>tipología a.</strong> planta de departamento
                </div>
            </div>
            <div class="desc">
                <p>2 recámaras </p>
                <p>2B + CL</p>
                <p>m<sup>2</sup> totales: 102.52</p>
            </div>
        </div>
        <div class="item">
            <div class="type">tipo a</div>
            <div class="price">
                precios desde $2,300,000
            </div>
            <div class="img-department">
                <img src="<?php echo get_template_directory_uri().'/img/type-dep.png'; ?>" alt="">
            </div>
            <div class="type-desc">
                <div class="des">
                    <strong>tipología a.</strong> planta de departamento
                </div>
            </div>
            <div class="desc">
                <p>2 recámaras </p>
                <p>2B + CL</p>
                <p>m<sup>2</sup> totales: 102.52</p>
            </div>
        </div>
        <div class="item">
            <div class="type">tipo a</div>
            <div class="price">
                precios desde $2,300,000
            </div>
            <div class="img-department">
                <img src="<?php echo get_template_directory_uri().'/img/type-dep.png'; ?>" alt="">
            </div>
            <div class="type-desc">
                <div class="des">
                    <strong>tipología a.</strong> planta de departamento
                </div>
            </div>
            <div class="desc">
                <p>2 recámaras </p>
                <p>2B + CL</p>
                <p>m<sup>2</sup> totales: 102.52</p>
            </div>
        </div>
        <div class="item">
            <div class="type">tipo a</div>
            <div class="price">
                precios desde $2,300,000
            </div>
            <div class="img-department">
                <img src="<?php echo get_template_directory_uri().'/img/type-dep.png'; ?>" alt="">
            </div>
            <div class="type-desc">
                <div class="des">
                    <strong>tipología a.</strong> planta de departamento
                </div>
            </div>
            <div class="desc">
                <p>2 recámaras </p>
                <p>2B + CL</p>
                <p>m<sup>2</sup> totales: 102.52</p>
            </div>
        </div>
        <div class="item">
            <div class="type">tipo a</div>
            <div class="price">
                precios desde $2,300,000
            </div>
            <div class="img-department">
                <img src="<?php echo get_template_directory_uri().'/img/type-dep.png'; ?>" alt="">
            </div>
            <div class="type-desc">
                <div class="des">
                    <strong>tipología a.</strong> planta de departamento
                </div>
            </div>
            <div class="desc">
                <p>2 recámaras </p>
                <p>2B + CL</p>
                <p>m<sup>2</sup> totales: 102.52</p>
            </div>
        </div>
        <div class="item">
            <div class="type">tipo a</div>
            <div class="price">
                precios desde $2,300,000
            </div>
            <div class="img-department">
                <img src="<?php echo get_template_directory_uri().'/img/type-dep.png'; ?>" alt="">
            </div>
            <div class="type-desc">
                <div class="des">
                    <strong>tipología a.</strong> planta de departamento
                </div>
            </div>
            <div class="desc">
                <p>2 recámaras </p>
                <p>2B + CL</p>
                <p>m<sup>2</sup> totales: 102.52</p>
            </div>
        </div>
    </div>

    <div class="slider-range">
        <input type="range" name="" id="departments-slider" value="0" min="0" step="1">
    </div>
</div><!-- Departamentos  -->

<!-- AMENIDADES -->
<div class="amenidades-container" id="amenidades">
    <div class="owl-carousel owl-theme amenidades-carousel">
        <div class="item">
            <div class="text">
                amenidades
            </div>
            <div class="icon">
                <img src="<?php echo get_template_directory_uri().'/img/fullscreen-icon.png'?>" alt="">
            </div>
            <div class="img-item">
                <img src="<?php echo get_template_directory_uri().'/img/amen-1.jpg';?>" alt="">
            </div>
        </div>
        <div class="item">
            <div class="text">
                amenidades
            </div>
            <div class="icon">
                <img src="<?php echo get_template_directory_uri().'/img/fullscreen-icon.png'?>" alt="">
            </div>
            <div class="img-item">
                <img src="<?php echo get_template_directory_uri().'/img/amen-1.jpg';?>" alt="">
            </div>
        </div>
        <div class="item">
            <div class="text">
                amenidades
            </div>
            <div class="icon">
                <img src="<?php echo get_template_directory_uri().'/img/fullscreen-icon.png'?>" alt="">
            </div>
            <div class="img-item">
                <img src="<?php echo get_template_directory_uri().'/img/amen-1.jpg';?>" alt="">
            </div>
        </div>

    </div>

</div>
<!-- AMENIDADES -->

<!-- Paseo virtual -->
<div class="virtual-cont" id="recorridos">
    <img src="<?php echo get_template_directory_uri().'/img/paseo-virtual.jpg'; ?>" alt="">
</div><!-- Paseo virtual -->

<!-- Vista Panoramica -->
<div class="panoramic-container">
    <div class="tab-content-container">
        <div class="title-cont">
            <div class="title" data-text="ANCÓRA">vista panóramica</div>
        </div>
        <div class="panoramic-content">

        </div>
    </div>
    <div class="tab-tab-container">
        <div class="panoramic-item panoramic-active">
            <img src="<?php echo get_template_directory_uri().'/img/thumbnail-1.jpg'?>" alt="" data-src="<?php echo get_template_directory_uri().'/img/panoramic-1.jpg'?>">
        </div>
        <div class="panoramic-item">
            <img src="<?php echo get_template_directory_uri().'/img/thumbnail-3.jpg'?>" alt="" data-src="<?php echo get_template_directory_uri().'/img/panoramic-3.jpg'?>">
        </div>
        <div class="panoramic-item">
            <img src="<?php echo get_template_directory_uri().'/img/thumbnail-2.jpg'?>" alt="" data-src="<?php echo get_template_directory_uri().'/img/panoramic-2.jpg'?>">
        </div>
    </div>
</div>
<!-- Vista Panoramica -->

<!-- Ubicación -->
<div class="location-container" id="ubicacion">
    <div class="col"></div>
    <div class="col">
        <div class="content">
            <div class="title-cont">
                <div class="title" data-text="áncora">
                    ubicación
                </div>
            </div>
            <div class="desc">
                <ul>
                    <li>5 min. Plaza Sátelite</li>
                    <li>5 min. Periférico</li>
                    <li>1 min. Gustavo Baz</li>
                    <li>15 min. Nuevo Polanco</li>
                    <li>20 min. Polanco</li>
                </ul>
                Av. Del Cristo 101, Xocoyahualco 54080, Tlalnepantla.
            </div>
        </div>
    </div>
</div>
<!-- Ubicación -->

<!-- mapa -->
<div class="map-cont">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.5756024438138!2d-99.2097670850933!3d19.430734586885393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2021e115fac13%3A0x72caaf470b3b9912!2sPiso%204%2C%20Torre%20Quadro%2C%20Ferrocarril%20de%20Cuernavaca%2076%2C%20Lomas%20-%20Virreyes%2C%20Lomas%20de%20Chapultepec%20III%20Secc%2C%2001180%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1591650287848!5m2!1ses-419!2smx" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<!-- mapa -->

<!-- Contacto -->
<div class="contact" id="contacto">
    <?php get_template_part('template-parts/contact'); ?>
</div>
<!-- Contacto -->
<script>
$('.gallery-carousel').owlCarousel({
    loop: true,
    autoplay: false,
    autoplayHoverPause: true,
    autoplayTimeout: 3000,
    autoplaySpeed: 1000,
    margin: 15,
    center: true,
    nav: false,
    dots: true,
    items: 1.4,
    stagePadding: 15,
    responsive: {
        0: {
            items: 1
        },
        600: {

            items: 2.3,
        }
    }
});


$('.amenidades-carousel').owlCarousel({
    loop: true,
    autoplay: false,
    autoplayHoverPause: true,
    autoplayTimeout: 3000,
    autoplaySpeed: 1000,
    margin: 0,
    center: true,
    nav: false,
    dots: true,
    items: 1,
    stagePadding: 0,
});

$('.departments-carousel').owlCarousel({
    loop: false,
    margin: 0,
    padding: 0,
    center: false,
    nav: false,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 4
        }
    }
});
</script>
<?php get_footer(); ?>
