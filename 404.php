<?php
/*
 * This template for displaying the header
 */
get_header();
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body style="font-family: New Amsterdam, sans-serif;" <?php body_class(); ?>>

    <div class="container p-5">

        <div class="row">
            <div class="col text-center" style="font-family: Abel, sans-serif; font-size: 15px; font-weight: bold;">
                <a href="<?php echo site_url(); ?>">Home</a>
                <
                    <?php
                    if (is_404()) {
                        echo '404 - Post/Page Not Found';
                    } else {
                        the_title();
                    }
                    ?>
                    </div>
            </div>

            <div class="row row-cols-1">
                <div class="col-lg-4"></div>
                <div class="col-lg-4 text-center">
                    <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/404-image.png" alt="">
                </div>
                <div class="col-lg-4"></div>
            </div>

            <br>

            <div class="row">
                <div class="col text-center">
                    <h4>Connect With Us, On</h4>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-auto">
                    <div class="contact-info text-center">
                        <?php if (get_theme_mod('phone_number')) : ?>
                            <span class="phone" style="color: black; font-weight: bold; font-size: 15px;">
                                <i class="bi bi-phone-fill"></i> <?php echo esc_html(get_theme_mod('phone_number')); ?>
                            </span>
                        <?php endif; ?>
                        <?php if (get_theme_mod('email_address')) : ?>
                            <span class="email" style="color: black; font-weight: bold; font-size: 15px;">
                                <i class="bi bi-envelope-fill"></i> <?php echo esc_html(get_theme_mod('email_address')); ?>
                            </span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>


        </div>






        <?php get_footer(); ?>
        <?php wp_footer(); ?>
</body>

</html>