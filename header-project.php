<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" description="Florian Winkler, Freelancer, Graphic Designer in Stuttgart, Germany">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@200;300;400&display=swap" rel="stylesheet">
    <title>Florian Winkler</title>

    <?php wp_head();
          $projects_p = get_field('projects-projectpage');?>

</head>
<body>
    
    <header class="header">
        <div class="header__inside">
            <div class="header__about">
                <a href="https://wnklr.art" class="logolink">
                    <!-- <svg version="1.1" class="header__logo"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 600 300"
                        style="enable-background:new 0 0 600 300;" xml:space="preserve">
                            <style type="text/css">
                            .st0{fill:#fff;}
                            </style>
                            <rect y="220" class="st0" width="300" height="80"/>
                            <rect class="st0" width="600" height="80"/>
                        <rect class="st0" width="80" height="300"/>
                    </svg> -->

                    <h1 class="header__caption">
                        F
                    </h1>
                </a>
            </div>

            <div class="sidebar"> 
                <a href="#" class="sidebar__link f-black l-s">flo@wnklr.art</a>
            </div>

            <div class="b-arrow">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="b-arrow__cir" fill="black" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path fill-rule="evenodd" d="M4.646 8.354a.5.5 0 0 0 .708 0L8 5.707l2.646 2.647a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 0 0 0 .708z"/>
                    <path fill-rule="evenodd" d="M8 11.5a.5.5 0 0 0 .5-.5V6a.5.5 0 0 0-1 0v5a.5.5 0 0 0 .5.5z"/>
                </svg>
            </div>

            <div class="burger">
                <hr class="burger__line b1">
                <hr class="burger__line b2">
            </div>

            <div class="nav">
                <div class="nav__inner">

                    <div class="nav__right">

                            <?php get_template_part('includes/nav', 'current');?>

                        <ul class="nav__social">
                            <li class="nav__socialitem">
                                <a href="#" class="nav__sociallink">Instagram</a>
                            </li>
                            <li class="nav__socialitem">
                                <a href="#" class="nav__sociallink">Behance</a>
                            </li>
                            <li class="nav__socialitem">
                                <a href="#" class="nav__sociallink">flo@wnklr.art</a>
                            </li>
                        </ul>
                    </div>

                    <div class="nav__left">
                        <?php
                        wp_nav_menu(

                            array(

                                'theme_location' => 'top-menu', 
                                'menu_class' => 'top-bar',

                            )

                        );
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </header>

