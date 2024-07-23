<?php get_header(); ?>

<div class="container home-grid-container">
    <div class="row">
        <div class="col-md-9 grid-container-left">
            <h2 class="grid-title">Articles</h2>
            <?php
            // Define the custom query parameters
            $args = array(
                'post_type' => 'development', // Only fetch 'development' post type
                'posts_per_page' => -1, // Fetch all posts
                'orderby' => 'date',
                'order' => 'DESC',
            );

            // Instantiate a new query object
            $development_query = new WP_Query($args);

            // Check if the query returns any posts
            if ($development_query->have_posts()) : ?>
                <div class="posts-grid">
                    <?php while ($development_query->have_posts()) : $development_query->the_post(); ?>
                        <div class="post-item">
                            <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            <div class="post-excerpt">
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
                <p><?php _e('No articles found', 'textdomain'); ?></p>
            <?php endif; ?>

            <?php
            // Reset post data after custom query
            wp_reset_postdata();
            ?>
        </div>

        <div class="col-md-3">
            <h4>Categories:</h4>
        </div>
    </div>
</div>

<?php get_footer(); ?>
