<?php
/*
Template Name: Electoral IVP
*/

get_header(); ?>

  <div id="main" class="site-content people">
    <div class="container">

 <?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">						
						<?php if(get_field('section_nav')) : the_field('section_nav'); endif; ?>
					</header><!-- .entry-header -->
				
          <div class="entry-content">
            <h1 class="entry-title"><?php the_title(); ?></h1>		
						<?php if(get_field('intro')) : ?>
							<div class="intro">
								<?php the_field('intro'); ?>
							</div>
						<?php endif; ?>
						<?php the_content(); ?>

						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<h2 class="stories-header"> Stories From The Field </h2>
								</div>
								<div class="col-xs-12 col-lg-6">
									<?php if(get_field('stories_from_the_field')) : the_field('stories_from_the_field'); endif; ?>
									<?php
										$header_stories = '<h2 class="stories-header"> Stories From The Field </h2>';
										$header_no_stories = '';
									// check if the repeater field has rows of data
									if( have_rows('stories_from_the_field') ):
									 	// loop through the rows of data
									    while ( have_rows('stories_from_the_field') ) : the_row();
									        // display a sub field value
									  			echo $header_stories;
									        the_sub_field('field_story_description');
									        the_sub_field('field_story_image');
									    endwhile;
									else :
									    // no rows found
										echo $header_no_stories;
									endif;
									?>
								</div>
							</div>
						</div>
					
				</article><!-- #post-## -->
			</div><!-- .entry-content -->

			<?php endwhile; // end of the loop. ?>
            
   </div> <!-- end of container div -->
</div> <!-- end of main div -->


<?php get_footer(); ?>
