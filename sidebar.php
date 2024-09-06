<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body style="font-family: New Amsterdam, sans-serif;" <?php body_class(); ?>>


    <section id="pages-and-posts-sidebar">
        <?php if (is_active_sidebar('post-page-sidebar')) : ?>
            <?php dynamic_sidebar('post-page-sidebar'); ?>
        <?php else : ?>
            <div class="default-sidebar-content">

                <h4 id="default-heading">Recent Updates</h4>

                <ul id="default-list-items">
                    <li><a href="#">Bridge Construction</a></li>
                    <li><a href="#">Project Management</a></li>
                    <li><a href="#">Renovation</a></li>
                </ul>

                <h4 id="default-heading">Our Gallery</h4>

                <div class="row px-3" id="default-images">
                    <div class="col-4 p-1">
                        <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/dimg1.jpg" alt="">
                    </div>
                    <div class="col-4 p-1">
                        <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/dimg2.jpg" alt="">
                    </div>
                    <div class="col-4 p-1">
                        <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/dimg3.jpg" alt="">
                    </div>
                </div>

                <h4 id="default-heading">Categories</h4>

                <ul id="default-list-items">
                    <li><a href="#">New Rates</a></li>
                    <li><a href="#">Managing Process</a></li>
                    <li><a href="#">New offers</a></li>
                </ul>

                <a href="" id="from-venture-vision">💙 From Venture Vision | By A. Paul</a>

            </div>
        <?php endif; ?>
    </section>


    <?php wp_footer(); ?>
</body>

</html>