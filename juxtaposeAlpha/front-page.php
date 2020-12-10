<?php
get_header();
?>
        <article class="content mt-0 px-3 mx-1 p-md-4">

            <!-- Container -->
            <div class="container">

                <!-- Row 1 -->
                <div class="row">
                    <div class="col-3">
                        <div class="shadow-sm card">
                        <h4 class="card-header text-center">Top Stories</h4>
                            
                            <?php
                            // the query
                            $the_query = new WP_Query(array(
                                'category_name' => 'top-posts',
                                'post_status' => 'publish',
                                'posts_per_page' => 3
                            ));
                            ?>

                            <?php if ($the_query->have_posts()) : ?>
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    
                                    <div class="card-body">
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
                    <div class="col-6">
                        <div class="card text-left shadow-sm">

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
                                            <?php the_post_thumbnail(); ?>
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

                    <div class="col-3">
                        <?php get_sidebar( 'primary sidebar' ); ?>
                    </div>

                </div>                               
                       
                <!-- Row 2 -->
                <div class="row">
                    <div class="col-3">
                        <div class="card text-left shadow-sm mt-4">

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
                                                <div class="thumbnail-size">
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

                    <div class="col-6">
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
                                            <?php the_post_thumbnail(); ?>
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

                    <div class="col-3">
                        <?php get_sidebar( 'secondary sidebar' ); ?>
                    </div>
                    
                </div>
            </div>

            <!-- Container 2 - Ad Space -->
            <div class="container">
                <div class="row">
                    <div class="col-9">
                        <div class="card text-center shadow-sm py-3">
                            <div class="card-body">
                                <h5 class="card-title">Ad Space</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Container 3 -->
            <div class="container">
                <div class="row mt-4">

                    <!-- Local News Div -->
                    <div class="col-3">
                        <div class="card text-left shadow-sm">
                            <div class="card-header text-center sabon-font">
                                <strong>Local News</strong>
                            </div>

                            <img class="card-img-top"
                                src="wp-content/themes/juxtaposeAlpha/assets/images/peopleWalking.jpg"
                                alt="Card image cap">
                
                            <?php
                            // the query
                            $the_query = new WP_Query(array(
                                'category_name' => 'local-news',
                                'post_status' => 'publish',
                                'posts_per_page' => 5,
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

                    <!-- Sports Div -->
                    <div class="col-3">
                    <div class="card text-left shadow-sm">
                            <div class="card-header text-center sabon-font">
                                <strong>Sports</strong>
                            </div>

                            <img class="card-img-top"
                                src="wp-content/themes/juxtaposeAlpha/assets/images/sports.jpg"
                                alt="Card image cap">
                
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

                    <!-- Education Div -->
                    <div class="col-3">
                    <div class="card text-left shadow-sm mb-2">
                            <div class="card-header text-center sabon-font pt-3">
                                <strong>Education</strong>
                            </div>

                            <img class="card-img-top"
                                src="wp-content/themes/juxtaposeAlpha/assets/images/education.jpg"
                                alt="Card image cap">
                
                            <?php
                            // the query
                            $the_query = new WP_Query(array(
                                'category_name' => 'education',
                                'post_status' => 'publish',
                                'posts_per_page' => 5,
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
                    

                </div>
            </div>
        </article>
        

<?php
get_footer();
?>

    