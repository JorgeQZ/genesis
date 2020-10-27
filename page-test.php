<?php

/**
 * Template Name: Test
 * Description: Just trying new code
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

global $wpdb;
get_header();

// Ahora si a programar pues

$dinamyc_amenities =  array(
    'key'           => 'amenidades_gym',
    'value'         => '1',
    'compare'	    => '=',
    'type'	    => 'NUMERIC'
);


array_push(
    $dinamyc_amenities,
    array(
        'key'           => 'amenidades_alberca',
        'value'         => '1',
        'compare'	    => '=',
        'type'	    => 'NUMERIC'
    )
);


$amenidades_args = array(
    'relation' => 'AND',
    // array(
    //     'key'           => 'precio',
    //     'value'         => '3713050',
    //     'compare'	    => '>=',
    //     'type'	    => 'DECIMAL'
    // ),
    // array(
    //     'key'           => 'banos',
    //     'value'         => array('1.0', '4.5'),
    //     'compare'	    => 'BETWEEN',
    // ),
    // array(
    //     'key'           => 'metros',
    //     'value'         => '156.9',
    //     'compare'	    => '>=',
    //     'type'	    => 'DECIMAL'
    // ),
    array(
        'relation' => 'AND',
        $dinamyc_amenities

    )
);

$args = array(
    'posts_per_page' => -1,
    'post_type' => 'departamento',
    'post_status'   => 'publish',

    'tax_query' => array(
        array(
            'taxonomy' => 'categorias-ubicaciones',
            'field'  => 'name',
            'terms' => 'Guadalajara'
        )
    ),
    'meta_query' => $amenidades_args
);

$depts = new WP_Query($args);
if( $depts->have_posts()):
    echo '<table border="1"><thead><th>Lugar</th><th>precio</th><th>metros</th><th>baños</th><th>recamaras</th><th>amenidades</th></thead>';
    while($depts->have_posts()):
        $depts-> the_post();
        $amenidades = get_field('amenidades');

       echo '
        <tr>
            <td>'.get_the_title().'</td>
            <td>'.get_field('precio').'</td>
            <td>'.get_field('metros').'</td>
            <td>'.get_field('banos').'</td>
            <td>'.get_field('recamaras').'</td>
            <td>';
            foreach($amenidades as $key => $value){

                $label = ucwords(str_replace('_', " ", $key));
                if($value == 1){
                    echo $label.'<br>';
                }
            }
            echo'
            </td>
        </tr>';

    endwhile;
    echo '</table>';
endif;
wp_reset_query();

echo do_shortcode('[department_search]');

// $posts = get_posts(array(
// 	'posts_per_page'	=> -1,
//     'post_type'		=> 'departamento',
//     'post_status'   => 'publish',
//     'fields' => 'ids',
//     'tax_query' => array(
//          array(
//             'taxonomy' => 'categorias-ubicaciones',
//             'field' => 'slug',
//             'terms' => 'estado-de-mexico',
// 		),
//     ),
// 	// 'meta_query'	=> array(
// 	// 	'relation'		=> 'OR',
// 	// 	array(
// 	// 		'key'	 	=> 'amenidades_gym',
// 	// 		'value'	  	=> '1',
// 	// 		'compare' 	=> '=',
//     //     )
//     // )
// ));

// print_r($posts);
// wp_reset_query();
?>

<?php
// $ubicaciones = [];
// foreach($posts as $post){
//      $ubicacion = wp_get_post_terms( $post, 'categorias-desarrollos', array('parent' => 0, 'hide_empty' => 0, 'fields' => 'slugs') );
//     array_push($ubicaciones, $ubicacion[0]);
// }
// $ubicaciones = array_unique($ubicaciones);

// foreach ($ubicaciones as $ubicacion){
//     echo $ubicacion.'<br>';

//     $posts = get_posts(array(
//         'posts_per_page'	=> -1,
//         'post_type'		=> 'departamento',
//         'post_status'   => 'publish',
//         'tax_query' => array(
//              array(
//                 'taxonomy' => 'categorias-desarrollos',
//                 'field' => 'slug',
//                 'terms' => $ubicacion,
//             ),
//         ),
//         'meta_query'	=> array(
// 		    'relation'		=> 'AND',
// 		    array(
//                 'key'	 	=> 'amenidades_gym',
//                 'value'	  	=> '1',
//                 'compare' 	=> '=',
//             ),
//             array(
//                 'key'	 	=> 'precio',
//                 'value'	  	=>  1200000,
//                 'compare' 	=> '>=',
//             ),
//             array(
//                 'key'	 	=> 'recamaras',
//                 'value'	  	=> '3',
//                 'compare' 	=> '<=',
//             ),
//         )

//     ));
    ?>
<pre> <?php
//  print_r($posts);
 ?> </pre>
<?php
    // echo '<br>';
// }
?>


<?php

// $results = $wpdb->get_results( 'SELECT DISTINCT meta_value FROM gen_postmeta WHERE meta_key LIKE "banos"', ARRAY_A );
// print_r($results);
// wp_reset_query();
?>



<?php
get_footer();
// $result = $wpdb->get_results( 'SELECT DISTINCT meta_value FROM gen_postmeta WHERE meta_key LIKE "recamaras" ORDER BY meta_value ASC', ARRAY_A );
// print_r($result);
// wp_reset_query();

?>
