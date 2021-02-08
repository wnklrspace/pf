<?php $testimonials = get_field('testimonials');
      if($testimonials): ;?>
        <div class="testimonial sliding-in">

            <?php foreach($testimonials as $post):;?>
                <?php setup_postdata($post);?>

                    <?php if(get_field('project_link')):;?>

                        <a href="<?php the_field('project_link')?>">

                            <div class="testimonial__inner m-b-1r">

                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path d="M407,0H105C47.103,0,0,47.103,0,105v302c0,57.897,47.103,105,105,105h302c57.897,0,105-47.103,105-105V105
                                                    C512,47.103,464.897,0,407,0z M256,386c-18.631,0-36.558-2.476-53.333-7.037L142,410l8.976-53.905
                                                    C111.41,330.461,86,290.675,86,246c0-77.32,76.112-140,170-140s170,62.68,170,140S349.888,386,256,386z"/>
                                            </g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                    </svg>


                                    <div>

                                        <p><?php the_field('t_name'); ?></p>
                                        <p><?php the_field('t_text'); ?></p>

                                    </div>
                                    <?php if(get_field('profil_picture')):?>
                                        <img src="<?php the_field('profil_picture')?>" alt="">
                                    <?php endif;?>



                            </div>

                            <p class="m-b-1r testimonial__link">
                                show project
                            </p>

                        </a>

                    <?php else:;?>

                        <div class="testimonial__inner m-b-1r">

                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M407,0H105C47.103,0,0,47.103,0,105v302c0,57.897,47.103,105,105,105h302c57.897,0,105-47.103,105-105V105
                                            C512,47.103,464.897,0,407,0z M256,386c-18.631,0-36.558-2.476-53.333-7.037L142,410l8.976-53.905
                                            C111.41,330.461,86,290.675,86,246c0-77.32,76.112-140,170-140s170,62.68,170,140S349.888,386,256,386z"/>
                                    </g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                            </svg>


                            <div>

                                <p><?php the_field('t_name'); ?></p>
                                <p><?php the_field('t_text'); ?></p>

                            </div>

                            <?php if(get_field('profil_picture')):?>
                                <img src="<?php the_field('profil_picture')?>" alt="">
                            <?php endif;?>

                        </div>

                    <?php endif;?>

                <?php wp_reset_postdata();?>
            <?php endforeach;?>
        </div>
<?php endif;?>