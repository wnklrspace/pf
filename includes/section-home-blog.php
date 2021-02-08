

<div id="thoughts" class="wrapper">

    <div class="wrapper__inner m-l-3 p-all-1 m-b-0 p-r-2 blue-bg">

        <h6 class="f-white">
        02
        </h6>

        <h2 class="f-white">
            <?php the_field('blogcaption');?>
        </h2>

        <div class="h-blog">

            <div class="flex-row">

            <div class="spacer w-1-4">

            </div>

                <div class="blogitem w-2-3">

                    <?php
                    $blogposts = get_field('blogposts'); 
                    ?>
                    <?php if($blogposts):?>
                        <?php foreach($blogposts as $post):?>
                            <?php setup_postdata($post); ?>


                            <div class="m-b-1">
                                <a href="<?php the_permalink();?>">
                                    <div class="blogitem__infos">
                                        <div class="inner">
                                        <h6 class="f-white">
                                            <?php echo get_the_date('d.m.y');?>
                                        </h6>
                                        <h6 class="f-white m-l-1">
                                            <?php the_field('time_to_read');?>
                                        </h6>
                                        </div>
                                        <h6 class="f-white m-l-3">
                                            About: 
                                            <?php the_field('category');?>
                                        </h6>
                                    </div>

                                    <h3 class="f-white blogitem__label">
                                        <?php the_title();?>
                                    </h3>
                                </a>

                                <hr class="blogitem__seperator white-bg m-t-1">
                            </div>

                        <?php endforeach;?>
                    <?php endif;?>

                        
                    </div>

            </div>

        </div>
    </div>
</div>
