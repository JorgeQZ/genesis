<?php
/**
 */
get_header();
// get the current taxonomy term
$term = get_queried_object();
$iconos = get_field('iconos', $term);
$color = get_field('color_de_desarrollo', $term);


$args = array(
    'posts_per_page' => -1,
    'post_type' => 'departamento',
    'post_status'   => 'publish',
    'meta_key' => 'tipo',
    'orderby' => 'meta_value',
    'order' => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => 'categorias-desarrollos',
            'field'  => 'name',
            'terms' => $term->name
        )
    )
);

$query = new WP_Query($args);
$posts_queried = array();
$types_queried = array();
if($query->have_posts()):
    while($query->have_posts()):
        $query->the_post();

        array_push(
            $posts_queried,
            array(
                'ID' => get_the_ID(),
                'tipo' => get_field('tipo'),
                'recamaras' => get_field('recamaras')
            )
        );

        array_push($types_queried,get_field('tipo'));

    endwhile;
    wp_reset_postdata();
endif;

$types_queried = array_unique($types_queried);

usort($posts_queried, function($a, $b) {
    return $a['recamaras'] <=> $b['recamaras'];
});

if( $term->taxonomy == 'categorias-desarrollos'):
?>

<style>
.middle-description,
.middle-description .text,
.middle-description .location-container .column:nth-child(3) .text .title,
.middle-description .location-container .column:nth-child(3) .list,
.middle-description .rooms-container .tabs-content .option-container .option .option-container .column .title,
.grid-gallery .title,
.grid-gallery .bold-title {
    color: <?php echo $color;
    ?>
}

.middle-description .title:before {
    -webkit-text-stroke-color: <?php echo $color.'4d';
    ?>
}

.middle-description .meet-us-container .column .overlay {
    background-color: <?php echo $color.'99';
    ?>
}

.middle-description .rooms-container .tabs-left .tab-container,
.call-center .image,
header.scrolled,
.middle-description .rooms-container .burguer-container {
    background-color: <?php echo $color;
    ?>;
}

.middle-description .rooms-container .tabs-content .option-container .option .option-tabs-container .option-tab:hover,
.middle-description .rooms-container .tabs-content .option-container .option .option-tabs-container .option-tab.active,
.contact-form,
.middle-description .rooms-container .tabs-content .option-container .option .burguer-bath-container {
    background-color: <?php echo $color;
    ?>;
}

.middle-description .rooms-container .tabs-content .option-container .option .option-tabs-container .option-tab,
.contact-form .container .column .contact .col input[type="submit"] {
    background-color: <?php echo $color.'bf';
    ?>;
}


path {
    fill: <?php echo $color;
    ?>;
}

.middle-description .rooms-container .tabs-content .option-container .option .option-container .column .amenities {
    border-bottom: 2px solid <?php echo $color;
    ?>;
}

</style>
<div class="light-box">
    <div class="cont">
        <div class="button" id="close-button">
            <img src="<?php echo get_template_directory_uri().'/img/close.png';?>" alt="Cerrar">
        </div>
        <img src="<?php echo get_template_directory_uri().'/img/img-1.jpg';?>" alt="" id="img_light-box">
    </div>
</div>
<div class="video-container">
    <?php echo get_field('banner', $term); ?>
</div>

