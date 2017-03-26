<?php
  /*
    Template Name: Welcome Template
  */
  get_header();
?>
	<section id="featured">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
            <?php
             // The Query
             $args = array(
               'post_type' => 'slide',
               'posts_per_page' => 4
             );
            query_posts( $args );

            // The Loop
            while ( have_posts() ) : the_post(); ?>
              <li>
                <?php the_post_thumbnail('slide_image');?>
                <div class="flex-caption">
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
                  <a href="#" class="btn btn-theme">Learn More</a>
                </div>
              </li>
            <?php endwhile; ?>
          <?php wp_reset_query(); ?>
            </ul>
        </div>
	<!-- end slider -->
			</div>
		</div>
	</div>



	</section>
	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
						<h2><span>Moderna</span> HTML Business Template</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">

          <?php
            global $post;
            $args = array( 'posts_per_page' => 4, 'post_type'=> 'services' );
            $myposts = get_posts( $args );
            foreach( $myposts as $post ) : setup_postdata($post); ?>
            <?php $service_icon = get_post_meta($post->ID, 'service_icon', true); ?>
            <?php $service_link = get_post_meta($post->ID, 'service_link', true); ?>
            <div class="col-lg-3">
  						<div class="box">
  							<div class="box-gray aligncenter">
  								<h4><?php the_title(); ?></h4>
  								<div class="icon">
  								<i class="fa fa-<?php echo $service_icon; ?> fa-3x"></i>
  								</div>
  								<?php the_excerpt(); ?>

  							</div>
  							<div class="box-bottom">
  								<a href="<?php echo $service_link; ?>">Learn more</a>
  							</div>
  						</div>
  					</div>
            <?php endforeach;
            wp_reset_postdata();
            ?>

				</div>
			</div>
		</div>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
		<!-- Portfolio Projects -->
    <?php
      global $post;
      $portfolio_args = array( 'posts_per_page' => 4, 'post_type'=> 'portfolios', 'order'=>'asc' );
      $myPortfolios = get_posts( $portfolio_args );
    if($myPortfolios){
    ?>
		<div class="row">
			<div class="col-lg-12">
				<h4 class="heading">Recent Works</h4>
				<div class="row">
					<section id="projects">
					    <ul id="thumbs" class="portfolio">


            <?php foreach( $myPortfolios as $post ) : setup_postdata($post); ?>
                  <?php
                      $portfolio_thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
                  ?>
                  <li class="col-lg-3 design" data-id="id-0" data-type="web">
                  <div class="item-thumbs">
                  <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                  <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php echo $post->post_title; ?>" href="<?php echo $portfolio_thumb[0]; ?>">
                  <span class="overlay-img"></span>
                  <span class="overlay-img-thumb font-icon-plus"></span>
                  </a>
                  <!-- Thumb Image and Description -->
                  <?php
                    /*if we write this code then we will get with src html tag*/
                    the_post_thumbnail('portfolio_thumb');
                  ?>

                  </div>
                  </li>
              <?php endforeach; ?>
						<!-- End Item Project -->


					</ul>
					</section>
				</div>
			</div>
		</div>
    <?php } ?>
	</div>
	</section>
	<?php get_footer(); ?>
