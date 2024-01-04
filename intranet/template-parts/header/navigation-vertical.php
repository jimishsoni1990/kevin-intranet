<?php
/**
 * Displays the site Left vertical Navigation panel.
 *
 * @package WordPress
 * @subpackage intranet
 * @since Intranet 1.0
 */
?>
<nav class="navbar navbar-vertical navbar-expand-lg">
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <!-- scrollbar removed-->
        <?php
            $dahsboard_menu_location = 'dashboard';
            if( has_nav_menu($dahsboard_menu_location) ){
                $args = array(
                    'theme_location'    => $dahsboard_menu_location,
                    'menu_id'           => "navbarVerticalNav",
                    'menu_class'        => "navbar-nav flex-column",
                    'container_class'   => "navbar-vertical-content",
                    'walker'            => new WPDocs_Walker_Nav_Menu(),
                );
                wp_nav_menu( $args );
            } else {
                echo "<li class='nav-item'><a class='nav-link text-primary'>Please assign menu<br/> to 'dashboard' location</a></li>";
            }
        ?>
    </div>
</nav>