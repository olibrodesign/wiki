<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            while (have_posts()) : the_post();
                ?>
                <h1><?php the_title(); ?></h1>
                <div class="development-content">
                    <?php the_content(); ?>
                </div>
                <div class="development-meta">
                    <p><strong><?php _e('Posted on', 'textdomain'); ?>:</strong> <?php the_date(); ?></p>
                    <p><strong><?php _e('Category', 'textdomain'); ?>:</strong> <?php the_category(', '); ?></p>
                    <p><strong><?php _e('Tags', 'textdomain'); ?>:</strong> <?php the_tags('', ', ', ''); ?></p>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
