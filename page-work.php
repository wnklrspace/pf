<?php
/* 
Template Name: Projects
*/
?>

<?php get_header() ?>

    <div class="container">

        <div class="container__inner">


            <div class="wrapper m-all m-l-5 m-t-10_s m-r-5_s">

                <h1 class="caption-bold m-b-2">
                    Projects
                </h1>

            <!-- <div class="row m-t-1 m-b-1">
                <div class="w-1-3"></div>
                <div class="w-2-3">
                    <p>
                        Here you'll find a selection of my finest work
                    </p>
                </div>
            </div> -->

            <div class="flex-row">
                
                <?php $countVar = 1; 
                $projects_p = get_field('projects-projectpage');?>

                    <?php if($projects_p):?>
                        <?php foreach($projects_p as $post):?>

                                <?php setup_postdata($post);?>

                                    <a href="<?php the_permalink();?>" class="item work-item w-1 p-b-1 p-t-1 p-t-3_s p-b-3_s">

                                        <div class="item__inner">
                                            <h5 style="font-weight: 100">
                                                <?php echo $countVar;?> /
                                            </h5>

                                            <h3>
                                                <?php the_title();?>
                                            </h3>
                                        </div>

                                        <div class="item__inner">
                                            <p class="font-size">
                                                <?php the_field('year_select');?>
                                            </p>
                                        </div>

                                        <div class="item__inner">
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.013 512.013" style="enable-background:new 0 0 512.013 512.013;" xml:space="preserve">
                                                <g>
                                                    <g>
                                                    <path d="M507.36,244.726l-160-160l-22.72,22.72l132.8,132.64H0v32h457.44L324.8,404.726l22.56,22.56l160-160
                                                                C513.564,261.046,513.564,250.967,507.36,244.726z"/>
                                                    </g>
                                                </g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                            </svg>
                                        </div>

                                        <div class="work-img w-1-3">
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

                                    </a>
                                    
                                    <div class="w-1">
                                        <hr class="black-bg">
                                    </div>

                                <?php $countVar++?>

                            <?php wp_reset_postdata();?>
                        <?php endforeach;?>
                    <?php endif;?>

                </div>

            </div>   
        </div> 
        

    </div>

<?php get_footer() ?>