<div class="upper-container">
    <div class="container">
        <div class="middle-description">
            <div class="title">
                <?php echo get_field('nombre_desarrollo', $term); ?>
            </div>
            <div class="bold-title">
                <?php echo $des_name = $term->name; ?>
            </div>

            <div class="text">
                <?php echo get_field('descripcion', $term) ?>
            </div>

            <!-- GRID -->

            <div class="location-container">
                <!-- 1st column -->
                <div class="column">
                    <?php get_template_part('template-parts/icons/pin'); ?>
                </div>

                <!-- 2nd column -->
                <div class="column">
                    <?php
                    $image_id = get_field('imagen', $term);
                    $image_carr = wp_get_attachment_image_src( $image_id, 'project-image'); ?>
                    <img src="<?php echo $image_carr[0]  ?>" alt="">
                </div>

                <!-- 3rd column -->
                <div class="column">
                    <div class="text">
                        <div class="title" data-text="<?php echo get_field('nombre_desarrollo', $term); ?>">
                            ubicación
                        </div>
                        <div class="list">
                            <?php echo get_field('ubicacion', $term); ?>

                            <p>
                                <?php echo get_field('direccion', $term); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Meet Us -->

            <!-- Conocelo -->
            <div class="meet-us-container">
                <div class="column">
                    <div>
                        conócelo <?php get_template_part('template-parts/icons/arrow'); ?>

                    </div>
                </div>
                <div class="column">
                    <a href="#" target="_blank">
                        <div class="overlay"></div>
                        <img src="<?php echo get_template_directory_uri().'/img/paseo-virtual.jpg';?>" alt="">
                    </a>
                </div>
            </div>

            <!-- Visitalo -->
            <div class="meet-us-container">
                <div class="column">
                    <div>
                        visítalo <?php get_template_part('template-parts/icons/arrow'); ?>
                    </div>
                </div>
                <div class="column">
                    <div class="visit-slider owl-carousel owl-theme ">
                        <div class="item">
                            <div class="overlay"></div>
                            <img src="<?php echo get_template_directory_uri().'/img/paseo-virtual.jpg';?>" alt="">
                        </div>

                        <div class="item">
                            <div class="overlay"></div>
                            <img src="<?php echo get_template_directory_uri().'/img/paseo-virtual.jpg';?>" alt="">
                        </div>

                        <div class="item">
                            <div class="overlay"></div>
                            <img src="<?php echo get_template_directory_uri().'/img/paseo-virtual.jpg';?>" alt="">
                        </div>

                    </div>
                </div>
            </div>

            <!-- Rooms -->
            <div class="rooms-container">
                <div class="burguer-container">
                    <div class="burguer-types">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    prototipos
                </div>
                <!-- Tabs -->
                <div class="tabs-left">
                    <div class="title">prototipos</div>
                    <div class="tab-container">

                        <?php $aux = 0; foreach ($types_queried as $index => $tipo) :?>
                        <div data-id="type-<?php echo $tipo; ?>" class="room-tab tab <?php if($aux == 0) echo 'active' ?>">
                            Tipo <?php echo $tipo; ?>
                        </div>
                        <?php $aux ++; endforeach; ?>
                    </div>
                </div>
                <!-- Tabs -->


                <!-- Tabs Content -->
                <div class="tabs-content">
                    <div class="option-container">
                        <?php
                        $aux = 0;

                        foreach ($types_queried as $index => $tipo) {
                            $aux_option_tab = 0;?>
                        <!-- Type Content -->
                        <div id="type-<?php echo $tipo?>" class="room-type option <?php if($aux == 0) echo 'active' ?>">


                            <!-- Tabs departemtn -->
                            <div class="burguer-bath-container">
                                <div class="burguer-bed" data-bed-type="bedrooms-<?php echo $tipo?>">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>

                                <div class="text">
                                    <?php
                                        $aux_bed = 0;
                                        foreach ($posts_queried as $key => $value) {
                                            if($tipo == $value['tipo']):
                                                if($aux_bed == 0){
                                                    if(get_field('recamaras', $value['ID']) > 1){
                                                        echo get_field('recamaras', $value['ID']).' Recámaras';
                                                    }else{
                                                        echo get_field('recamaras', $value['ID']).' Recámara';
                                                    }
                                                }
                                            $aux_bed++;
                                            endif;
                                        }
                                    ?>
                                </div>
                            </div>

                            <div class="option-tabs-container" id="bedrooms-<?php echo $tipo?>">
                                <?php
                                $aux_option_tab = 0;
                                foreach ($posts_queried as $key => $value) {
                                    if($tipo == $value['tipo']):
                                    ?>
                                <div data-id='type-<?php echo $value['tipo'] ?>-sub-<?php echo get_field('recamaras', $value['ID']) ?>' class="option-tab <?php echo $aux_option_tab.' ';  if($aux_option_tab == 0) echo 'active' ?>">
                                    <?php
                                    if(get_field('recamaras', $value['ID']) > 1){
                                        echo get_field('recamaras', $value['ID']).' Recámaras';
                                    }else{
                                        echo get_field('recamaras', $value['ID']).' Recámara';
                                    }
                                    ?>
                                </div>
                                <?php
                                $aux++;
                                $aux_option_tab++;
                            endif;
                            } ?>

                            </div>

                            <?php
                            //Option Content
                            $aux = 0;
                            foreach ($posts_queried as $key => $value) {
                                if($tipo == $value['tipo']):
                                ?>
                            <div id="type-<?php echo $value['tipo'] ?>-sub-<?php echo get_field('recamaras', $value['ID']) ?>" class="sub-option <?php if($aux == 0) echo 'active ' ?>option-container">
                                <div class="column light">
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri().'/img/fullscreen-icon.png'?>" alt="">
                                    </div>
                                    <img src="<?php echo get_template_directory_uri().'/img/result-img.png'; ?>" alt="" class="bed-img">
                                </div>
                                <div class="column">
                                    <div class="title">
                                        <?php echo get_the_title( $value['ID'] ); ?>
                                    </div>
                                    <div class="price">
                                        <div class="price-text">
                                            Precios desde:
                                        </div>
                                        <span>
                                            $<?php echo number_format(get_field('precio', $value['ID'] )); ?>
                                        </span>
                                    </div>

                                    <div class="address">
                                        <div class="pin">
                                            <?php get_template_part('template-parts/icons/pin'); ?>
                                        </div>
                                        <div class="desc">
                                            <?php echo get_field('direccion', $term); ?>
                                        </div>
                                    </div>

                                    <div class="amenities">
                                        <div class="column">
                                            <div class="img">
                                                <?php get_template_part('template-parts/icons/area'); ?>
                                            </div>
                                            <div class="caption"> <?php echo get_field('metros', $value['ID'] ); ?> m<sup>2</sup></div>
                                        </div>
                                        <div class="column">
                                            <div class="img">
                                                <?php get_template_part('template-parts/icons/bath'); ?>
                                            </div>
                                            <div class="caption">
                                                <?php echo get_field('banos', $value['ID'] ); ?> baños
                                            </div>

                                        </div>
                                        <div class="column">
                                            <div class="img">
                                                <?php get_template_part('template-parts/icons/bed'); ?>
                                            </div>
                                            <div class=" caption">
                                                <?php echo get_field('recamaras', $value['ID'] ); ?> recamaras
                                            </div>

                                        </div>
                                        <div class="column">
                                            <div class="img">
                                                <?php get_template_part('template-parts/icons/car'); ?>
                                            </div>
                                            <div class="caption"><?php echo get_field('caracteristicas_estacionamiento', $term); ?> Est.
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
                            <?php
                            $aux++;
                        endif;
                        } ?>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <!-- Tabs Content -->
            </div>

            <!-- Rooms -->
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


<?php
$des_carrusel = get_field('carrusel_de_imagenes', $term);
if($des_carrusel != ''):
?>
<div class="slider-container">
    <div class="owl-carousel owl-theme galeria-slider" data-slider-id="project">
        <?php
        foreach($des_carrusel as $item_id){
            $image_carr = wp_get_attachment_image_src( $item_id, 'gallery-size');
            $image_prev = wp_get_attachment_image_src( $item_id, 'full');
            echo '<div class="item"><img data-thumb="'.$image_carr[0].'"  src="'.$image_prev[0].'" alt=""></div>';
        }
        ?>
    </div>
</div>
<?php endif; ?>

<?php
$des_galeria = get_field('galeria', $term);
if($des_galeria != ''):
?>
<div class="grid-gallery">
    <div class="title">
        tu ubicación
    </div>
    <div class="bold-title">
        ideal
    </div>

    <div class="gallery-container">
        <?php
        foreach($des_galeria as $item_id){
            $image = wp_get_attachment_image_src( $item_id, 'gallery-size');
            echo '<div class="item"><img src="'.$image[0].'" alt=""></div>';
        }
        ?>
    </div>
</div>
<?php endif; ?>



<script>
$('.galeria-slider').owlCarousel({
    nav: false,
    dots: true,
    items: 1,
    thumbs: true,
    thumbImage: true,
    thumbsPrerendered: false,
    thumbContainerClass: 'owl-thumbs',
    thumbItemClass: 'owl-thumb-item'

})

$('.visit-slider').owlCarousel({
    nav: false,
    dots: true,
    items: 1,
    margin: 10
});
</script>
<?php endif;?>
<?php get_footer(); ?>
