<?php
/**
 * Template Name: Proyecto
 */
get_header();
?>
<div class="video-container">
    <img src="<?php echo get_template_directory_uri().'/img/desarrollos-angora.jpg'?>" alt="">
</div>

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
</div>

<?php get_footer(); ?>
