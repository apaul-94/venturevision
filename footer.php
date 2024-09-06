<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body style="font-family: Outfit, sans-serif;" <?php body_class(); ?>>


    <footer id="footer-section">
        <div class="container">

            <div class="row" >

                <!-- Footer 1st Col -->
                <div class="col-12 col-md-6 col-lg-3" id="footer-col-1">
                    <?php if (is_active_sidebar('footer-area-1')) : ?>

                        <!-- For Header Image Section -->
                        <?php $logoimage = get_header_image(); ?>
                        <div class="navbar-brand">
                            <a href="<?php echo home_url(); ?>">
                                <img src="<?php echo $logoimage ?>" id="logo" alt="">
                            </a>
                        </div>
                        <!-- For dynamic content from footer col area 1 -->
                        <?php dynamic_sidebar('footer-area-1'); ?>
                        <!-- For footer socials section -->
                        <div class="text-left">
                            <div class="social-media-of-footer">
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
                        <br>

                    <?php else : ?>
                        <div class="widget">
                            <h2 class="widget-title">About Us</h2>
                            <p>This is the footer about us section. You can just write about your business or company this section. Go to the Widget and at the footer col area 1 just write about your business. The social media icons will automatically appear in this section when you updated it.</p>
                            <p style="margin-top: -10px; font-weight: bold;">Search Anythings</p>
                            <div class="row pb-3" id="sidebar-default-form" style="margin-top: -10px; font-weight: bold; margin-left: 0px;">
                                <?php get_search_form(); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>


                <!-- Footer 2nd Col -->
                <div class="col-12 col-md-6 col-lg-3">
                    <?php if (is_active_sidebar('footer-area-2')) : ?>
                        <?php dynamic_sidebar('footer-area-2'); ?>
                    <?php else : ?>
                        <div class="widget">
                            <h2 class="widget-title">Navigations</h2>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Products</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Affiliate</a></li>
                                <li><a href="#">Blogs</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">About Us</a></li>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
                <!-- Footer 3rd Col -->
                <div class="col-12 col-md-6 col-lg-3">
                    <?php if (is_active_sidebar('footer-area-3')) : ?>
                        <?php dynamic_sidebar('footer-area-3'); ?>
                    <?php else : ?>
                        <div class="widget">
                            <h2 class="widget-title">Services</h2>
                            <ul>
                                <li><a href="#">General Contracting</a></li>
                                <li><a href="#">Design-Build Services</a></li>
                                <li><a href="#">Pre-Construction Services</a></li>
                                <li><a href="#">Project Management</a></li>
                                <li><a href="#">Renovation </a></li>
                                <li><a href="#">Remodeling</a></li>
                                <li><a href="#">Residential Construction</a></li>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <?php if (is_active_sidebar('footer-area-4')) : ?>
                        <?php dynamic_sidebar('footer-area-4'); ?>
                    <?php else : ?>
                        <div class="widget">
                            <h2 class="widget-title">Contact Us</h2>
                            <p>Matigara Govt. Colony, Siliguri, West Bengal, 734010, India</p>
                            <ul>
                                <li><a href="#">💬 +91 7602220806</a></li>
                                <li><a href="#">☎️ +91 7431002209</a></li>
                                <li><a href="#">💌 arunpaul36@gmail.com</a></li>
                                <li><a href="#">💌 palark030@gmail.com</a></li>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>

            </div>

        </div>

    </footer>

    <div class="container-fluid" id="copyright-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-start">
                    <p>
                        <?php echo esc_html(get_theme_mod('arunvv_copyright_text', '© Copyright 2024, All Rights Reserved, Venture Vision')); ?>
                    </p>

                </div>
                <div class="col-12 col-md-6 d-flex justify-content-md-end justify-content-center">
                    <p>Made By 💗 Arun Paul</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Back to Top Button -->
    <a href="#" class="back-to-top">
        <i class="bi bi-arrow-up-circle-fill"></i>
    </a>

    <?php wp_footer(); ?>
</body>

</html>