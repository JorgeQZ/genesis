<?php
/* Template Name: Comparación
*
*/
get_header(); ?>

<!-- Filtros -->
<div class="advanced-search-container">
    <div class="filter-container">
        <div class="filter-title">
            Filtrar
            <div class="focus">
                resultados
            </div>
        </div>

        <!-- FORM -->
        <form method="get" id="formsearch">
            <!-- Filters -->
            <div class="filters">
                <!-- col -->
                <div class="col">
                    <div class="filter-cont">
                        <!-- <div class="value">Ubicación </div> -->
                        <input type="text" class="value" placeholder="Ubicación" readonly name="ubicacion" id="ubicacion">
                        <ul>
                            <?php
                            $ubicaciones  =  get_terms(
                                array(
                                    'taxonomy' => 'categorias-ubicaciones',
                                    'hide_empty' => true
                                )
                            );
                            foreach($ubicaciones as $ubicacion): ?>
                            <li><?php  echo $ubicacion->name; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div> <!-- col -->

                <!-- col -->
                <div class="col">
                    <div class="filter-cont">
                        <!-- <div class="value">Nº de recamaras </div> -->
                        <input type="text" class="value" placeholder="Nº de recamaras" readonly name="recamaras" id="recamaras">
                        <?php $recamaras = $wpdb->get_results( 'SELECT DISTINCT meta_value FROM gen_postmeta WHERE meta_key LIKE "recamaras" ORDER BY meta_value ASC', ARRAY_A ); ?>
                        <ul>
                            <?php foreach ($recamaras as $recamara): ?>
                            <li><?php echo $recamara['meta_value'] ?></li>
                            <?php endforeach;?>
                        </ul>

                    </div>
                </div> <!-- col -->
            </div><!-- Filters -->
            <!-- Filters -->
            <div class="filters">
                <!-- col -->

                <div class="col">
                    <div class="filter-cont">
                        <!-- <div class="value">Baños </div> -->
                        <input type="text" class="value" placeholder="Baños" readonly name="banos" id="banos">
                        <?php $banos = $wpdb->get_results( 'SELECT DISTINCT meta_value FROM gen_postmeta WHERE meta_key LIKE "banos" ORDER BY meta_value ASC', ARRAY_A ); ?>
                        <ul>
                            <?php foreach ($banos as $bano): ?>
                            <li><?php echo $bano['meta_value'] ?></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div> <!-- col -->

                <!-- col -->
                <div class="col">
                    <div class="filter-cont">
                        <!-- <div class="value">rango de precios </div> -->
                        <input type="text" class="value" placeholder="Rango de precios" readonly name="precios" id="precios">

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
                    Búsqueda avanzada
                    <div class="little-arrow"></div>
                </div>
            </div>

            <div class="advanced-search-options">

                <div class="form-checkbox">
                    <input type="checkbox" name="alberca" id="alberca">
                    <label for="alberca">
                        ALBERCA
                    </label>
                </div>

                <div class="form-checkbox">
                    <input type="checkbox" name="estacionamiento" id="estacionamiento">
                    <label for="estacionamiento">
                        estacionamiento
                    </label>
                </div>

                <div class="form-checkbox">
                    <input type="checkbox" name="vigilancia" id="vigilancia">
                    <label for="vigilancia">
                        vigilancia
                    </label>
                </div>
            </div>

            <div class="advanced-search-options">

                <div class="form-checkbox">
                    <input type="checkbox" name="gym" id="gym">
                    <label for="gym">
                        gym
                    </label>
                </div>

                <div class="form-checkbox">
                    <input type="checkbox" name="areasverdes" id="areasverdes">
                    <label for="areasverdes">
                        áreas verdes
                    </label>
                </div>

                <div class="form-checkbox">
                    <input type="checkbox" name="petfriendly" id="petfriendly">
                    <label for="petfriendly">
                        pet friendly
                    </label>
                </div>
            </div>
            <!-- Busqueda avanzada -->

            <!-- Boton buscar -->
            <div class="filter-submit">
                <div class="submit-cont">
                    <input type="submit" value="Buscar">
                </div>
            </div><!-- Boton buscar -->
        </form>
        <!-- FORM -->

    </div>
</div><!-- Filtros -->

<!-- Comparacion -->
<div class="tabs-container">
    <div class="tab-option active">
        departamentos
    </div>
    <div class="tab-option">
        casa
    </div>
</div>

<div class="select-filter-cont">
    <div class="filter-select" id="filter">
        Ordenar por precio
    </div>
</div>

