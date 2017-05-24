<?php
/*
Template Name: Change Awards 2017
*/
wp_enqueue_script('jquery');
wp_enqueue_script('jquery-masonry');
wp_enqueue_script('imagesloaded',get_stylesheet_directory_uri().'/js/jquery.imagesloaded.min.js','jquery');
wp_enqueue_script('scrollto',get_stylesheet_directory_uri().'/js/jquery.scrollTo-1.4.3.1-min.js','jquery');
wp_enqueue_script('localscroll',get_stylesheet_directory_uri().'/js/jquery.localscroll-1.2.7-min.js','jquery');
wp_enqueue_script('bootstrap',get_stylesheet_directory_uri().'/js/bootstrap.min.js','jquery');
wp_enqueue_script('lightbox',get_stylesheet_directory_uri().'/js/bootstrap.lightbox.min.js','jquery');
wp_enqueue_script('cc-awards',get_stylesheet_directory_uri().'/js/cc-awards.js','jquery');

//get bootstrap css
wp_enqueue_style('bootstrap-style', get_stylesheet_directory_uri().'/inc/bootstrap.min.css');
// get hover css library
wp_enqueue_style('hover-css', get_stylesheet_directory_uri().'/inc/hover-min.css');


get_header(); ?>
	<!-- update for masthead -->
	<style>

		@import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600');
		@font-face {
			font-family: 'BodegaSansLight';
			src: url('webfonts/bodegasansall/hinted-BodegaSansLight.eot');
			src: url('webfonts/bodegasansall/hinted-BodegaSansLight.eot?#iefix') format('embedded-opentype'),
				url('webfonts/bodegasansall/hinted-BodegaSansLight.woff2') format('woff2'),
				url('webfonts/bodegasansall/hinted-BodegaSansLight.woff') format('woff'),
				url('webfonts/bodegasansall/hinted-BodegaSansLight.ttf') format('truetype'),
				url('webfonts/bodegasansall/hinted-BodegaSansLight.svg#BodegaSansLight') format('svg');
			font-weight: 300;
			font-style: normal;
		}
		@font-face {
			font-family: 'BodegaSansMedium';
			src: url('https://communitychange.org/wp-content/themes/c4cc/webfonts/bodegasansall/hinted-BodegaSansMediumSmallcaps.eot');
			src: url('https://communitychange.org/wp-content/themes/c4cc/webfonts/bodegasansall/hinted-BodegaSansMediumSmallcaps.eot?#iefix') format('embedded-opentype'),
				url('https://communitychange.org/wp-content/themes/c4cc/webfonts/bodegasansall/hinted-BodegaSansMediumSmallcaps.woff2') format('woff2'),
				url('https://communitychange.org/wp-content/themes/c4cc/webfonts/bodegasansall/hinted-BodegaSansMediumSmallcaps.woff') format('woff'),
				url('https://communitychange.org/wp-content/themes/c4cc/webfonts/bodegasansall/hinted-BodegaSansMediumSmallcaps.ttf') format('truetype'),
				url('https://communitychange.org/wp-content/themes/c4cc/webfonts/bodegasansall/hinted-BodegaSansMediumSmallcaps.svg#BodegaSansMediumSmallcaps') format('svg');
			font-weight: 500;
			font-style: normal;
		}

		#masthead {
		    background: #fff;
		    border-bottom: 0px;
		    padding-top: 70px;
		    margin-bottom: 0px;
		}

		p { font-family: 'Source Sans Pro', sans-serif; font-size: 16px; line-height: 1.65; }
		h2, h3 { font-family: 'BodegaSansMedium', 'bebas_neueregular', sans-serif; }
		ul { list-style-type: none !important; }

		nav.page { 
			margin-top: -15px;     
			font-family: 'BodegaSansMedium';
			font-size: 26px;
		}

		nav.page ul { border-bottom: 7px solid #144B7D; }

		a.page {
		    background: #f5f7f6;
		    color: #777;
		}
		a.page:hover { background: #144b7d; }

		.event-details {
		    padding: 18px;
		    font-family: 'BodegaSansLight';
		    font-size: 22px;
		    color: #f9a61a;
		}

		section.page h1 {
		    margin: 26px 0 4px;
		    font: normal 39px/44px 'BodegaSansMedium','bebas_neueregular';
		    background: #144B7D;
		}
		header.page li { margin-right: 0px; }

		/* spirit of the awards */

		section.page.spirit-of-the-awards {
		     padding-bottom: 5px; 
		     margin-bottom: 10px; 
		}

		.sota-recognitions {
		    float: left;
		    width: 100%;
		    padding: 16px;
		    background: #f5f7f6;
		}
		section.sota-recognitions p {
		    margin: 2px 26px 0 26px;
		}
		
		.honoree-2017-container {
		  padding-top: 20px;
		  background: #f5f7f6;
		}

		.honoree-2017-container p {
			margin: 10px; */
			text-align: center;
			color: #555;
			font-size: 20px;
		}

		.honoree-2017-container h3 {
		  font-family: 'BodegaSansMedium', 'bebas_neueregular', sans-serif;
		  font-size: 1.85em;
		  text-align: center; 
		  line-height: 1.55em;
		  color: #f4a216;
		}

		.honoree-2017-container img.img-honoree-2017 {
			margin-left: auto;
			margin-right: auto;
			width: 100%;
		}


		section.page.honorees .honoree-group h1 {
		    margin: -5px 0 -2px;
		    font-size: 20px;
		}
		.honoree-nav li.honoree-group li {
		    margin: 0px;
		    font-size: 11px;
		    line-height: 14px;
		}
		.honorees nav p { font-size:12px; }
		.honoree-nav li.honoree-group { height: auto; }
		.honoree-nav li.honoree-group li {
		    font-size: 14px;
		    line-height: 20px;
		}
		ul.honoree-nav ul { list-style-type: none; }
		ul.honoree-nav ul li { color: #797A7D; }

		.about-honoree { color: #797A7D; }
		.about-honoree p { padding-top: 14px;}
		.about-honoree img {
		    float: left;
		    margin-right: 20px;
		    border: 0px solid #fff; 
		    border-radius: 2px; 
		    padding-top: 80px;
		}
		.close-btn { top: 50px; }

		/*nomimate a champion section */
		.btn-info {
		    color: #fff;
		    background-color: #f4a216;
		    border-color: #f4a216;
		    border-radius: 0px;
		    /* font-size: 28px; */
		    width: 30%;
		    margin: 2%;
		    font-family: 'Source Sans Pro', sans-serif;
		}

		#pre-footer {
		    background: #114d7d;
		     border-top: 0px solid #114D7D;
		}

		#sitemap a { color: #fefefe; }
		#sitemap a:hover { color: #ccc; }
		#colophon {
		    background: #222;
		    border-top: 0px solid #D0D0D1;
		    clear: both;
		    color: white;
		    font-size: 12px;
		    padding: 30px 0;
		    min-height: 70px;
		    font-family: 'Source Sans Pro', sans-serif;
		}

		.btn-info:hover {
		    background-color: #114D7D;
		    border-color: #114D7D;
		}

	</style>

	<div id="primary" class="content-area">
		<div id="content" class="site-content change-awards" role="main">

			<nav class="page">
		    	<ul class="clearfix">
			        <!-- <li><a href="#honorees" class="page">Honorees</a></li>
			        <li><a href="#eventhighlights2016" class="page">Highlights 2016</a></li>
		            <li><a href="#sponsorship" class="page">Sponsorship</a></li>
		            <li><a href="#photos" class="page">Photos</a></li>
		            <li><a href="#spirit-of-the-awards" class="page">Spirit of the Awards</a></li> -->
					<li><a href="#spirit-of-the-awards" class="page">Spirit of the Awards </a></li>
				        <li><a href="#this-years-honorees" class="page">This Year's Honorees </a></li>
					<li><a href="#previous-year-honorees" class="page">Previous Years Honorees</a></li>
					<li><a href="#nominate-a-champion" class="page"> Nominate a Champion </a></li>
					<li><a href="#sponsor" class="page"> Sponsorship Us  </a></li>
		            <li class="event-details">
		            	<time><?php the_field('time_of_event17',2); ?></time>
		                Location TBA</a>
		              
		            </li>
		        </ul>
		    </nav>
			<!-- tf added center top to style 4-29-14 -->
		<header class="page" style="background: center top url('https://www.communitychange.org/wp-content/uploads/2017/04/bubblesNoVenue1050x385.png') no-repeat;"> 

		<section class="page clearfix spirit-of-the-awards" id="spirit-of-the-awards">
			<a class="anchor"></a>
			<h1>Spirit of the Awards</h1>
		    <section class="sota-explanation" >
		    	<?php the_field('explanation',1829); ?>
		    </section>
		   	<section class="sota-recognitions">
				    <p>The <strong>organizers and leaders</strong> who inspire people to identify the changes they need and take action to fight for them.<p>
				    <p>The <strong>public servants</strong> who carry the voices of the people with them into the corridors of power.</p>
				    <p>The <strong>artists and thinkers</strong> who envision a more just future, and what it will take to get us all there.</p>
				    <p>The <strong>donors and philanthropists</strong> who help build a broader movement by connecting people with resources that help them fight for change.</p>
				    <p>Our partners in the <strong>labor movement</strong>, who share CCC’s commitment to rights and opportunity for hard-working people.</p>
				    <p>The <strong>organizations</strong> that bring people together and build their communities with grassroots power.</p>
				    <p>And the <strong>activists</strong> who demonstrate bravery, determination and resolve, even when the obstacles seem insurmountable and change seems out of reach.</p>
		    	</ul>
		    </section> 
		</section>

                <!-- This Year's Honorees -->
		<section class="page honorees" id="this-years-honorees">
			<h1 class="special-header"> This Year's Honorees </h1>
			<div class="container honoree-2017-container">
				<div class="row">
					<div class="col-lg-4 col-xs-12">
						<a href="https://www.plannedparenthood.org/about-us/our-leadership/cecile-richards"><img class="img-honoree-2017" src="https://www.communitychange.org/wp-content/uploads/2017/05/cecil-richards-205.jpg"></a>
						<h3> Cecile Richards </h3>
						<p> President, and the Young Leaders of Planned Parenthood</p>
					</div><!-- col-lg-4 col-xs-12 -->
					<div class="col-lg-4 col-xs-12">
						<a href="https://www.afge.org/about-us/afge-national-leadership/national-officers-executive-bios/j.-david-cox-sr/"><img class="img-honoree-2017" src="https://www.communitychange.org/wp-content/uploads/2017/05/david-cox-205.jpg"></a>
						<h3> Jeffrey David Cox, Jr.  </h3>
						<p> President, American Federation of Government Employees</p>
					</div><!-- col-lg-4 col-xs-12 -->
					<div class="col-lg-4 col-xs-12">
						<a href="http://stproject.org/lio_directory/michelle-tremillo/"><img class="img-honoree-2017" src="https://www.communitychange.org/wp-content/uploads/2017/05/michelle-tremillo-205.jpg"></a>
						<h3> Michelle Tremillo </h3>
						<p> The Leaders of the Texas Organizing Project and Executive Director</p>
					</div><!-- col-lg-8 col-xs-12 -->
				</div><!--row end -->
			</div><!-- container honoree-2017-container end -->
		</section>
		<!-- END This Year's Honorees -->
		<!-- Previous Year Honorees -->
	    <section class="page honorees" id="previous-year-honorees">
	    	<a class="anchor" id="honorees"></a>
	    	<h1 class="special-header">Previous Years Honorees</h1>
			<div id="myCarousel" class="carousel slide">
	        	<div class="the-slider"></div>
				<div class="carousel-inner">
	                <?php
					$categories=get_categories('taxonomy=cca_year&orderby=name');
					foreach ($categories as $cat) {
					?>
	                <div class="item">
	                	<ul class="honoree-nav">
							<?php
	                        $the_query = new WP_Query('post_type=cca_honoree&posts_per_page=5&order=ASC&orderby=menu_order&cca_year='.$cat->cat_name);
	                        while ($the_query->have_posts()) : $the_query->the_post();
	                        ?>
	                        <?php if(get_field('year') == 'previous'){ ?>
	                        <li class="honoree-group" style="background: url(<?php $attachment_id = get_field('group_picture'); $size = 'honoree-group'; $image = wp_get_attachment_image_src( $attachment_id, $size ); echo $image[0]; ?>) no-repeat;">
	                        <?php } elseif(get_field('thumbnail_picture')){ ?>
	                        <li style="background: url(<?php $attachment_id = get_field('thumbnail_picture'); $size = 'thumb-small'; $image = wp_get_attachment_image_src( $attachment_id, $size ); echo $image[0]; ?>);">
	                        <?php } else { ?>
	                        <li style="background: url(<?php $attachment_id = get_field('picture'); $size = 'honoree-200'; $image = wp_get_attachment_image_src( $attachment_id, $size ); echo $image[0]; ?>);">
	                        <?php } ?>
	                        <?php if(get_field('year') == 'previous'){ ?>
	                        	<article>
	                            	<h1 class="special-header"><?php the_title(); ?></h1>
	                                <?php the_field('honorees'); ?>
	                            </article>
	                        <?php } else{ ?>
	                            <button type="button" class="launch-honoree" id="b-<?php echo the_ID(); ?>">
	                                <strong><?php the_title(); ?></strong>
	                                <?php the_field('description'); ?>
	                            </button>
	                        <?php } ?>
	                        </li>
	                        <?php
	                        endwhile;
	                        ?>
	                    </ul>
					</div>
					<?php
	                }
	                wp_reset_query();
	                ?>
				</div>
	            <?php
				$categories=get_categories('taxonomy=cca_year&orderby=name');
				foreach ($categories as $cat) {
	            	$the_query = new WP_Query('post_type=cca_honoree&posts_per_page=5&order=ASC&orderby=menu_order&cca_year='.$cat->cat_name);
	            	while ($the_query->have_posts()) : $the_query->the_post();
	            ?>
	            <article class="about-honoree clearfix" id="a-<?php echo the_ID(); ?>">
	                <img src="<?php $attachment_id = get_field('picture'); $size = 'honoree'; $image = wp_get_attachment_image_src( $attachment_id, $size ); echo $image[0]; ?>" title="<?php the_title(); ?>" />
	                <h1><?php the_title(); ?></h1>
	                <?php the_field('about'); ?>
	                <button type="button" class="close-btn">close</button>
	            </article>
	            <?php
	            	endwhile;
				}
	            wp_reset_query();
	            ?>
			</div>
	        <nav>
	        	<p><?php the_field('year_navigation_blurb',1841); ?></p>
	            <ol>
	            	<?php
	                $terms_year = get_terms('cca_year');
					$count_year = count($terms_year); $i=0;
					if ($count_year > 0) {
						foreach ($terms_year as $term_year) {
							$i++;
							$term_list_year .= '<li><button type="button" title="' . sprintf(__('View honorees from %s', 'my_localization_domain'), $term_year->name) . '" data-target="#myCarousel" data-slide-to="0">' . $term_year->name . '</button></li>';
						}
						echo $term_list_year;
					}
					?>
	            </ol>
	        </nav>
	        <article class="about-honorees clearfix">
				<?php the_field('about',1841); ?>
	        </article>
	    </section>
	    <!-- End Previous Year Honorees -->
		<section class="page clearfix nominate-a-champion" id="nominate-a-champion">
			<a class="anchor"></a>
			<h1>Nominate a Champion</h1>
				<div style="padding-top:20px;">
			   		<p>The Emerging Change Champion Award was established by the Center for Community Change and the Petra Foundation to recognize emerging or overlooked champions of change, who work to build power for greater social and economic justice in low income communities, specifically low income communities of color. With this award, the Center for Community Change will acknowledge an up-and-coming leader who has demonstrated high levels of leadership and promise, with the potential to reach beyond organizational boundaries to build a broader movement.</p>
			   		<p >Individuals nominated for the Emerging Change Champion Award should display a combination of activism and thought, force of character, independence of judgment, and clarity of expression.</p>
			   		<p class="text-center"><a href="https://www.communitychange.org/emerging-change-champions-nomination/"><button class="btn btn-info">Nomination Form Here </button></a></p>
			   	</div>
		</section>
		<!-- Sponsorship -->
		<section class="page clearfix nominate-a-champion" id="sponsor">
			<a class="anchor"></a>
			<h1> Sponsorship Opportunities</h1>
				<div style="padding-top:20px;">
			   			<p>Support our mission by becoming a sponsor today by contacting Beth Rayfield at 202-339-9302 or brayfield@communitychange.org</p>
			   			<p><strong>Sponsorship Benefits Include:</strong><br>
		   				- Sponsor name featured in the event program<br>
		   				- Sponsor name listed in CCC's annual report<br>
		   				- Sponsor name prominently listed on the CCC website<br>
		   				- Up to 10 tickets to the event </p>
			   		
			   	
			   	</div>
		</section>
		</header>
 	 
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
