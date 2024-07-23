<!DOCTYPE html>

<html>

<head>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <html lang="sr-RS">


    <meta charset="UTF-8" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">



<body>

    <header class="site-header" id="sticky-header">
        <div class="container">
            <div class="row search-form-header">
                <div class="col-md-2">
                    <?php
                    if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    } else {
                        echo '<a href="' . esc_url(home_url('/')) . '"><img src="' . get_template_directory_uri() . '/images/default-logo.png" alt="' . get_bloginfo('name') . '"></a>';
                    }
                    ?>
                </div>
                <div class="col-md-10">
                    <form id="search-form-s" method="get" action="<?php echo home_url('/'); ?>">
                        <input type="text" id="search-input-s" name="s" placeholder="Search Articles">
                        <button type="submit">Search</button>
                    </form>
                </div>

            </div>
            <div class="row header-title">

                <div class="col-md-12 title-col">
                    <h1><?php echo wp_get_document_title(); ?></h1>
                </div>
                <div class="col-md-12 menu-col">
                    <div class="site-header__menu group">
                        <nav class="main-navigation navbar navbar-expand-md navbar-default" role="navigation">
                            <?php
                            if (has_nav_menu('header-menu')) :
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'header-menu',
                                        'menu_id'        => 'primary-menu',
                                        'menu_class'     => 'nav navbar-nav',
                                    )
                                );
                            endif;
                            ?>
                        </nav>
                    </div>
                </div>
            </div>

        </div>
    </header>