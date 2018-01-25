<?php get_header(); ?>
<!-- banner -->
<div class="banner_w3ls page_head phc">

</div>
<!-- //banner -->
<!-- banner-bottom -->
<?php
    $args = array(
    'post_type'      => 'treatments',
    'posts_per_page' => 1000000,
    'order'          => 'DESC'
    );

    $the_query = new WP_Query ($args);
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post(); 
            $post_image = get_field('post_image');
            ?>
    <div class="bottom_wthree">

        <div class="col-md-6 bottom-left w3-agileits">
            <div class="post-block">
                <div class="btm-wid">
                    <div class="thumbs">
                        <img src="<?php echo $post_image['url'] ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-6 bottom-right agileits-w3layouts">
            <div class="btm-right-grid agile">
                <h2 class="tph">
                    <?php the_title() ?>
                </h2>
                <p>
                    <?php the_field('post_content') ?>
                </p>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <?php
        }
    } 
?>

        <!-- //banner-bottom -->
        <!-- gallery -->
        <div class="gallery all_pad wthree w3-agile">
            <div class="container">
                <h3 class="title w3">
                    <?php the_field('treatment_page_section_title',210) ?>
                </h3>

                <div class="gallery-grids w3-agileits">
                    <div class="col-md-12 gallery-grids-left">
                        <?php
                        $args = array(
                        'post_type'      => 'treatments_gallary',
                        'posts_per_page' => 1000000,
                        'order'          => 'DESC'
                        );

                        $the_query = new WP_Query ($args);
                        if ( $the_query->have_posts() ) {
                            while ( $the_query->have_posts() ) {
                                $the_query->the_post(); 
                                $treatment_image = get_field('treatment_image');
                                ?>
                            <div class="col-sm-3 gallery-grids-right">
                                <div class="gallery-grid">
                                    <img src="<?php echo $treatment_image['url'] ?>" data-big-src="<?php echo $treatment_image['url'] ?>" alt=" " />
                                    <p style='opacity:0;display:none'>
                                        <?php the_field('treatment_description') ?>
                                    </p>
                                </div>
                            </div>
                            <?php
                                
                            }
                        } 
                    ?>
                                <div class="clearfix"> </div>
                    </div>

                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //gallery -->
        <?php get_footer(); ?>
