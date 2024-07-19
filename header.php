<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('body'); ?>>
<header>
    <div class="headerContainer">
        <div class="headerContainer__logo">
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
        <nav class="headerContainer__navbar">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'header-menu',
                        'menu_class'     => 'headerContainer__navbar_nav-menu',
                        'container'      => 'ul',
                    )
                );
            ?>
        </nav>
    </div>
</header>

</div>