<div class="departaments-container">

    <div class="item">
        <div class="col">
            <img src="<?php echo get_template_directory_uri().'/img/dept-img.jpg' ?>" alt="" class="dept-img">
        </div>
        <div class="col">
            <img src="<?php echo get_template_directory_uri().'/img/dept-logo.png' ?>" alt="" class="logo">

            <div class="address">

                <img src="<?php echo get_template_directory_uri().'/img/pin-aqua.png' ?>" alt="" class="pin">

                <div class="text">
                    Av. Sor Juana Inés de la Cruz 312, Tlalnepantla Estado de México.
                </div>
            </div>

            <div class="title">
                Puerta Tlanepantla
            </div>
            <div class="price-dept">
                <div class="price">
                    3 Departamentos desde <span>$1,595,300.00</span>
                </div>
                <a href="#" class="link">ver</a>
            </div>
            <hr>
            <div class="price-dept">
                <div class="price">
                    3 Departamentos desde <span>$1,740,775.00</span>
                </div>
                <a href="#" class="link">ver</a>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="col">
            <img src="<?php echo get_template_directory_uri().'/img/dept-montalva.png' ?>" alt="" class="dept-img">
        </div>
        <div class="col">
            <img src="<?php echo get_template_directory_uri().'/img/dept-logo-montalva.png' ?>" alt="" class="logo">

            <div class="address">

                <img src="<?php echo get_template_directory_uri().'/img/pin-aqua.png' ?>" alt="" class="pin">

                <div class="text">
                    Av. Cvln. Jorge Alvarez del Castillo 1433, <br>
                    Country Club, Guadalajara
                </div>
            </div>

            <div class="title">
                Essentia Country
            </div>
            <div class="price-dept">
                <div class="price">
                    5 Departamentos desde <span>$2,895,300.00</span>
                </div>
                <a href="#" class="link">ver</a>
            </div>
            <hr>
            <div class="price-dept">
                <div class="price">
                    3 Departamentos desde <span>$3,540,775.00</span>
                </div>
                <a href="#" class="link">ver</a>
            </div>
        </div>
    </div>

    <div class="item">
        <div class="col">
            <img src="<?php echo get_template_directory_uri().'/img/dept-ancora.png' ?>" alt="" class="dept-img">
        </div>
        <div class="col">
            <img src="<?php echo get_template_directory_uri().'/img/dept-logo-ancora.png' ?>" alt="" class="logo">

            <div class="address">

                <img src="<?php echo get_template_directory_uri().'/img/pin-aqua.png' ?>" alt="" class="pin">

                <div class="text">
                    9721 Glen Creek Ave. Ballston <br>Spa, NY
                </div>
            </div>

            <div class="title">
                Áncora Satélite
            </div>

            <div class="price-dept">
                <div class="price">
                    4 Departamentos desde <span>$2,395,300.00</span>
                </div>
                <a href="#" class="link">ver</a>
            </div>
            <hr>
            <div class="price-dept">
                <div class="price">
                    6 Departamentos desde <span>$1,740,775.00</span>
                </div>
                <a href="#" class="link">ver</a>
            </div>

        </div>
    </div>
    <div class="item">
        <div class="col">
            <img src="<?php echo get_template_directory_uri().'/img/dept-bologna.png' ?>" alt="" class="dept-img">
        </div>
        <div class="col">
            <img src="<?php echo get_template_directory_uri().'/img/dept-logo-bolognia.png' ?>" alt="" class="logo">

            <div class="address">

                <img src="<?php echo get_template_directory_uri().'/img/pin-aqua.png' ?>" alt="" class="pin">

                <div class="text">
                    Cto. Bosques de Bolognia 163,<br>
                    Cuautitln Izcalli.
                </div>
            </div>

            <div class="title">
                Bolognia Residencial </div>

            <div class="price-dept">
                <div class="price">
                    2 Departamentos desde <span>$2,795,300.00</span>
                </div>
                <a href="#" class="link">ver</a>
            </div>
            <hr>
            <div class="price-dept">
                <div class="price">
                    3 Departamentos desde <span>$1,740,775.00</span>
                </div>
                <a href="#" class="link">ver</a>
            </div>

        </div>
    </div>

</div>


<div class="pagination">
    <div class="item active">1</div>
    <div class="item ">2</div>
    <div class="item ">3</div>
</div>
<!-- Comparacion -->

<?php
get_template_part('template-parts/contact');
get_footer(); ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>

<style>
.advanced-search-container .filter-container,
.contact-container .container .col>div {
    opacity: 0;
}

</style>

<script>
var $j = jQuery.noConflict();

jQuery(function($j) {

    $j('.advanced-search-container .filter-container, .contact-container .container .col > div').waypoint(function() {
        $j(this).toggleClass('fadeIn animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });

});
</script>
