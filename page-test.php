<?php
global $wpdb; ?>

<?php
$posts = get_posts(array(
	'posts_per_page'	=> -1,
    'post_type'		=> 'departamento',
    'post_status'   => 'publish',
    'fields' => 'ids',
    'tax_query' => array(
         array(
            'taxonomy' => 'categorias-ubicaciones',
            'field' => 'slug',
            'terms' => 'estado-de-mexico',
		),
    ),
	// 'meta_query'	=> array(
	// 	'relation'		=> 'OR',
	// 	array(
	// 		'key'	 	=> 'amenidades_gym',
	// 		'value'	  	=> '1',
	// 		'compare' 	=> '=',
    //     )
    // )
));

print_r($posts);
wp_reset_query();
?>

<?php
$ubicaciones = [];
foreach($posts as $post){
     $ubicacion = wp_get_post_terms( $post, 'categorias-desarrollos', array('parent' => 0, 'hide_empty' => 0, 'fields' => 'slugs') );
    array_push($ubicaciones, $ubicacion[0]);
}
$ubicaciones = array_unique($ubicaciones);

foreach ($ubicaciones as $ubicacion){
    echo $ubicacion.'<br>';

    $posts = get_posts(array(
        'posts_per_page'	=> -1,
        'post_type'		=> 'departamento',
        'post_status'   => 'publish',
        'tax_query' => array(
             array(
                'taxonomy' => 'categorias-desarrollos',
                'field' => 'slug',
                'terms' => $ubicacion,
            ),
        ),
        'meta_query'	=> array(
		    'relation'		=> 'AND',
		    array(
                'key'	 	=> 'amenidades_gym',
                'value'	  	=> '1',
                'compare' 	=> '=',
            ),
            array(
                'key'	 	=> 'precio',
                'value'	  	=>  1200000,
                'compare' 	=> '>=',
            ),
            array(
                'key'	 	=> 'recamaras',
                'value'	  	=> '3',
                'compare' 	=> '<=',
            ),
        )

    ));
    ?>
<pre> <?php print_r($posts);?> </pre>
<?php
    echo '<br>';
}
?>

<!--
<?php

// $results = $wpdb->get_results( 'SELECT DISTINCT meta_value FROM gen_postmeta WHERE meta_key LIKE "banos"', ARRAY_A );
// print_r($results);
// wp_reset_query();
?>
<br>
<br>


<?php
// $result = $wpdb->get_results( 'SELECT DISTINCT meta_value FROM gen_postmeta WHERE meta_key LIKE "recamaras" ORDER BY meta_value ASC', ARRAY_A );
// print_r($result);
// wp_reset_query();

?> -->
