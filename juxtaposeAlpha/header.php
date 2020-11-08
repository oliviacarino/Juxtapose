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

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/ihm5weq.css"> 
    <link rel="stylesheet" href="https://use.typekit.net/ihm5weq.css">

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
                <!-- Search -->
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
        <!-- <nav class="navbar navbar-expand-lg navbar-light">
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
        </nav> -->

        <nav class="navbar navbar-expand-lg navbar-light navbar-custom2" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
            <?php
            wp_nav_menu( array(
            'theme_location'    => 'category',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
             ) );
            ?>
            </div>
        </nav>

    </header>

    <!-- <header class="page-title text-left theme-bg-light"> -->
        <!-- <h1 class="heading"><?php //the_title(); ?></h1> dynamically changes page title -->
    <!-- </header> -->

    <div class="main-wrapper">