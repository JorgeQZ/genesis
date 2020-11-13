<?php
// Scripts para la busqueda de departamentos
function search_department_scripts(){
    wp_enqueue_script( 'custom_search', get_stylesheet_directory_uri(). '/js/search.js', array(), '1.0', true );
    wp_localize_script( 'custom_search', 'ajax_url', admin_url('admin-ajax.php') );
    wp_enqueue_style( 'search-results', get_template_directory_uri() . '/css/search-results.css', array(), filemtime( get_stylesheet_directory() . '/css/search-results.css' ), 'all');

}

// Creacion de formulario
function custom_search_shortcode(){
    search_department_scripts();
    ob_start();
    global $wpdb;
    ?>
<div class="advanced-search-container">
    <div class="filter-container">
        <div class="GNS_search" id="GNS_search">
            <form method="post">
                <div class="filters">
                    <!-- col -->
                    <div class="col">
                        <div class="filter-cont">

                            <input type="text" class="value" placeholder="Ubicación" name="ubicacion" id="ubicacion" required readonly>
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

                            <input type="text" class="value" placeholder="Nº de recamaras" required readonly name="recamaras" id="recamaras">
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
                            <input type="text" class="value" placeholder="Rango de precios" readonly name="precios" id="precios">
                            <ul>
                                <li>$0,000,000 - $1,999,999</li>
                                <li>$2,000,000 - $3,999,999</li>
                                <li>$4,000,000 - $5,999,999</li>
                                <li>$7,000,000 - $9,999,999</li>
                                <li>$10,000,000 - $11,999,999</li>
                                <li>$12,000,000 - $14,999,999</li>
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
    </div>
</div>

<div class="results-container">
    <div class="tabs-container">
        <div class="tab-option search_tab-option active" data-value="Departamento" id="id-Departamento">
            departamentos
        </div>
        <div class="tab-option search_tab-option" data-value="Casa" id="id-Casa">
            casa
        </div>
    </div>

    <div class="container">
        <div class="order-filter-cont">
            <div class="filter-select" id="order-filter">
                Ordenar por precio
            </div>
            <ul class="order-options">
                <li>
                    <button onclick="Sort_to_Hight()">
                        De mayor a menor
                    </button>
                </li>
                <li>
                    <button onclick="Sort_to_Low()">
                        De menor a mayor
                    </button>
                </li>
            </ul>
        </div>
    </div>
    <div class="departaments-container" id="column-results">
    </div>
</div><?php
    return ob_get_clean();
}

add_shortcode ('department_search', 'custom_search_shortcode');

