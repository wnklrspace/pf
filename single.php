<?php get_header() ?>

    <div class="container p-all">

        <?php if(has_post_thumbnail()):?>

            <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="">

        <?php endif;?>

        <h6>
            <?php the_field('time_to_read');?>
        </h6>

         <h1>
            <?php the_title();?>
        </h1>


        <?php get_template_part('includes/section', 'blogcontent');?>
        

    </div>

<?php get_footer() ?>