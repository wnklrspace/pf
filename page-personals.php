<?php get_header() ?>

    <div class="container">

        <div class="wrapper p-all">

            <div class="wrapper__inner m-all m-r-0 m-t-2 m-b-2 p-t-b-2">

            <h1 class="caption-bold">
            Personals
            </h1>

            <hr class="black-bg m-t-b-1">
        
                <?php $newPersonal = array( 'post_type' => 'Personal', 'posts_per_page' => 30);
                $newPersonalLoop = new WP_Query( $newPersonal );
                while ( $newPersonalLoop->have_posts() ) : $newPersonalLoop->the_post(); ?>

                        <p>
                            Hi!
                        </p>

                <?php endwhile;?>

            </div>

        </div>        

    </div>

<?php get_footer() ?>