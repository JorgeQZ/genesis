<footer>
    <div class="columns">
        <div class="column">
            <?php if ( is_active_sidebar( 'fcolumn-1' ) ) { ?>
            <?php dynamic_sidebar('fcolumn-1'); ?>
            <?php } ?>
        </div>
        <div class="column">
            <?php if ( is_active_sidebar( 'fcolumn-2' ) ) { ?>
            <?php dynamic_sidebar('fcolumn-2'); ?>
            <?php } ?></div>
        <div class="column">
            <div class="footer-menu">
                <?php if ( is_active_sidebar( 'fcolumn-3' ) ) { ?>
                <?php dynamic_sidebar('fcolumn-3'); ?>
                <?php } ?>
            </div>
        </div>
        <div class="column">
            <?php if ( is_active_sidebar( 'fcolumn-4' ) ) { ?>
            <?php dynamic_sidebar('fcolumn-4'); ?>
            <?php } ?>
        </div>
    </div>
    <div class="bottom">
        <?php if ( is_active_sidebar( 'fbottom' ) ) { ?>
        <?php dynamic_sidebar('fbottom'); ?>
        <?php } ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
