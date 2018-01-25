<div class="contact_w3agile">
    <div class="container">
        <h2 class="title w3">
            <?php if(get_locale()=='en_US'){ ?>
            <?php the_field('contact_form_title',19);}
            else{
            the_field('contact_form_title',347);
            }
            ?>
        </h2>
        <div class="strip"></div>
        <ul>
            <li><a class="fb-icon1" href="<?php the_field('facebook', 19) ?>" target="_blank"></a></li>
            <li><a class="fb-icon2" href="<?php the_field('pinterest', 19) ?>" target="_blank"></a></li>
            <li><a class="fb-icon3" href="<?php the_field('vimeo', 19) ?>" target="_blank"></a></li>
            <li><a class="fb-icon4" href="<?php the_field('twitter', 19) ?>" target="_blank"></a></li>
            <li><a class="fb-icon5" href="<?php the_field('linkedin', 19) ?>" target="_blank"></a></li>
        </ul>
        <?php if(get_locale()=='en_US'){ ?>
        <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form en"]'); }
        else{
            echo do_shortcode('[contact-form-7 id="444" title="contact form zh"]');
        }
        ?>
        <p class="agileinfo">&copy;
            <?php echo date('Y'); ?>
            <?php bloginfo('name') ?> .
            <?php if(get_locale()=='en_US'){ ?>
            <?php the_field('copyrights',19);}
            else{
            the_field('copyrights',347);
            } ?> <a href="http://w3layouts.com">W3layouts</a></p>
    </div>
</div>

<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

<?php wp_footer(); ?>

</body>

</html>
