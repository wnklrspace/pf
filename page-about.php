<?php get_header() ?>
<?php get_template_part('includes/section', 'testimonial');
        $projects = get_field('project_relations');?>

    <div class="container m-b-2">

        <div class="container__inner">

            <div class="wrapper m-l-5 m-t-6 p-r-2 m-t-10_s p-r-5_s">

                    <h1 class="caption-bold m-b-2">
                        About me
                    </h1>

                <div class="row">
                    <div class="w-1-3"></div>
                    <div class="w-2-3">
                        <p class="mid-caption">
                            <?php the_field('introtext_head');?>
                        </p>
                    </div>
                </div>

                <div class="row m-t-2 m-b-1 no-p-xl p-r-5_s">
                

                    <div class="w-1-3 p-r-2">
                        <h2 class="m-b-1">    
                            Work experience
                        </h2>

                        <article class="m-b-1">

                            <p>
                            Self Employed, Stuttgart <br>
                            Freelancer <br>
                            Frontend Development, Web Design, <br> Graphic Design <br>
                            Winter 2019 - ongoing
                            </p>

                        </article>

                        <article class="m-b-1">

                            <p>
                            <a class="underline" href="/wnklr/projects/jobportal-gerstberger/" target="_blank" rel="noopener">Vitalcenter Gerstberger ↗</a> , Memmingen <br>
                            Working Student <br>
                            Web Development, Web Design <br>
                            Winter 2018 - Winter 2020
                            </p>

                        </article>

                        <article class="m-b-1">

                            <p>
                            Projektagentur, Ulm <br>
                            Apprenticeship <br>
                            Web Development, Web Design <br>
                            Fall 2018 - Spring 2020
                            </p>

                        </article>

                        <!-- <h2 class="m-b-1">    
                           Volunteering
                        </h2> -->

                    </div>
                    <div class="w-1-3 p-r-2">
                        <h2 class="m-b-1">    
                            Education
                        </h2>
                        <article class="m-b-1">

                            <p>
                            <a class="underline" href="https://www.hdm-stuttgart.de/" target="_blank" rel="noopener">Hochschule der Medien ↗</a>, Stuttgart <br>
                            Mobile Media B.Sc. <br>
                            Spring 2020 - ongoing 
                            </p>

                        </article>
                        <article class="m-b-1">

                            <p>
                            <a class="underline" href="https://www.fss-ulm.de/" target="_blank" rel="noopener">Ferdinand-von-Steinbeis-Schule ↗</a>, Ulm <br>
                            Vocational School for Media Design  <br>
                            Fall 2017 - Winter 2019 
                            </p>

                        </article>
                        <h2 class="m-b-1">    
                            Languages
                        </h2>
                        <article class="m-b-1">

                            <p>
                            German, native <br>
                            English, fluent 
                            </p>

                        </article>
                    </div>
                    <div class="w-1-3 p-r-2">

                        <h2 class="m-b-1">Tools that I visualize and prototype with</h2>
                    
                        <article>

                            <p class="m-b-1">
                                For Websites and digital products: <br>
                                Pen and Paper for structure, <br>
                                Adobe Xd <br>
                                InDesign, <br>
                                Photoshop, <br> 
                                Illustrator
                            </p>

                            <p>
                                For Videos and Animations: <br>
                                Premiere, <br>
                                After Effects
                            </p>
                        
                        </article>

                        <div class="space m-t-2"></div>

                        <h2 class="m-b-1">The way I talk to machines</h2>
                    
                        <article>

                            <p>
                            HTML, <br>
                            SCSS, SASS, CSS, <br>
                            Wordpress Development (PHP), <br>
                            Javascript (just getting started), <br>
                            PHP (just getting started, mostly WP) <br>

                            </p>
                        
                        </article>

                        <div class="space m-t-2"></div>

                        <h2 class="m-b-1">Tools for project- and timemanagement</h2>
                    
                        <article>

                            <p>
                            Notion, <br>
                            Todoist, <br>
                            Pomodoro-Technique
                            </p>
                        
                        </article>
                    
                    </div>


                </div>

                <div class="row">
                
                    <?php if($projects && get_field('show_related_projects')):?>
                        <?php foreach($projects as $post):?>
                            <?php setup_postdata($post);?>

                                <div class="item m-t-b-1 w-1-3">
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

        </div>      

    </div>

<?php get_footer() ?>