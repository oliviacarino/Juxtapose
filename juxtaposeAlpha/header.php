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
            <div class="container mx-auto px-4">
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
            <div class="mx-auto">    
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
            </div>
                <!-- Search -->
                <div>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>


    <!-- Category Nav -->
    <header class="page-title theme-bg-light">
        
        <nav class="navbar navbar-expand-lg navbar-light navbar-custom2" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="mx-auto pr-5 pt-3">
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
            </div>
        </nav>

    </header>

    <div class="main-wrapper">