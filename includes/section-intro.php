<div class="wrapper">
    <div class="wrapper__inner m-l-5 m-t-6 m-b-0 m-t-10_s">

        <?php if(have_posts() ): while( have_posts() ): the_post();?>

            <?php the_content();?>

        <?php endwhile; else: endif;?>

            <!-- <div class="memojicontainer">
                <img src="/wnklr/wp-content/uploads/2020/06/me.png" class="memojicontainer__img" />
                <hr class="divider black-bg">
            </div> -->

            <div class="introduction m-t-2 m-r-2">
                <h6 class="m-b-1">
                    Introduction
                </h6>
                <h1 class="caption-bold">
                    Hi, I am Flo. 
                    I operate in the intersection of design and engineering. 
                    <a class="f-lightgrey caption-bold" href="wnklr/about">
                        more
                    </a>
                </h1>

                <!-- <div class="row m-t-b-1">
                    <a href="wnklr/about" class="btn black-bg f-white m-t-1">
                        More about me
                    </a>
                </div> -->
                <!-- <div class="pb">
                    <img src="/wnklr/wp-content/uploads/2020/07/pb.jpg" alt="" class="pb-img">
                </div> -->

            </div>
        </div>
</div>