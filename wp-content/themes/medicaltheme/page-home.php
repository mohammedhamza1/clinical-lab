<?php get_header(); ?>

<!-- banner -->
<div class="banner_w3ls w3layouts">
    <div id="top" class="callbacks_container">
        <ul class="rslides" id="slider3">
            <?php
            $args = array(
            'post_type'      => 'sliders',
            'posts_per_page' => 10000,
            'order'          => 'DESC'
            
            );
            
            $the_query = new WP_Query ($args);
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post(); 
                    ?>
                <li>
                    <div class="banner-info w3">
                        <div class="banner-text w3l">
                            <h3>
                                <?php the_field('slide_title_p1') ?><span><?php the_field('slide_title_p2') ?></span></h3>
                            <p>
                                <?php the_field('slide_content') ?> </p>
                        </div>
                    </div>
                </li>
                <?php    
                }
            }
            wp_reset_postdata();
            ?>

        </ul>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //banner -->
<!-- banner-bottom -->
<div class="bottom_wthree">
    <div class="col-md-6 bottom-left w3-agileits">
        <figure class="cube-1">
            <div class="btm-hov">
                <div class="btm-wid">
                    <div class="thumbs">
                        <span class="rotate">
							<a class="btn"><?php bloginfo('name'); ?></a>
						</span>
                    </div>
                    <div class="fill_fig">
                        <span class="fill"></span>
                        <span class="fill"></span>
                        <span class="fill"></span>
                        <span class="fill"></span>
                    </div>
                </div>
            </div>
        </figure>
        <div class="clearfix"></div>
    </div>
    <div class="col-md-6 bottom-right agileits-w3layouts">
        <div class="btm-right-grid agile">
            <h2>
                <?php the_field('section2_title') ?>
            </h2>
            <p>
                <?php the_field('Section2_content') ?> </p>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- //banner-bottom -->
<!-- services -->
<div class="services_agile">
    <div class="container">
        <h3 class="title">
            <?php the_field('section3_title') ?>
        </h3>
        <div class="services_right w3-agile">
            <?php
            $args = array(
            'post_type'      => 'our_services',
            'posts_per_page' => 10000,
            'order'          => 'DESC'
            
            );
            
            $the_query = new WP_Query ($args);
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post(); 
                    $service_icon = get_field('service_icon');
                    $service_image = get_field('service_image');
                    ?>
                <div class="col-md-4 list-left text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.1s">
                    <span><img src="<?php echo $service_icon['url'] ?>" alt=" "/></span>
                    <h4>
                        <?php the_field('service_title') ?>
                    </h4>
                    <div class="multi-gd-text"><a><img class="img-responsive" src="<?php echo $service_image['url'] ?>" alt=" "/></a></div>
                    <p>
                        <?php the_field('service_description') ?>
                    </p>
                </div>
                <?php    
                }
            }
            wp_reset_postdata();
            ?>
                <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //services -->

<!-- care -->
<div class="care_agileits">
    <div class="container">
        <div class="offer agile">
            <h3>
                <?php the_field('section4_title1') ?>
            </h3>
            <h4>
                <?php the_field('section4_title2') ?>
            </h4>
            <ul>
                <?php
            $args = array(
            'post_type'      => 'offers',
            'posts_per_page' => 10000,
            'order'          => 'ASC'
            );
                
            $the_query = new WP_Query ($args);
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post(); 
                    ?>
                    <li>
                        <div class="offer-left w3-agile">
                            <div class="hi-icon-wrap hi-icon-effect-2 hi-icon-effect-2b">
                                <a class="<?php the_field('offer_icon') ?>"></a>
                            </div>
                        </div>
                        <div class="offer-right agileits-w3layouts">
                            <p>
                                <?php the_field('offer_description') ?>
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <?php    
                }
            }
            wp_reset_postdata();
            ?>
            </ul>
        </div>
    </div>
</div>
<!-- //care -->
<div class="features_w3 agileits">
    <div class="container">
        <h3 class="title">
            <?php the_field('section5_title') ?>
        </h3>
        <div class="fea_grids w3ls">
            <?php
            $args = array(
            'post_type'      => 'our_features',
            'posts_per_page' => 10000,
            'order'          => 'ASC'
            );
                
            $the_query = new WP_Query ($args);
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post(); 
                     $feature_icon = get_field('feature_icon');
                    ?>
                <div class="col-md-6 fea_grid1">
                    <div class="col-sm-4 fea_left text-center w3ls">
                        <div class="ih-item circle effect1">
                            <a>
                                <div class="spinner"></div>
                                <div class="img"><img src="<?php echo $feature_icon['url'] ?>" alt="img"></div>
                                <div class="info">
                                    <div class="info-back">

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-8 fea_right agileinfo">
                        <h4>
                            <?php the_field('feature_title') ?>
                        </h4>
                        <p>
                            <?php the_field('feature_description') ?>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <?php    
                }
            }
            wp_reset_postdata();
            ?>

                <div class="clearfix"></div>
        </div>
    </div>
</div>



<?php get_footer(); ?>
