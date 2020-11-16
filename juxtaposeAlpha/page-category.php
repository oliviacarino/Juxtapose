<?php 
    /* Template Name: Category Template */ 
    get_header();
?>

<article class="content mt-0 px-3 mx-1 p-md-4"> 
    <h1 class="text-center pb-2"><?php wp_title(); ?></h1>
            <!-- Container 1 -->
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="shadow-sm card mb-3">
                        <h4 class="card-header text-center">Top Story</h4>
                            
                            <?php
                            // the query
                            $the_query = new WP_Query(array(
                                'category_name' => 'sports',
                                'post_status' => 'publish',
                                'posts_per_page' => 3
                            ));
                            ?>

                            <?php if ($the_query->have_posts()) : ?>
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    
                                    <div class="card-body">
                                        <div class="latest_news_cont">
                                            <a href="<?php the_permalink() ?>">
                                            </a>

                                            <a href="<?php the_permalink() ?>">
                                            <h5>
                                                <?php the_title(); ?>
                                            </h5>
                                            </a>
                                            <?php the_excerpt(); ?>
                                            <!-- <?php //the_date(); ?> -->
                                            <!-- <p><a href="<?php the_permalink() ?>" class="readmore_news">Read more ></a></p> -->
                                            <?php echo get_the_date( 'F j, Y' ); ?>
                                        </div>
                                    </div>
 
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>

                            <?php else : ?>
                                <p><?php __('No News'); ?></p>
                            <?php endif; ?>

                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card text-left shadow-sm mb-4">

                            <?php
                            // the query
                            $the_query = new WP_Query(array(
                                'category_name' => 'promo-stories',
                                'post_status' => 'publish',
                                'posts_per_page' => 1
                            ));
                            ?>

                            <?php if ($the_query->have_posts()) : ?>
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    
                                    <div class="card-body">
                                        <div class="latest_news_cont">
                                            <!-- <a href="<?php the_permalink() ?>"> -->
                                            <div class="mb-2">
                                            <?php the_post_thumbnail(array(350, 200)); ?>
                                            </div>
                                            <!-- </a> -->

                                            <a href="<?php the_permalink() ?>">
                                            <h4>
                                                <?php the_title(); ?>
                                            </h4>
                                            </a>
                                            <?php the_excerpt(); ?>
                                            <div class="pt-5">
                                            <?php echo get_the_date( 'F j, Y' ); ?>
                                            </div>
                                        </div>
                                       
                                    </div>
 
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>

                            <?php else : ?>
                                <p><?php __('No News'); ?></p>
                            <?php endif; ?>    

                        </div>
                        
                        

                    </div>
                    <div class="col-4">
                          <div class="card mb-4 shadow-md pb-4 card-height">
                            <div class="ad-card-body">
                                <h5 class="card-title text-center">Ad Space</h5>
                            </div>
                        </div>
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Weekly Newsltter</h5>
                                    <p>Sign up for the newsletter and get the week's top stories in your inbox. </p>
                                    <a href="#" class="btn btn-primary">Sign Up</a>
                            </div>
                        </div>
                      
                     
                 
            </div>
                                
                            </div>
                       
                 
                <div class="row">
                    <div class="col-4">
                        <div class="card text-left shadow-sm mb-4">

                        <?php
                            // the query
                            $the_query = new WP_Query(array(
                                'category_name' => 'promo-column',
                                'post_status' => 'publish',
                                'posts_per_page' => 1
                            ));
                            ?>

                            <?php if ($the_query->have_posts()) : ?>
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    
                                    <div class="card-body">
                                        <div class="latest_news_cont">
                                            <!-- <a href="<?php the_permalink() ?>"> -->
                                            <div class="mb-2">
                                                <div class="thumbnail-size2">
                                                    <?php the_post_thumbnail('medium'); ?>
                                                </div>
                                            </div>
                                            <!-- </a> -->

                                            <a href="<?php the_permalink() ?>">
                                            <h4>
                                                <?php the_title(); ?>
                                            </h4>
                                            </a>
                                            <?php the_excerpt(); ?>
                                            <div class="pt-5">
                                            <?php echo get_the_date( 'F j, Y' ); ?>
                                            </div>
                                        </div>
                                       
                                    </div>
 
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>

                            <?php else : ?>
                                <p><?php __('No News'); ?></p>
                            <?php endif; ?>  

                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card text-left shadow-sm mb-4">

                        <?php
                            // the query
                            $the_query = new WP_Query(array(
                                'category_name' => 'promo-stories2',
                                'post_status' => 'publish',
                                'posts_per_page' => 1
                            ));
                            ?>

                            <?php if ($the_query->have_posts()) : ?>
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    
                                    <div class="card-body">
                                        <div class="latest_news_cont">
                                            <!-- <a href="<?php the_permalink() ?>"> -->
                                            <div class="mb-2">
                                            <?php the_post_thumbnail('medium'); ?>
                                            </div>
                                            <!-- </a> -->

                                            <a href="<?php the_permalink() ?>">
                                            <h4>
                                                <?php the_title(); ?>
                                            </h4>
                                            </a>
                                            <?php the_excerpt(); ?>
                                            <div class="pt-5">
                                            <?php echo get_the_date( 'F j, Y' ); ?>
                                            </div>
                                        </div>
                                       
                                    </div>
 
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>

                            <?php else : ?>
                                <p><?php __('No News'); ?></p>
                            <?php endif; ?>           
                            
                        </div>
                    </div>

                    <div class="col-4">
                    <div class="card mb-3 shadow-sm">
                        <div class="card-body">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h5 class="card-title text-center mb-4">Where do you get your news?</h5>
                                </div>
                                <div class="panel-body">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                    Internet
                                                </label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                    Television
                                                </label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                    Newspaper
                                                </label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                    Other
                                                </label>
                                            </div>
                                        </li>
                                    
                                    </ul>
                                </div>
                                <div class="panel-footer text-center">
                                    <button type="button" class="btn btn-primary btn-block btn-sm">
                                        Vote</button>
                                    <a href="#" class="small">View Result</a></div>
                                </div>
                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Container for Ad Space -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card text-center shadow-sm py-3">
                            <div class="card-body">
                                <h5 class="card-title">Ad Space</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Third Container -->
            <div class="container">
                <div class="row mt-4">

                    <!-- Headline 1 Div -->
                    <div class="col-4">
                        <div class="card text-left shadow-sm">

                            <img class="card-img-top"
                                src="wp-content/themes/juxtaposeAlpha/assets/images/run.jpg"
                                alt="Card image cap">
                
                            <?php
                            // the query
                            $the_query = new WP_Query(array(
                                'category_name' => 'sports',
                                'post_status' => 'publish',
                                'posts_per_page' => 1,
                            ));
                            ?>

                            <?php if ($the_query->have_posts()) : ?>
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    
                                    <div class="card-body pb-0">
                                    <div class="latest_news_cont">
                                        <a href="<?php the_permalink() ?>">
                                        <?php the_post_thumbnail(); ?>
                                        </a>

                                        <a href="<?php the_permalink() ?>">
                                        <h5>
                                            <?php the_title(); ?>
                                        </h5>
                                        </a>
                                        <?php the_excerpt(); ?>
                                        <!-- <p><a href="<?php the_permalink() ?>" class="readmore_news">Read more ></a></p> -->
                                        <div class="mb-1 pb-2">    
                                            <?php echo get_the_date( 'F j, Y' ); ?>
                                        </div>
                                    </div>
                                    </div>
 
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>

                            <?php else : ?>
                                <p><?php __('No News'); ?></p>
                            <?php endif; ?>

                        </div>
                    </div>

                    <!-- Trending Stories Div -->
                    <div class="col-4">
                        <div class="card mb-2 shadow-sm">
                            <h5 class="card-title card-header mb-2 pt-3 text-center sabon-font">Trending Stories</h5>
                            
                            <?php
                            // the query
                            $the_query = new WP_Query(array(
                                'category_name' => 'sports',
                                'post_status' => 'publish',
                                'posts_per_page' => 5,
                            ));
                            ?>

                            <?php if ($the_query->have_posts()) : ?>
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    
                                    <div class="card-body">
                                        <div class="latest_news_cont">
                                            <a href="<?php the_permalink() ?>">
                                            <h5>
                                                <?php the_title(); ?>
                                            </h5>
                                            </a>
                                            <?php the_excerpt(); ?>
                                            <?php echo get_the_date( 'F j, Y' ); ?>
                                        </div>
                                    </div>
 
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>

                            <?php else : ?>
                                <p><?php __('No News'); ?></p>
                            <?php endif; ?>

                        </div>
                    </div>

                    <!-- Headline 2 Div -->
                    <div class="col-4">
                    <div class="card text-left shadow-sm">
                        <img class="card-img-top"
                        src="wp-content/themes/juxtaposeAlpha/assets/images/sports.jpg"
                        alt="Card image cap">
                
                            <?php
                            // the query
                            $the_query = new WP_Query(array(
                                'category_name' => 'sports',
                                'post_status' => 'publish',
                                'posts_per_page' => 1,
                            ));
                            ?>

                            <?php if ($the_query->have_posts()) : ?>
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                                    <div class="card-body pb-0">
                                    <div class="latest_news_cont">
                                    <h5>
                                    <a href="<?php the_permalink() ?>">
                                        <?php the_title(); ?> </a>
                                    </h5>
                                        <a href="<?php the_permalink() ?>">
                                        <?php the_post_thumbnail(); ?>
                                        </a>

                                        <a href="<?php the_permalink() ?>">
                            
                                        </a>
                                        <?php the_excerpt(); ?>
                                        <!-- <p><a href="<?php the_permalink() ?>" class="readmore_news">Read more ></a></p> -->
                                        <div class="mb-1 pb-2">
                                            <?php echo get_the_date( 'F j, Y' ); ?>
                                        </div>
                                    </div>
                                    </div>
 
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>

                            <?php else : ?>
                                <p><?php __('No News'); ?></p>
                            <?php endif; ?>

                        </div>
                    </div>

                    
                </div>
            </div>
        </article>


<?php get_footer(); ?>