// Ajax Callback Departamentos
add_action('wp_ajax_js_department_search', 'departament_search_callback');
add_action('wp_ajax_nopriv_js_department_search', 'departament_search_callback');
function departament_search_callback() {

    header("Content-type: application/json");

    $meta_query = array('relation' => 'AND');

    // Variables
    if(isset($_GET['ubicacion'])) {$ubicacion = sanitize_text_field( $_GET['ubicacion'] );}
    if(isset($_GET['recamaras'])) {$recamaras = sanitize_text_field( $_GET['recamaras'] );}
    if(isset($_GET['banos'])) {$banos = sanitize_text_field( $_GET['banos'] );}
    if(isset($_GET['precios'])) {$precios = sanitize_text_field( $_GET['precios'] );}

    $result = $precios;

    $precio = explode("-", $precios);
    $precio_no_commas =  str_replace(',', "", $precio);
    $precio_no_black =  str_replace('$', "", $precio_no_commas);
    $precio =  str_replace(' ', "", $precio_no_black);

    // Amenidades
    if(isset($_GET['alberca'])) {$alberca = sanitize_text_field( $_GET['alberca'] );}
    if(isset($_GET['estacionamiento'])) {$estacionamiento = sanitize_text_field( $_GET['estacionamiento'] );}
    if(isset($_GET['gym'])) {$gym = sanitize_text_field( $_GET['gym'] );}
    if(isset($_GET['vigilancia'])) {$vigilancia = sanitize_text_field( $_GET['vigilancia'] );}
    if(isset($_GET['areasverdes'])) {$areasverdes = sanitize_text_field( $_GET['areasverdes'] );}
    if(isset($_GET['petfriendly'])) {$petfriendly = sanitize_text_field( $_GET['petfriendly'] );}

    $dinamyc_amenities = [];

    if($alberca == 'true'){
        array_push(
            $dinamyc_amenities,
                array(
                    'key'           => 'amenidades_alberca',
                    'value'         => '1',
                    'compare'	    => '=',
                    'type'	    => 'NUMERIC'
                )
            );
    }

    if($estacionamiento == 'true'){
        array_push(
            $dinamyc_amenities,
                array(
                    'key'           => 'amenidades_estacionamiento',
                    'value'         => '1',
                    'compare'	    => '=',
                    'type'	    => 'NUMERIC'
                )
            );
    }

    if($gym == 'true'){
        array_push(
            $dinamyc_amenities,
                array(
                    'key'           => 'amenidades_gym',
                    'value'         => '1',
                    'compare'	    => '=',
                    'type'	    => 'NUMERIC'
                )
            );
    }

    if($vigilancia == 'true'){
        array_push(
            $dinamyc_amenities,
                array(
                    'key'           => 'amenidades_vigilancia',
                    'value'         => '1',
                    'compare'	    => '=',
                    'type'	    => 'NUMERIC'
                )
            );
    }


    if($areasverdes == 'true'){
        array_push(
            $dinamyc_amenities,
                array(
                    'key'           => 'amenidades_areas_verdes',
                    'value'         => '1',
                    'compare'	    => '=',
                    'type'	    => 'NUMERIC'
                )
            );
    }

    if($petfriendly == 'true'){
        array_push(
            $dinamyc_amenities,
                array(
                    'key'           => 'amenidades_pet_friendly',
                    'value'         => '1',
                    'compare'	    => '=',
                    'type'	    => 'NUMERIC'
                )
            );
    }


    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'departamento',
        'post_status'   => 'publish',

        'tax_query' => array(
            array(
                'taxonomy' => 'categorias-ubicaciones',
                'field'  => 'name',
                'terms' => $ubicacion
            )
        ),
        'meta_query' => array(
            'relation' => 'AND',
             array(
                'key'           => 'recamaras',
                'value'         => $recamaras,
                'compare'	    => '=',

            ),
            array(
                'key'           => 'banos',
                'value'         =>  $banos,
                'compare'	    => '=',
            ),

            array(
                'key'           => 'precio',
                'value'         => array($precio[0], $precio[1]),
                'compare'	    => 'BETWEEN',
                'type'	        => 'NUMERIC'
            ),

            array(
                'relation' => 'AND',
                $dinamyc_amenities
            )
        )

    );

    $custom_search = new WP_Query($args);
    $tax_name = 'categorias-desarrollos';

    if($custom_search->have_posts()):
        $result = array();
        while($custom_search->have_posts()):
            $custom_search->the_post();

            $precio = get_field('precio');
            $clase = get_field('clase');
            $unidades = get_field('unidades_disponibles');
            $term  = get_the_terms( get_the_ID(), 'categorias-desarrollos' );

            $d_logo = get_field( 'logo',  $tax_name.'_'.$term[0]->term_id);
            $d_name = get_field( 'nombre_desarrollo',  $tax_name.'_'.$term[0]->term_id);
            $d_image_id = get_field( 'imagen',  $tax_name.'_'.$term[0]->term_id);
            $d_address = get_field( 'direccion',  $tax_name.'_'.$term[0]->term_id);

            $d_image = wp_get_attachment_image_src( $d_image_id, 'result-image');
            $result[] = array(
                // 'id' => get_the_ID(),
                // 'name' => get_the_title(),
                'precio' => $precio,
                'unidades' => $unidades,
                'permalink' => get_the_permalink(),
                // 'desarrollo' => $term[0]->name,
                'desarrollo_slug' => $term[0]->slug,
                'desarrollo_logo' => $d_logo,
                'desarrollo_name' => $d_name,
                'desarrollo_image' => $d_image[0],
                'desarrollo_address' => $d_address,
                'clase' => $clase
            );
        endwhile;
        wp_reset_query();
    else:
        $result = '';
    endif;

    echo json_encode($result);
    wp_die();
}
