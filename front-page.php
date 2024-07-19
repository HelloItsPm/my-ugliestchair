<?php get_header(); ?>


<div>
    <div class="homeHeaderContainer">
        <img src="<?php echo wp_kses_post( get_field('home__header_wallpaper') ); ?>" alt="deux chaises moches beiges" class="homeHeaderContainer__img">
        <div class="homeHeaderContainer__title">
            <h1 class="homeHeaderContainer__title_main"><?php echo wp_kses_post( get_field('home__header_title') ); ?></h1>
            <p class="homeHeaderContainer__title_subtitle"><?php echo wp_kses_post( get_field('home__header_subtitle') ); ?></p>
        </div>
    </div>
</div>

<div>
    <?php the_content(); ?>
</div>

<div class="latestPosts">
    <h2>Derniers Articles</h2>
    <div class="latestPosts__postCards">
        <?php
        // Arguments de la requête
        $args = array(
            'posts_per_page' => 4, // Nombre d'articles à afficher
            'post_status' => 'publish' // Seuls les articles publiés
        );

        // Requête WP
        $latest_posts = new WP_Query($args);

         // Boucle WP
         if ($latest_posts->have_posts()) :
            while ($latest_posts->have_posts()) : $latest_posts->the_post();
        ?>
            <div class="latestPosts__postCards_postCard">
                <a href="<?php the_permalink(); ?>">
                    <div class="latestPosts__postCards_postCard_content">
                        <h3><?php the_title(); ?></h3>
                        <div class="latestPosts__postCards_postCard_content_image">
                            <img src="<?php echo esc_url( get_field('article__image_thumbnail') ); ?>" alt="">
                        </div>
                        <p class="latestPosts__postCards_postCard_content_summary"><?php echo wp_kses_post( get_field('article__summary') ); ?></p>
                        <p class="latestPosts__postCards_postCard_content_date"><?php echo get_the_date(); ?></p>
                    </div>
                </a>
            </div>
        <?php
            endwhile;
        else :
            echo '<p>Aucun article trouvé.</p>';
        endif;

        // Réinitialiser la requête WP
        wp_reset_postdata();
        ?>
    </div>
</div>

<?php get_footer(); ?>