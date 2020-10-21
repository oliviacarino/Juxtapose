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
    <link rel="shortcut icon" href="/assets/images/logo.png">

    <!-- Load custom css, Bootstrap, and FontAwesome -->
    <?php
    wp_head();
    ?>

</head>

<body>

    <!-- OLD NAVBAR -->
    <!-- <header class="header text-center">

        <nav class="navbar navbar-expand-lg navbar-dark mt-4 fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-row pl-4">
                <div id="navigation" class="collapse navbar-collapse pl-4">
                    <a class="site-title mr-4 pt-lg-0 mb-0 justify-content-start" href="index.html"><img
                            class="mb-3 mx-auto logo" src="assets/images/logo.png" alt="logo"></a>

                    <ul class="ml-4 navbar-nav text-sm-center text-md-left pl-4 pb-4">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">
                                Home <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="page.html">
                                About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Donate
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="archive.html">
                                Subscribe
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn" href="contact.html">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                    <form class="form-inline ml-4 pb-3 mb-4">
                        <input class="form-control form-control-sm mr-sm-2" type="search" placeholder="Search"
                            aria-label="Search">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

    </header> -->

    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-dark">

            <!-- Replace with logo -->
            <a class="navbar-brand" href="#">Juxtapose</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <!-- Make the primary nav dynamic, i.e., change what pages you want listed/linked here -->
                <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul id="" class="navbar-nav mr-auto">%3$s</ul>'
                        )
                    );

                ?>

            
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Subscribe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Donate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>


    <!-- Category Nav -->
    <header class="page-title theme-bg-light text-center">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div id="navigation" class="justify-content-center collapse navbar-collapse flex-row">
                    <ul class="navbar-nav flex-row">
                        <li class="category-item nav-item active px-3">
                            <a class="nav-link" href="#"><span class="border-underline"><strong>News</strong></span></a>
                        </li>
                        <li class="category-item nav-item active px-3">
                            <a class="nav-link" href="#"><span
                                    class="border-underline"><strong>Sports</strong></span></a>
                        </li>
                        <li class="category-item nav-item active px-3">
                            <a class="nav-link" href="#"><span
                                    class="border-underline"><strong>Education</strong></span></a>
                        </li>
                        <li class="category-item nav-item active px-3">
                            <a class="nav-link" href="#"><span
                                    class="border-underline"><strong>Opinion</strong></span></a>
                        </li>
                        <li class="category-item nav-item active px-3">
                            <a class="nav-link" href="#"><span
                                    class="border-underline"><strong>E-Edition</strong></span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <header class="page-title text-left theme-bg-light">
            <h1 class="heading"><?php the_title(); ?></h1> <!-- dynamically changes page title -->
        </header>

        <div class="main-wrapper">