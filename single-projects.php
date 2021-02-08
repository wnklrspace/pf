<?php get_header('project'); 
        $projects = get_field('project_relations'); ?>

    <div class="container project">

    <?php get_template_part('includes/section', 'testimonial');?>

        <div class="project__infos white-bg p-t-10_s p-t-4 p-l-5 p-r-2 p-r-5_s">

            <div class="row m-b-2">
            
                <div class="w-1-3 m-b-2">
                    <?php if(get_field('project_url')):?>
                        <p class="f-small">
                            <a class="f-small project__link" href="<?php the_field('project_url'); ?>" target="_blank" rel="noopener">launch project <i class="fas fa-long-arrow-alt-right"></i></a>
                        </p>
                    <?php endif;?>
                </div>

                <div class="w-2-3 d-flex column-flex_s">
                    <p class="f-small m-r-2 m-b-1">
                        Year: <?php the_field('year_select')?>
                    </p>
                    <p class="f-small m-r-2 m-b-1">
                        Topics: <?php the_field('topics_select')?>
                    </p>
                    <p class="f-small">
                        Client: <?php the_field('client_name');?>
                    </p>
                </div>

            </div>

            <div class="row">

                <div class="w-1-3 m-b-2">
                    <article>
                        <h2>
                            <?php the_field('description_title');?>
                        </h2>
                    </article>
                </div>

                <div class="w-2-3 m-b-2">
                    <article>
                        <p>
                            <?php the_field('description');?>
                        </p>
                    </article>
                </div>

            </div>

            <!-- Quickjumps -->
            <?php if(get_field('show_context') || get_field('show_approach') || get_field('show_outcome') || get_field('show_takeaways')):;?>
                <div class="row m-t-2">  

                    <div class="w-1-3 m-b-2">
                        <article>
                            <p class="f-small">
                                Quickjumps <i class="fas fa-long-arrow-alt-right"></i>
                            </p>
                        </article>
                    </div>

                    <div class="w-2-3">
                        <ul class="navigation flex-row">
                            <?php if(get_field('show_context')):?>
                                <li class="w-1-2 m-b-1">
                                    <a href="#context">
                                    <hr class="black-bg m-b-1">
                                        
                                        <p class="m-b-1r">
                                        <?php if(get_field('show_context')): ?> 01 <?php endif; ?>
                                        </p>
                                        <p>
                                            Context
                                        </p>

                                    </a>
                                </li>
                            <?php endif;?>
                            <?php if(get_field('show_approach')):?>
                                <li class="w-1-2 m-b-1">
                                    <a href="#approach">
                                    <hr class="black-bg m-b-1">
                                        
                                        <p class="m-b-1r">
                                            <?php if(get_field('show_context')): ?> 02 <?php else: ?> 01 <?php endif; ?>
                                        </p>
                                        <p>
                                            Approach 
                                        </p>

                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if(get_field('show_outcome')):?>
                                <li class="w-1-2 m-b-1">
                                    <a href="#outcome">
                                    <hr class="black-bg m-b-1">
                                        
                                        <p class="m-b-1r">
                                            <?php if(get_field('show_context') && get_field('show_approach')): ?> 03 
                                            <?php elseif(get_field('show_context') && !get_field('show_approach') || !get_field('show_context') && get_field('show_approach')): ?> 02 
                                            <?php else: ?> 01 <?php endif; ?>     
                                        </p>
                                        <p>
                                            Outcome
                                        </p>

                                    </a>
                                </li>
                            <?php endif;?>
                            <?php if(get_field('show_takeaways')):?>
                                <li class="w-1-2 m-b-1">
                                    <a href="#takeaways">
                                    <hr class="black-bg m-b-1">
                                        
                                        <p class="m-b-1r">
                                            <?php if(get_field('show_context') && get_field('show_approach') && get_field('show_outcome')): ?> 04
                                            <?php elseif(get_field('show_context') && get_field('show_approach') || get_field('show_context') && get_field('show_outcome') || get_field('show_approach') && get_field('show_outcome')): ?> 03
                                            <?php elseif(get_field('show_context') && !get_field('show_approach') && !get_field('show_outcome') || get_field('show_approach') && !get_field('show_context') && !get_field('show_outcome') || get_field('show_outcome') && !get_field('show_context') && !get_field('show_approach')): ?> 02
                                            <?php else: ?> 01 <?php endif; ?>   
                                        </p>
                                        <p>
                                            Takeaways
                                        </p>

                                    </a>
                                </li>
                            <?php endif;?>
                        </ul>
                    </div>

                </div>
            <?php endif;?>

        </div>

        <div class="project__insights white-bg">

            <div class="row m-b-1 p-t-1 p-b-1 p-l-5 p-r-2">
                <div class="w-1">
                    <hr class="grey-bg">
                </div>
            </div>

            <?php if(get_field('show_headerimage')): ?>
                <div class="row p-t-1 p-b-1 p-l-5 p-r-2">

                    <div class="w-1 m-b-2">
                        <img src="<?php the_field('headerimage'); ?>" alt="">
                    </div>

                </div>
            <?php endif;?>

            <?php if(get_field('show_colorpalette')):?>
                <div class="row m-b-2 p-t-1 p-b-1 p-l-5 p-r-2">
                
                    <div class="w-1-3"></div>

                    <div class="w-2-3">

                        <p class="<?php if(get_field('colors_description')):?>m-b-1<?php endif;?>">
                        Colors
                        </p>

                        <?php if(get_field('colors_description')):?>
                            <p> 
                                <?php the_field('colors_description')?>
                            </p>
                        <?php endif;?>

                    </div>                          
                
                </div>
            <?php endif;?>

            <?php if(get_field('show_colorpalette')):?>
                <div class="row m-b-1 p-t-1 p-b-1">
                                                        
                        <div style="background-color:<?php the_field('background_color');?>" class="w-1 p-2 p-l-5 p-l-5_s p-r-0_s">
                            
                            <div class="project__colorpalette">
                            
                                <?php if(get_field('color_1')):?>
                                    <div style="background-color: <?php the_field('color_1');?>" class="color color-<?php the_field('colors_sum')?>">
                                        
                                    </div>
                                <?php endif;?>

                                <?php if(get_field('color_2')):?>
                                    <div style="background-color: <?php the_field('color_2');?>" class="color color-<?php the_field('colors_sum')?>">
                                        
                                    </div>
                                <?php endif;?>

                                <?php if(get_field('color_3')):?>
                                    <div style="background-color: <?php the_field('color_3');?>" class="color color-<?php the_field('colors_sum')?>">
                                        
                                    </div>
                                <?php endif;?>

                                <?php if(get_field('color_4')):?>
                                    <div style="background-color: <?php the_field('color_4');?>" class="color color-<?php the_field('colors_sum')?>">
                                        
                                    </div>
                                <?php endif;?>

                                <?php if(get_field('color_5')):?>
                                    <div style="background-color: <?php the_field('color_5');?>" class="color color-<?php the_field('colors_sum')?>">
                                        
                                    </div>
                                <?php endif;?>

                                <?php if(get_field('color_6')):?>
                                    <div style="background-color: <?php the_field('color_6');?>" class="color color-<?php the_field('colors_sum')?>">
                        
                                    </div>
                                <?php endif;?>

                            </div>

                        </div>

                </div>
            <?php endif;?>

            <!-- Context -->
            
            <?php if(get_field('show_context')):?>
                <div class="row p-t-1 m-b-2 p-t-4 p-l-5 p-r-2 p-r-5_s" id="context">

                    <div class="w-1-3"></div>

                    <div class="w-2-3"> 
                        <p>
                        <span>
                            <?php if(get_field('show_context')): ?> 01 <?php endif; ?>
                        </span>    
                            the context
                        </p>
                        <p class="m-t-1">
                            <?php the_field('the_context'); ?>
                        </p>
                    </div>

                </div>

                <!-- Pictures Context -->
                <?php if(get_field('picture_context_1')):?>
                    <div class="row p-t-1 m-b-1 p-t-4 p-l-5 p-r-2">
                        <div class="w-1-3"></div>
                        <div class="w-2-3">
                            <?php if(get_field('picture_context_1')):?>
                                <img src="<?php the_field('picture_context_1'); ?>" alt="">
                            <?php endif;?>
                        </div>
                    </div>
                <?php endif;?>

                <div class="row m-b-1 p-t-4 p-l-5 p-r-2 p-r-0_s">
                    <div class="w-2-3">
                        <?php if(get_field('picture_context_2')):?>
                            <img src="<?php the_field('picture_context_2'); ?>" alt="">
                        <?php endif;?>
                    </div>
                    <div class="w-1-3">
                        <?php if(get_field('picture_context_3')):?>
                            <img src="<?php the_field('picture_context_3'); ?>" alt="">
                        <?php endif;?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- End Pictures Context -->

            <!-- Approach -->

            <?php if(get_field('show_approach')):;?>

                <div class="row p-t-1 m-b-1 p-t-4 p-l-5 p-r-2 p-r-5_s" id="approach">

                    <div class="w-2-3"> 
                        <p>
                        <span>
                            <?php if(get_field('show_context')): ?> 02 <?php else: ?> 01 <?php endif; ?>
                        </span>    
                            approach
                        </p>
                        <p class="m-t-1">
                            <?php the_field('the_approach'); ?>
                        </p>
                    </div>

                    <div class="w-1-3"></div>

                </div>

                <!-- Pictures Approach -->
                <?php if(get_field('picture_approach_1') || get_field('picture_approach_2')):?> 
                    <div class="row p-t-1 m-b-1">
                        <div class="w-1-3 flex-end">
                            <?php if(get_field('picture_approach_1')):?>        
                                <img src="<?php the_field('picture_approach_1'); ?>" alt="">  
                            <?php endif;?>
                        </div>
                        <div class="w-2-3">
                            <?php if(get_field('picture_approach_2')):?> 
                                <img src="<?php the_field('picture_approach_2'); ?>" alt="">
                            <?php endif;?>
                        </div>
                    </div>
                <?php endif;?>

                <div class="row">
                    <div class="w-1">
                        <img src="<?php the_field('picture_approach_3'); ?>" alt="">
                    </div>
                </div>
            
            <?php endif;?>

            <!-- End Pictures Approach -->

            <!-- Outcome -->

            <?php if(get_field('show_outcome')):;?>

                <div class="row p-t-1 m-b-2 p-t-1 p-b-1 p-l-5 p-r-2 p-r-5_s" id="outcome">

                    <div class="w-1-3">
                    </div>

                    <div class="w-2-3"> 
                        <p>
                        <span>
                            <?php if(get_field('show_context') && get_field('show_approach')): ?> 03 
                            <?php elseif(get_field('show_context') && !get_field('show_approach') || !get_field('show_context') && get_field('show_approach')): ?> 02 
                            <?php else: ?> 01 <?php endif; ?>  
                        </span>    
                            the outcome
                        </p>
                        <p class="m-t-1">
                            <?php the_field('the_outcome'); ?>
                        </p>
                    </div>

                </div>

                <div class="row m-b-1">
                
                    <?php if(get_field('picture_outcome_1')):;?>
                        <div class="w-1-3">
                            <?php if(get_field('picture_outcome_1')):;?>
                                <img src="<?php the_field('picture_outcome_1'); ?>" alt="">
                            <?php endif;?>
                        </div>
                    <?php endif;?>

                    <?php if(get_field('picture_outcome_2')):;?>
                        <div class="w-2-3">
                            <?php if(get_field('picture_outcome_2')):;?>
                                <img src="<?php the_field('picture_outcome_2'); ?>" alt="">
                            <?php endif;?>
                        </div>
                    <?php endif;?>
                
                </div>

                <div class="row m-b-2">
                
                    <?php if(get_field('picture_outcome_3')):;?>
                        <div class="w-1">
                            <?php if(get_field('picture_outcome_3')):;?>
                                <img src="<?php the_field('picture_outcome_3'); ?>" alt="">
                            <?php endif;?>
                        </div>
                    <?php endif;?>
                
                </div>

            <?php endif;?>

            <!-- Takeaways -->

            <?php if(get_field('show_takeaways')):?>

                <div class="row p-2 p-t-1 p-b-1 p-l-5 p-r-2 p-r-5_s" style="background-color:<?php the_field('background_color');?>" id="takeaways">

                    <div class="w-1-3">
                    
                    </div>
                
                    <div class="w-1-3">
                        <p style="color: <?php the_field('font_color');?>" class="m-b-1">
                            <span>
                            <?php if(get_field('show_context') && get_field('show_approach') && get_field('show_outcome')): ?> 04
                            <?php elseif(get_field('show_context') && get_field('show_approach') || get_field('show_context') && get_field('show_outcome') || get_field('show_approach') && get_field('show_outcome')): ?> 03
                            <?php elseif(get_field('show_context') && !get_field('show_approach') && !get_field('show_outcome') || get_field('show_approach') && !get_field('show_context') && !get_field('show_outcome') || get_field('show_outcome') && !get_field('show_context') && !get_field('show_approach')): ?> 02
                            <?php else: ?> 01 <?php endif; ?> 
                            </span>    
                            takeaways
                        </p>
                    </div>  
                    
                    <div class="w-1-3">
                        <article style="color: <?php the_field('font_color');?>" class="takeaways__list">
                            <?php the_field('the_takeaways')?>
                        </article>
                    </div>
                
                </div>

            <?php endif;?>

        </div>

        <?php if(get_field('show_related_projects')):?>

            <div class="project__next-case white-bg p-t-1 p-b-1 p-l-5 p-r-2 p-r-5_s">

                <div class="row">
                
                    <h2>
                        related projects
                    </h2>
                
                </div>
            
                <div class="row">
                
                    <?php if($projects):?>
                        <?php foreach($projects as $post):?>
                            <?php setup_postdata($post);?>

                                <div class="item m-t-b-1 m-b-2 w-1-3">
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
                
                </div>
            
            </div>

        <?php endif;?>


    </div>


    <?php get_template_part('includes/project', 'next_case');?>

<?php get_footer('project') ?>