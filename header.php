<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
    <div class="container">
        <?php get_template_part('template-parts/header/header', 'navbar');?>
    </div>
    <div class="linha-topo bg-grad-hor-3color-pri3"></div>
</header>
<div class="">
    <section class="d-block d-md-none bg-cincolor">
        <div class="container">
            <div class="row justify-content-center py-3">
                <div class="anuncios anuncio320x100">
                    <p>320 x 100</p>
                </div>
            </div>

        </div>
    </section>
    <section class="d-none d-md-block d-lg-none bg-cincolor">
        <div class="container">
            <div class="row justify-content-center py-3">
                <div class="anuncios anuncio728x90">
                    <p>728 x 90</p>
                </div>
            </div>

        </div>
    </section>
    <section class="d-none d-lg-block bg-cincolor">
        <div class="container">
            <div class="row justify-content-center py-3">
                <div class="anuncios anuncio970x90">
                    <p>970 x 90</p>
                </div>
            </div>

        </div>
    </section>
</div>