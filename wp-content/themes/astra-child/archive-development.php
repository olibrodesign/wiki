<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Developments</h1>
            <?php if (have_posts()) : ?>
                <div class="developments-list">
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="development-item">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="development-excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="pagination">
                    <?php
                    // Display pagination if there are more posts than the one page can show.
                    the_posts_pagination(array(
                        'mid_size' => 2,
                        'prev_text' => __('« Previous', 'textdomain'),
                        'next_text' => __('Next »', 'textdomain'),
                    ));
                    ?>
                </div>
            <?php else : ?>
                <p><?php _e('No developments found', 'textdomain'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
