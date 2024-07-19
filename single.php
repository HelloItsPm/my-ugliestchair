<?php get_header(); ?>

<h1><?php the_title(); ?></h1>


<div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php if ( have_rows('article__repeater') ) : ?>
        <div class="content-repeater">
            <?php while ( have_rows('article__repeater') ) : the_row(); ?>

                <?php if ( get_row_layout() == 'article__repeater_solo_text' ) : ?>
                    <div class="repeater-solo-text">
                        <p><?php the_sub_field('article__repeater_solo_text_custom'); ?></p>
                    </div>

                <?php elseif ( get_row_layout() == 'article__repeater_solo_img' ) : ?>
                    <div class="repeater-solo-img">
                        <?php $image = get_sub_field('article__repeater_solo_img_custom'); ?>
                        <?php if ( $image ) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>

                <?php elseif ( get_row_layout() == 'article__repeater_left_img_right_text' ) : ?>
                    <div class="repeater-left-img-right-text">
                        <?php $image = get_sub_field('article__repeater_left_img_custom'); ?>
                        <?php if ( $image ) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        <p><?php the_sub_field('article__repeater_right_text_custom'); ?></p>
                    </div>

                <?php elseif ( get_row_layout() == 'article__repeater_right_img_left_text' ) : ?>
                    <div class="repeater-right-img-left-text">
                        <p><?php the_sub_field('article__repeater_left_text_custom'); ?></p>
                        <?php $image = get_sub_field('article__repeater_right_img_custom'); ?>
                        <?php if ( $image ) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>

                <?php elseif ( get_row_layout() == 'article__repeater_up_img_down_text' ) : ?>
                    <div class="repeater-up-img-down-text">
                        <?php $image = get_sub_field('article__repeater_up_img_custom'); ?>
                        <?php if ( $image ) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        <p><?php the_sub_field('article__repeater_down_text_custom'); ?></p>
                    </div>

                <?php elseif ( get_row_layout() == 'article__repeater_up_text_down_img' ) : ?>
                    <div class="repeater-up-text-down-img">
                        <p><?php the_sub_field('article__repeater_up_text_custom'); ?></p>
                        <?php $image = get_sub_field('article__repeater_down_img_custom'); ?>
                        <?php if ( $image ) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>

                <?php elseif ( get_row_layout() == 'article__repeater_gallery_img' ) : ?>
                    <div class="repeater-gallery-img">
                        <?php $gallery = get_sub_field('article__repeater_gallery_img_custom'); ?>
                        <?php if ( $gallery ) : ?>
                            <?php foreach ( $gallery as $image ) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                <?php elseif ( get_row_layout() == 'article__repeater_text_img_team' ) : ?>
                    <div class="repeater-text-img-team">
                        <?php for ( $i = 1; $i <= 3; $i++ ) : ?>
                            <?php $text = get_sub_field('article__repeater_text_team_custom' . $i); ?>
                            <?php $image = get_sub_field('article__repeater_img_team_custom' . $i); ?>
                            <?php if ( $text || $image ) : ?>
                                <div class="team-member">
                                    <?php if ( $image ) : ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                    <?php if ( $text ) : ?>
                                        <p><?php echo esc_html($text); ?></p>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>

                <?php endif; ?>

            <?php endwhile; ?>
        </div>
    <?php endif; ?>

<?php endwhile; endif; ?>

</div>


<?php get_footer(); ?>