<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Genesis GNS Capital 1.0
 */

get_header();
?>

<div id="primary" class="content-area">
    <div id="content" class="site-content content_404" role="main">
        <h1 class="page-title"><?php _e( 'Sin resultados', 'genesis' ); ?></h1>
        <div class="page-wrapper">
            <div class="page-content">
                <h2><?php _e( 'Parece ser que lo que busca ya no está disponible.', 'genesis' ); ?></h2>
                <div>Intenta regresar a <a href="<?php echo home_url()?>"><strong>Inicio</strong></a></div>
            </div><!-- .page-content -->
        </div><!-- .page-wrapper -->
    </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>
