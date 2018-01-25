<?php get_header(); ?>
<!-- banner -->
<div class="banner_w3ls page_head">

</div>
<!-- //banner -->
<div class="about all_pad">
    <div class="container">
        <h3 class="title">
            <?php the_field('about_section1_title') ?>
        </h3>
        <div class="services-grids w3layouts">
            <div class="col-md-6 ser-right-page">
                <div class="port-2 effect-3">
                    <div class="image-box w3">
                        <?php $about_feature_image = get_field('about_feature_image')  ?>
                        <img src="<?php echo $about_feature_image['url'] ?>" alt=" " />
                    </div>
                    <div class="text-desc">
                        <h4>
                            <?php the_field('website_name') ?>
                        </h4>
                        <p>
                            <?php the_field('brief_description') ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ser-left-page">
                <div class="services-grid w3l">
                    <div class="services-left w3ls">
                        <p>01</p>
                    </div>
                    <div class="services-right agileits">
                        <h4>
                            <?php the_field('title_for_our_service1') ?>
                        </h4>
                        <p>
                            <?php the_field('description_for_our_service1') ?>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="services-grid agileinfo">
                    <div class="services-left wthree">
                        <p>02</p>
                    </div>
                    <div class="services-right w3-agileits">
                        <h4>
                            <?php the_field('title_for_our_service2') ?>
                        </h4>
                        <p>
                            <?php the_field('description_for_our_service2') ?>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="about_bot">
    <div class="container">
        <div class="col-md-8 abt-top-right">
            <?php
            $args = array(
            'post_type'      => 'statistics',
            'posts_per_page' => 10000,
            'order'          => 'ASC'
            );
                
            $the_query = new WP_Query ($args);
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post(); 
                    ?>
                <div class="col-sm-6 capabil-grid wow fadeInDown animated animated text-center" data-wow-delay="0.4s">
                    <?php $statistic_num = get_field('statistic_num') ?>
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?php echo $statistic_num ?>' data-delay='.5' data-increment="1"></div>
                    <h4>
                        <?php the_field('statistic_title') ?>
                    </h4>
                    <p>
                        <?php the_field('statistic_description') ?> </p>
                </div>

                <?php    
                }
            }
            wp_reset_postdata();
            ?>
                <div class="clearfix"></div>
        </div>
        <div class="col-md-4 abt-top agileits-w3layouts">
            <?php $statistics_featured_image = get_field('statistics_featured_image')  ?>
            <img src="<?php echo $statistics_featured_image['url'] ?>" alt=" " />
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="team all_pad">
    <div class="container">
        <h3 class="title">
            <?php the_field('about_section3_title') ?>
        </h3>
        <div class="team-grids">
            <?php
            $args = array(
            'post_type'      => 'our_team',
            'posts_per_page' => 10000,
            'order'          => 'ASC'
            );
                
            $the_query = new WP_Query ($args);
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post(); 
                    $member_photo = get_field('member_photo');
                    ?>
                <div class="col-md-3 team-grid agile">
                    <div class="team-img">
                        <div class="view second-effect">
                            <img src="<?php echo $member_photo['url'] ?>" alt="" class="img-responsive" />
                            <div class="mask">
                                <p>
                                    <?php the_field('member_job_title') ?>
                                </p>
                                <ul>
                                    <li><a class="fb-icon1" href="<?php the_field('member_facebook_profile_link') ?>" target="_blank"></a></li>
                                    <li><a class="fb-icon2" href="<?php the_field('member_pinterest_profile_link') ?>" target="_blank"></a></li>
                                    <li><a class="fb-icon3" href="<?php the_field('member_twitter_profile_link') ?>" target="_blank"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h4>
                        <?php the_field('member_name') ?>
                    </h4>
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
