
    <?php if(have_posts() ): while( have_posts() ): the_post();?>
        <div class="item w-1-3">
            <h3>
                <?php the_title();?>
            </h3>

            <?php the_excerpt();?>

            <a href="<?php the_permalink();?>">Read More</a>
        </div>
    <?php endwhile; else: endif;?>