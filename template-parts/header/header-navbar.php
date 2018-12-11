<nav class="navbar navbar-expand-lg navbar-light py-3">
    <a class="navbar-brand mr-4" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img src="<?php echo get_template_directory_uri()?>/assets/img/svg/LOGHORCOLBCO.svg" alt="" style="width:160px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarToggler">
        <?php
        if ( has_nav_menu( 'menu-header' ) ) :
            wp_nav_menu( array(
                'theme_location' => 'menu-header',
                'menu_id'        => 'menu-header',
                'container'      => false,
                'depth'          => 0,
                'menu_class'     => 'navbar-top-beatech navbar-nav mr-auto mt-2 mt-lg-0 text-uppercase',
                'walker'         => new Bootstrap_NavWalker(),
                'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
            ) );
        endif; ?>
        <div class="my-2 my-lg-0">
            <a href="#" class="btn-round-outl btn-round-outl-seccolor3">Orçamento</a>
        </div>
    </div>
</nav>


