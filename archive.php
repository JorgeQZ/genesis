<?php
/**
 */
get_header();


// get the current taxonomy term
$term = get_queried_object();
if( $term->taxonomy == 'categorias-desarrollos'):
    get_template_part('template-parts/archive-desarrollo');
elseif( $term->taxonomy == 'categorias-ubicaciones'):
    get_template_part('template-parts/archive-ubicaciones');
endif;
?>
<?php get_footer(); ?>
