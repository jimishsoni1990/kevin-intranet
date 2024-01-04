<?php
/**
 * Displays top horizontal menu bar
 *
 * @package WordPress
 * @subpackage intranet
 * @since Intranet 1.0
 */
?>
<nav class="navbar navbar-top fixed-top navbar-expand" id="navbarDefault" style="display: none;">
    <div class="collapse navbar-collapse justify-content-between">

        <?php get_template_part( 'template-parts/header/site-branding' ); ?>

        <?php get_template_part( 'template-parts/header/search-box' ); ?>

        <ul class="navbar-nav navbar-nav-icons flex-row">
         

            <?php get_template_part( 'template-parts/header/notifications' ); ?>

            <?php get_template_part( 'template-parts/header/apps' ); ?>

         
        </ul>
    </div>
</nav>