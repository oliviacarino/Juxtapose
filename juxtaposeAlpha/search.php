<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header();
?>

<div class="container">
    <div class="row">
        <div class="col-9 mx-auto">

          <section id="primary" class="site-content">
            <div id="content" role="main">
              <?php
// Check if there are any posts to display
if (have_posts()): ?>

              <header class="archive-header">
                <h1 style="font-size: 30px;" class="text-center mb-4"><?php single_cat_title('', true);?></h1>
                  <?php
// Display optional category description
if (category_description()): ?>
                  <div class="archive-meta"><?php echo category_description(); ?></div>
                  <?php endif;?>
              </header>

              <?php
// The Loop
while (have_posts()): the_post();?>
	                <h2 class="mt-2">
	                  <a class="category-post-title" href="<?php the_permalink()?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute();?>"><?php the_title();?></a>
	                </h2>
	                <small style="font-size: 15px;"><?php the_time('F jS, Y')?> by <?php the_author_posts_link()?></small>

	                <div class="entry" style="font-size: 17px;">
	                  
	                <?php //the_content();?>
	                  <!-- <p class="postmetadata"> -->
	                  <?php
    //comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');
    ?>
	                  <!-- </p> -->
	                </div>
	                <br>
	              <?php endwhile;
else: ?>
                <p>Sorry, no posts matched your criteria.</p>
              <?php endif;?>

            </div>
          </section>
        </div>
    </div>
</div>



<?php
get_footer();
?>
