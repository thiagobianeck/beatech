<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri()?>/assets/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri()?>/assets/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri()?>/assets/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri()?>/assets/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri()?>/assets/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri()?>/assets/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri()?>/assets/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri()?>/assets/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri()?>/assets/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri()?>/assets/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri()?>/assets/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri()?>/assets/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri()?>/assets/icons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri()?>/assets/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#373737">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#373737">

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-4915165216584421",
            enable_page_level_ads: true
        });
    </script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
    <div class="container">
        <?php get_template_part('template-parts/header/header', 'navbar');?>
    </div>
    <div class="linha-topo bg-grad-hor-3color-pri3"></div>
</header>
<?php

$paginassemanuncio = is_front_page();

if(!$paginassemanuncio):?>
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
<?php endif;?>