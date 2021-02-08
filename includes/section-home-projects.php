<?php $projects = get_field('projects-home'); ?>
<div id="projects" class="wrapper">

    <div class="wrapper__inner m-l-5 m-t-3 m-b-2">

        <h6>
        01
        </h6>

        <h2>
            <?php the_field('caption');?>
        </h2>

        <hr class="black-bg m-t-1">

        <div class="h-projects">

            <div class="flex-row">

                <?php if($projects):?>
                    <?php foreach($projects as $post):?>

                        <?php setup_postdata($post);?>

                            <div class="item m-t-b-1 <?php the_field('homepicture_size');?>">
                                <a class="<?php if(!get_field('show_case_study')):?><?php echo "coming-soon"?><?php endif;?>"  href="<?php if(get_field('show_case_study')):?><?php the_permalink()?><?php else:?><?php echo "#"?><?php endif;?>">
                                    <div class="item__img">

                                        <?php if(!get_field('show_case_study')): ?>
                                            <p class="white-bg f-black">
                                                soon
                                            </p>
                                        <?php endif;?>

                                        <?php switch(get_field('mediatype')){
                                            case 'image':?>

                                            <img src="<?php the_field('mediafullwidth');?>">

                                            <?php break;?>

                                            <?php case 'video':?>
                                        
                                            <video muted autoplay loop>
                                                <source src="<?php the_field('mediafullwidth');?>">
                                            </video>

                                            <?php break;?>

                                            <?php default:?>
                                        
                                            <img src="/wnklr/wp-content/uploads/2020/09/horizontal.png">

                                            <?php break; }?> 
                                    </div>

                                    <div class="item__capholder">
                                        <h3 class="item__caption ">
                                            <?php echo the_title();?>
                                        </h3>
                                        <?php get_template_part('includes/info', 'svg'); ?>
                                    </div>

                                    <article>
                                        <h6 class="item__desc">
                                            Topics: <br> <?php the_field('topics_select');?>
                                        </h6>
                                        <h6 class="item__desc">
                                            <?php the_field('year_select'); ?>
                                        </h6>
                                    </article>
                                    <hr class="darkgrey-bg">
                                </a>
                            </div>

                        <?php wp_reset_postdata();?>
                    <?php endforeach;?>
                <?php endif;?>


                <div class="item m-t-b-1 w-1-3">
                    <a href="#contact">
                        <div class="item__img">

                            <video muted autoplay loop nocontrols>
                                <source src="/wp-content/uploads/2020/09/you.mp4">
                            </video>
                            
                        </div>
                        <div class="item__capholder">
                            <h3 class="item__caption ">
                                Your name?
                            </h3>
                            <?php get_template_part('includes/info', 'svg'); ?>
                        </div>
                        <article>
                            <h6 class="item__desc">
                                Topics: <br>
                                Whatever you need
                            </h6>
                            <h6 class="item__desc">
                                Maybe now? 
                            </h6>
                        </article>
                        <hr class="darkgrey-bg">
                    </a>
                </div>

            </div>



        </div>
    </div>
</div>