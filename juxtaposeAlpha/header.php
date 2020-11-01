<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <title>JuxtaposeAlpha</title> -->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="Olivia Carino">
    <!-- <link rel="shortcut icon" href="/assets/images/logo.png"> -->

    <!-- Load custom css, Bootstrap, and FontAwesome -->
    <?php
    wp_head();
    ?>

</head>

<body>

    <header>
        <!-- Bootstrap Navwalker for Primary Nav -->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Need to fix uploading images to WP but using static logo for now -->
                <!-- <svg class="svg-style" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="202.003"
                    height="55.59" viewBox="0 0 202.003 55.59">
                    <defs>
                        <clipPath id="clip-path">
                            <rect id="Rectangle_874" data-name="Rectangle 874" width="202.003" height="55.59"
                                fill="none" />
                        </clipPath>
                    </defs>
                    <g id="Artwork_14" data-name="Artwork 14" transform="translate(101.002 27.795)">
                        <g id="Group_84" data-name="Group 84" transform="translate(-101.002 -27.795)"
                            clip-path="url(#clip-path)">
                            <path id="Path_692" data-name="Path 692"
                                d="M0,51.027a2.5,2.5,0,0,1,2.5-2.762A2.367,2.367,0,0,1,5,50.632c0,1.841-1.184,1.841-1.184,2.893S5,54.841,6.316,54.841a2.762,2.762,0,0,0,2.893-2.893V18.412c0-1.578,0-2.1-.526-2.1h-2.5c-.395,0-.395,0-.395-.263s.132-.263.395-.263h6.707c.395,0,.395.132.395.263V46.95c0,4.866-3.025,8.548-7.365,8.548S0,53.657,0,51.027m11.31-45.5a2.63,2.63,0,0,1-2.63-2.762,2.633,2.633,0,1,1,5.261,0,2.63,2.63,0,0,1-2.63,2.762"
                                transform="translate(-0.003 0)" fill="#b8cdea" />
                            <path id="Path_693" data-name="Path 693"
                                d="M40.755,35.7H32.6c-.395,0-.526-.132-.526-.263V33.205h-.132c-1.052,1.578-2.762,3.156-6.444,3.156s-8.943-2.1-8.943-8.811V14.662c0-1.71,0-2.236-.526-2.236H13.795c-.395,0-.395,0-.395-.263s.132-.263.395-.263H22.08c.395,0,.395.132.395.263V30.969c0,4.208,2.762,4.734,4.34,4.734a5.129,5.129,0,0,0,5-4.6V14.662c0-1.71,0-2.236-.526-2.236h-2.1c-.395,0-.395,0-.395-.263s.132-.263.395-.263h8.285c.395,0,.395.132.395.263V32.942c0,1.578,0,2.1.526,2.1h2.367c.395,0,.395,0,.395.263s-.132.263-.395.263"
                                transform="translate(4.223 3.75)" fill="#fff" />
                            <path id="Path_694" data-name="Path 694"
                                d="M58.115,12.395c-1.447,0-2.236.789-4.208,3.288l-3.945,5.392a.6.6,0,0,0,0,.658l7.365,11.179c1.184,1.973,1.447,2.1,1.973,2.1h.395c.395,0,.526,0,.526.263s-.132.263-.526.263H49.435c-.395,0-.526,0-.526-.263s.132-.263.526-.263H50.75c.658,0,.789-.526-.263-2.236l-5.129-7.628a81.009,81.009,0,0,0-5,7.233c-.789,1.578-.395,2.63,1.184,2.63h.526c.395,0,.526,0,.526.263s-.132.263-.526.263H35.495c-.395,0-.395,0-.395-.263s.132-.263.395-.263S37.73,34.226,39.7,31.6l5-6.707c.263-.395.263-.526,0-.789L38.388,14.63c-1.184-1.841-1.447-2.1-1.973-2.1h-.526c-.395,0-.395,0-.395-.263s.132-.263.395-.263H46.41c.395,0,.526,0,.526.263s-.132.263-.526.263H45.095c-.658,0-.921.526.263,2.236l4.077,6.181a63.652,63.652,0,0,0,3.814-5.787c.921-1.578.526-2.63-1.052-2.63h-.526c-.395,0-.395,0-.395-.263s.132-.263.395-.263h6.444c.395,0,.526,0,.526.263s-.132.263-.526.263"
                                transform="translate(11.061 3.782)" fill="#fff" />
                            <path id="Path_695" data-name="Path 695"
                                d="M57.762,32.449V15.221c0-.132-.132-.395-.526-.395h-1.71c-.395,0-.526-.132-.526-.395s.132-.395.526-.395h1.71c.395,0,.526-.132.526-.395v-5a.789.789,0,0,1,.395-.789A10.521,10.521,0,0,0,61.05,5.095a.526.526,0,0,1,.526-.395.349.349,0,0,1,.395.395v8.548c0,.132.132.395.526.395H66.7c.395,0,.526.132.526.395s-.132.395-.526.395H62.5c-.395,0-.526.263-.526.395v19.2c0,2.367.395,3.551,2.236,3.551S67.1,36.658,67.1,34.29s0-.789.395-.789.395.132.395.526c0,3.156-1.578,4.6-4.471,4.6s-5.655-2.762-5.655-6.181"
                                transform="translate(17.332 1.481)" fill="#b8cdea" />
                            <path id="Path_696" data-name="Path 696"
                                d="M87.61,34.152a4.34,4.34,0,0,1-4.34,2.367,3.419,3.419,0,0,1-3.682-3.288h-.132a6.839,6.839,0,0,1-6.313,3.288c-4.734,0-6.839-2.893-6.839-6.05a5.655,5.655,0,0,1,4.734-6.05l5.524-1.578c2.1-.789,3.025-1.052,3.025-2.367V17.187c0-4.6-1.973-5.261-4.34-5.261S71.171,13.11,71.171,13.9s1.447,1.184,1.447,3.025a2.367,2.367,0,0,1-2.5,2.367,2.5,2.5,0,0,1-2.5-2.63c0-3.156,4.077-5.261,7.5-5.261s8.68,2.63,8.68,7.891v14.6c0,.921.263,1.71,1.184,1.71a2.5,2.5,0,0,0,1.973-1.578c.132-.263.263-.395.395-.263s.263.132.132.395M79.456,31.39V22.316c-5.392,2.1-8.022,2.367-8.417,6.97a25.512,25.512,0,0,0,0,3.682c.132,1.315.526,3.025,3.156,3.025a5.392,5.392,0,0,0,5.26-4.6"
                                transform="translate(20.888 3.592)" fill="#b8cdea" />
                            <path id="Path_697" data-name="Path 697"
                                d="M96.877,36.489a6.576,6.576,0,0,1-6.05-3.288h0V49.246c0,1.578,0,2.236.526,2.236h3.025c.395,0,.395,0,.395.263s-.132.263-.395.263H83.595c-.395,0-.395,0-.395-.263s.132-.263.395-.263h2.5c.395,0,.526-.658.526-2.236V14.789c0-1.578,0-2.1-.526-2.1h-2.5c-.395,0-.395,0-.395-.263s.132-.263.395-.263H90.17c.395,0,.395.132.395.263v2.367h.263a6.707,6.707,0,0,1,6.05-3.288c5.261,0,10.258,4.34,10.258,12.625s-5,12.494-10.258,12.494m5-17.228c-.395-4.866-1.447-7.365-5.524-7.365a5.655,5.655,0,0,0-5.524,4.6v14.6a5.655,5.655,0,0,0,5.524,4.734c4.077,0,5.129-2.63,5.524-7.365a55.633,55.633,0,0,0,0-9.206"
                                transform="translate(26.219 3.623)" fill="#b8cdea" />
                            <path id="Path_698" data-name="Path 698"
                                d="M115.41,36.519c-6.97,0-11.31-5.655-11.31-12.494S108.177,11.4,115.41,11.4s11.31,5.655,11.31,12.494-4.077,12.625-11.31,12.625M121.2,18.765c-.395-3.288-1.184-6.839-5.918-6.839s-5.524,3.419-5.787,6.839a52.737,52.737,0,0,0,0,10.389c.395,3.288,1.184,6.839,5.918,6.839s5.524-3.419,5.787-6.839a52.736,52.736,0,0,0,0-10.39"
                                transform="translate(32.805 3.592)" fill="#b8cdea" />
                            <path id="Path_699" data-name="Path 699"
                                d="M131.7,36.552a14.729,14.729,0,0,1-5.392-.921c-.658-.263-1.447-.526-1.447,0h0q0,.526-.395.526c-.263,0-.263-.132-.263-.526V27.477c0-.395,0-.526.263-.526s.395.132.395.526v.789c0,5.129,3.419,7.759,6.707,7.759s5-1.71,5-4.077c0-6.97-12.231-5.524-12.231-13.94A6.576,6.576,0,0,1,131.17,11.3a9.863,9.863,0,0,1,4.077.921c.658.263,1.447.658,1.447,0h0c0-.395.132-.395.395-.395s.263.132.263.395v7.5c0,.395-.132.395-.263.395a.42.42,0,0,1-.395-.395v-.526c0-4.6-2.63-7.233-5.655-7.233a3.551,3.551,0,0,0-3.814,3.682c0,6.97,12.362,5.524,12.362,13.94,0,3.682-3.156,6.97-7.759,6.97"
                                transform="translate(39.139 3.56)" fill="#b8cdea" />
                            <path id="Path_700" data-name="Path 700"
                                d="M138.4,24.025c0-6.444,3.025-12.625,10.258-12.625,5.129,0,9.469,3.288,9.469,8.68,0,1.71-.526,2.236-1.578,2.236H144.055c-.132,0-.395,0-.395.395a51.948,51.948,0,0,0,.263,6.707c.395,3.156,1.71,6.576,6.181,6.576s7.5-3.156,7.5-8.417c0-.658,0-.921.526-.921s.395.263.395.658c0,4.077-2.1,9.337-8.811,9.337s-11.179-5.392-11.179-12.494m10.126-12.1c-3.551,0-4.471,3.156-4.866,7.1,0,.789-.132,1.578-.132,2.1s.132.395.395.395h8.811a.4.4,0,0,0,.395-.395,25.91,25.91,0,0,0-.395-5c-.526-2.367-1.71-4.208-4.208-4.208"
                                transform="translate(43.614 3.592)" fill="#b8cdea" />
                        </g>
                    </g>
                </svg> -->

                <!-- Custom Logo from Upload -->
                <?php
                if(function_exists('the_custom_logo')){
                    the_custom_logo();
                }
                ?>
               

                <!-- <a class="navbar-brand" href="#">Juxtapose</a> -->

                <?php
            wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>


    <!-- Still need to apply Navwalker to this somehow while keeping styling -->
    <!-- Category Nav -->
    <header class="page-title theme-bg-light text-center">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div id="navigation" class="justify-content-center collapse navbar-collapse flex-row">
                <ul class="navbar-nav flex-row">
                    <li class="category-item nav-item active px-3">
                        <a class="nav-link" href="#"><span class="border-underline"><strong>News</strong></span></a>
                    </li>
                    <li class="category-item nav-item active px-3">
                        <a class="nav-link" href="#"><span class="border-underline"><strong>Sports</strong></span></a>
                    </li>
                    <li class="category-item nav-item active px-3">
                        <a class="nav-link" href="#"><span
                                class="border-underline"><strong>Education</strong></span></a>
                    </li>
                    <li class="category-item nav-item active px-3">
                        <a class="nav-link" href="#"><span class="border-underline"><strong>Opinion</strong></span></a>
                    </li>
                    <li class="category-item nav-item active px-3">
                        <a class="nav-link" href="#"><span
                                class="border-underline"><strong>E-Edition</strong></span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- <header class="page-title text-left theme-bg-light"> -->
        <!-- <h1 class="heading"><?php //the_title(); ?></h1> dynamically changes page title -->
    <!-- </header> -->

    <div class="main-wrapper">