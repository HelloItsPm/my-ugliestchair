<?php wp_footer(); ?>

<footer class="footer">

    <div class="footer__container">
        <div class="footer__container_logo">
            <a href="<?php echo home_url(); ?>"><?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                } 
                else {
                    echo '<img src="./assets/images/LogoUglyChair.png" alt="Logo">';
                }
                ?>
            </a>
        </div>
        <div class="footer__container_navigation">
            <p class ="footer__container_navigation_text">Navigation</p>
            <nav class="footer__container_navigation_navbar">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'header-menu',
                            'menu_class'     => 'footer__container_navigation_navbar_nav-menu',
                            'container'      => 'ul',
                        )
                    );
                ?>
            </nav>
        </div>
        <div class="footer__container_contact">
            <p class ="footer__container_contact_text">Contact</p>
            <div class="footer__container_contact_info">
                <?php echo wp_kses_post(get_field('home__footer_phone', 'option')); ?>
                <div class = "footer__container_contact_info_adress">
                    <?php echo wp_kses_post(get_field('home__footer_address', 'option')); ?>
                    <div>
                        <?php echo wp_kses_post(get_field('home__footer_addressplus', 'option')); ?>
                    </div>
                    <div class = "footer__container_contact_info_adress_town">
                        <?php echo wp_kses_post(get_field('home__footer_postcode', 'option')); ?>
                        <?php echo wp_kses_post(get_field('home__footer_town', 'option')); ?>
                    </div>
                </div>
                <?php echo wp_kses_post(get_field('home__footer_mail', 'option')); ?>
            </div>
        </div>
        
    </div>

</footer>
</body>
</html>