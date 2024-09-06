<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

</head>

<body style="font-family: Outfit, sans-serif;" <?php body_class(); ?>>


    <!-- Contact and Social Media Section -->
    <div class="contact-social-section">
        <div class="container">
            <div class="row row-cols-1">

                <div class="col-12 col-md-6 d-flex justify-content-md-start justify-content-center mb-2 mb-md-0">
                    <div class="contact-info">
                        <?php if (get_theme_mod('phone_number')) : ?>
                            <span class="phone"><i class="bi bi-phone-fill"></i> <?php echo esc_html(get_theme_mod('phone_number')); ?></span>
                        <?php endif; ?>
                        <?php if (get_theme_mod('email_address')) : ?>
                            <span class="email"><i class="bi bi-envelope-fill"></i> <?php echo esc_html(get_theme_mod('email_address')); ?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-12 col-md-6 d-flex justify-content-md-end justify-content-center">
                    <div class="social-media">
                        <?php for ($i = 1; $i <= 4; $i++) : ?>
                            <?php
                            $url = get_theme_mod("social_media_url_$i");
                            $type = get_theme_mod("social_media_type_$i");
                            $icon_class = '';
                            switch ($type) {
                                case 'facebook':
                                    $icon_class = 'bi bi-facebook';
                                    break;
                                case 'twitter':
                                    $icon_class = 'bi bi-twitter';
                                    break;
                                case 'linkedin':
                                    $icon_class = 'bi bi-linkedin';
                                    break;
                                case 'instagram':
                                    $icon_class = 'bi bi-instagram';
                                    break;
                                case 'youtube':
                                    $icon_class = 'bi bi-youtube';
                                    break;
                                case 'pinterest':
                                    $icon_class = 'bi bi-pinterest';
                                    break;
                                case 'tumblr':
                                    $icon_class = 'bi bi-tumblr';
                                    break;
                                case 'reddit':
                                    $icon_class = 'bi bi-reddit';
                                    break;
                            }
                            ?>
                            <?php if (!empty($url)) : ?>
                                <a href="<?php echo esc_url($url); ?>" target="_blank" class="<?php echo esc_attr($icon_class); ?>" aria-label="<?php echo esc_attr($type); ?>"></a>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- For Navigarion Bar -->
    <header class="navbar sticky-top">
        <div class="container">
            <!-- For Header Image Section -->
             <?php $logoimage = get_header_image();?>
            <div class="navbar-brand">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo $logoimage?>" id="logo" alt="">
                </a>
            </div>

            <div class="navbar-toggle" id="navbar-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary-menu',
                'menu_class'     => 'navbar-menu',
                'container'      => false,
                'fallback_cb'    => false,
            ));
            ?>
        </div>
    </header>








    <?php wp_footer(); ?>
</body>

</html>