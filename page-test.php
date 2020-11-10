<?php
/**
 * Template Name: Test
 * Description: Just trying new code
 */
?>
<?php get_header(); ?>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
$args = array(
    'posts_per_page' => -1,
    'post_status' => 'publish',
    'hide_empty' => true,
    'tax_query' => array(
        array(
            'taxonomy' => 'categorias-ubicaciones',
            'field'  => 'slug',
            'terms' => 'guanajuato'
        )
    )
);

$post_ub = new WP_Query($args);

// Baños
$banos = [];
$recamaras = [];
$precio = [];
if($post_ub->have_posts()):
    while($post_ub->have_posts()):
        $post_ub->the_post();
        $banos[] = get_field('banos');
        $recamaras[] = get_field('recamaras');
        $precio[] = get_field('precio');
    endwhile;
endif;
wp_reset_query();

echo '<pre>';
$banos_unique = array_unique($banos);
sort($banos_unique);
print_r($banos_unique);
echo '</pre>';

// recamaras
echo '<pre>';
$recamaras_unique = array_unique($recamaras);
sort($recamaras_unique);
print_r($recamaras_unique);
echo '</pre>';

// precio
echo '<pre>';

sort($precio);
print_r($precio);
echo '</pre>';
?>


<?php get_footer(); ?>
