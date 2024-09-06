<?php get_header(); ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body style="font-family: Outfit, sans-serif;" <?php body_class(); ?>>


    <div class="container">
        <div class="row row-cols-1">

                <!-- For page content -->
                <div class="col-lg-8 p-3" id="page-column">
                    <div class="row px-3" id="page-title">
                        <?php the_title(); ?>
                    </div>
                    <div class="row px-3" id="page-path">
                        <a href="<?php echo site_url(); ?>">Home</a> / <?php the_title(); ?>
                    </div>
                    <div class="row p-3" id="page-content">
                        <?php the_content(); ?>
                    </div>
                </div>

            <!-- For Sidebar -->
            <div class="col-lg-4 p-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>


    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>

</html>