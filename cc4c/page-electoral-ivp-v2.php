<?php
/*
Template Name: Electoral IVP
*/

get_header(); ?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<style>
   html, body { font-size: 16px; }
	 h1, h2, h3, h4, h5, h6 { font-family: 'bebas_neueregular', sans-serif;}
	 img { padding-bottom: 8px; }
	 h1 {
		font-family: 'bebas_neueregular';
		color: #f4a236;
		font-size: 39px;
		line-height: 61px;
	}
	h2 {
		color: #19497b;
	}
	.entry-content h2 {
		font-family: 'bebas_neueregular', sans-serif;
		font-size: 1.75em;
	}
	.entry-content p {
	    font-size: 1.5em
	    line-height: 1.6em;
	    margin-bottom: 1.3em;
	}
	.pdf-title {
    background: #FBB236;
    color: white;
    padding: 5px 10px;
    text-align: center;
}

	.panel-body { background: #23527c;}
	.panel-description p {color: #fff;}

	@media screen and (max-width: 600px) {
		.site-content.people .entry-content { padding: 5px; }
		.entry-content p { 
			font-size: 1em;
			line-height: 1.25em;
			margin-bottom: 1.15em;
		}
	}

</style>
 <div id="main" class="site-content people electoral-ivp">
    <div class="entry-content">

 <?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">						
						<?php if(get_field('section_nav')) : the_field('section_nav'); endif; ?>
					</header><!-- .entry-header -->
				
          <div class="container">
            <h1 class="entry-title"><?php the_title(); ?></h1>		
						<?php if(get_field('intro')) : ?>
							<div class="intro">
								<?php the_field('intro'); ?>
							</div>
						<?php endif; ?>
						<?php the_content(); ?>
						<div class="container">
									<?php	if( have_rows('stories_from_the_field')): ?>
											<div class="row">
												<div class="col-xs-12">
													<h2 class="stories-header"> Stories From The Field </h2>
												</div>
											</div>
									<?php
									  while ( have_rows('stories_from_the_field') ) : the_row();
									  // display a sub field value
										$image = get_sub_field('field_story_image');
										$story_description = get_sub_field('field_story_description');
									?>
											<div class="row">
												<div class="col-lg-12">
													<div class="panel panel-default">
													  <div class="panel-body">
													  	<div class="row">
													  		<div class="col-xs-12 col-md-6 col-lg-4">
													  			<img src="<?php echo $image['url']; ?>" >
													  		</div>
													  		<div class="col-xs-12 col-md-6 col-lg-8 panel-description">
													   		 	<?php echo $story_description ?>
													   		</div>
													   	</div>
													  </div>
													</div>
												</div>
											</div><!--row-->

									<?php
									    endwhile;
									else :
									    // no rows found
										echo '';
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

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<?php get_footer(); ?>
