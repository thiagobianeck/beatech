<div class="top-footer bg-cincolor2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">

                <?php echo do_shortcode('[mc4wp_form id="21"]')?>
            </div>
            <div class="col-md-4 col-lg-4 my-2 my-md-0">
                <div class="social-icons text-white text-center text-md-right">
                    <a href="https://www.facebook.com/beatech.technology" target="_blank" class="btn-social-simpl-bgdrk btn-social-simpl-facebook"></a>
                    <a href="https://www.linkedin.com/company/beatechtechnology/" target="_blank" class="btn-social-simpl-bgdrk btn-social-simpl-linkedin"></a>
<!--                    <a href="#" target="_blank" class="btn-social-simpl-bgdrk btn-social-simpl-twitter"></a>-->
<!--                    <a href="#" target="_blank" class="btn-social-simpl-bgdrk btn-social-simpl-pinterest"></a>-->
<!--                    <a href="#" target="_blank" class="btn-social-simpl-bgdrk btn-social-simpl-github"></a>-->
<!--                    <a href="#" target="_blank" class="btn-social-simpl-bgdrk btn-social-simpl-instagram"></a>-->
<!--                    <a href="#" target="_blank" class="btn-social-simpl-bgdrk btn-social-simpl-youtube"></a>-->
<!--                    <a href="#" target="_blank" class="btn-social-simpl-bgdrk btn-social-simpl-whatsapp"></a>-->
                </div>
            </div>

        </div>
    </div>
</div>
<footer class="footer-beatech bg-cincolor text-bcocolor">
    <div class="container">
        <div class="row py-5">
            <div class="col-12 col-lg-4 pb-5">
                <div class="sobre-logo text-center">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/svg/LOGHORCOLCP3.svg">
                    </a>
                    <p class="text-center text-lg-left text-white my-4"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto eveniet, ducimus aliquid ipsam nostrum exercitationem provident. Quibusdam maiores dolore magni, atque quia ipsa ducimus rerum.</p>
                    <a href="#" class="btn-round-outl btn-round-outl-bcocolor">Saiba mais</a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 py-3 py-md-0">
                <div class="footer-topico text-center text-lg-left">
                    <h4 class="footer-topico-titulo">Institucional</h4>
                    <nav class="menu-footer">

                        <?php
                        if ( has_nav_menu( 'menu-header' ) ) :
                            wp_nav_menu( array(
                                'theme_location' => 'menu-header',
                                'menu_id'        => 'menu-header',
                                'container'      => false,
                                'depth'          => 0,
                                'menu_class'     => '',
                            ) );
                        endif; ?>
                    </nav>
                </div>
                <div class="footer-topico text-center text-lg-left ">
                    <h4 class="footer-topico-titulo">Links Úteis</h4>
                    <nav class="menu-footer-links">
                        <ul>
                            <li><a href="">Lorem ipsum dolor</a></li>
                            <li><a href="">Lorem ipsum dolor sit</a></li>
                            <li><a href="">Quibusdam maiores dolore</a></li>
                            <li><a href="">consectetur adipisicing elit</a></li>
                        </ul>
                    </nav>
                </div>

            </div>
            <div class="col-12 col-md-6 col-lg-4 py-3 py-md-0">
                <div class="d-flex justify-content-center">
                    <div style="width: 300px;" class="fb-page"
                         data-href="https://www.facebook.com/beatech.technology"
                         data-width="340"
                         data-hide-cover="false"
                         data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/beatech.technology" class="fb-xfbml-parse-ignore">
                            <a href="https://www.facebook.com/beatech.technology">Beatech Solutions Technology</a>
                        </blockquote>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="footer-copyright text-center">
        <p class="copyright-text">Beatech Solutions Technology - Todos os Direitos Reservados - 2018</p>
    </div>
</footer>
<?php wp_footer(); ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
