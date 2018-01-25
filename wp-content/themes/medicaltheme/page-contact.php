<?php get_header(); ?>
<!-- banner -->
<div class="banner_w3ls page_head">

</div>
<!-- //banner -->
<div class="map all_pad">
    <div class="container">
        <h3 class="title agile">
            <?php the_field('contact_section1_title') ?>
        </h3>
        <?php the_field('our_location') ?>
        <div class="contact-grids w3layouts">
            <h3 class="title">
                <?php the_field('contact_section2_title') ?><span></span></h3>
            <div class="col-md-4 contact-grid agile text-center animated wow slideInLeft" data-wow-delay=".5s">
                <div class="contact-grid1 agileits-w3layouts">
                    <i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
                    <h4><?php the_field('address_block_title') ?></h4>
                    <p>
                        <?php the_field('building_number') ?><span><?php the_field('city') ?></span></p>
                </div>
            </div>
            <div class="col-md-4 contact-grid agileits text-center animated wow slideInUp" data-wow-delay=".5s">
                <div class="contact-grid2 w3">
                    <i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
                    <h4><?php the_field('call_us_block_title') ?></h4>
                    <p>
                        <?php the_field('phone1') ?><span><?php the_field('phone2') ?></span></p>
                </div>
            </div>
            <div class="col-md-4 contact-grid w3 text-center animated wow slideInRight" data-wow-delay=".5s">
                <div class="contact-grid3 w3l">
                    <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
                    <h4><?php the_field('email_block_title') ?></h4>
                    <p>
                        <?php 
                             $email1 = get_field('email1');
                             $email2 = get_field('email2')
                        ?>
                        <a href='<?php echo "mailto:".$email1 ?>'>
                            <?php the_field('email1') ?>
                        </a><span><a href='<?php echo "mailto:".$email2 ?>'><?php the_field('email2') ?></a></span></p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
