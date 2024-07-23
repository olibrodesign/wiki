<?php get_header(); ?>


<div class="search-grid">
    <div class="container">
        <div class="row" id="results-container">
            <div class="col-md-9 grid-container-left">
            <h2 class="grid-title">Articles</h2>
                <?php
                if (isset($_GET['s'])) {
                    $search_query = sanitize_text_field($_GET['s']);
                    $searchGrid = new WP_Query(array(
                        's' => $search_query,
                        'post_type' => 'development',
                        'posts_per_page' => 100,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    ));

                    if ($searchGrid->have_posts()) {
                        while ($searchGrid->have_posts()) {
                            $searchGrid->the_post(); ?>
                            <div class="col-md-12 post-item">
                                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                <?php }
                    } else {
                        echo '<p>No results found for your query.</p>';
                    }
                    wp_reset_query();
                } else {
                    echo '<p>Please enter a search query.</p>';
                }
                ?>
            </div>
            <div class="col-md-3">
                <h4>Categories:</h4>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>