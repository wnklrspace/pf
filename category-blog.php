<?php get_header() ?>

    <div class="container">

    This is the category blog template

        <?php previous_posts_link(); ?>
        <?php next_posts_link(); ?>

        <?php get_template_part('includes/section', 'archive');?>
        

    </div>

<?php get_footer() ?>