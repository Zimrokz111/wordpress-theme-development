<?php
	get_header();
 ?>
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Blog</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">

          <?php if(have_posts()): while(have_posts()) : the_post(); ?>

						<h2><?php the_title(); ?></h2>
						<?php
			        $thumb = wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID()), 'post_image');
			        if($thumb[0]){
			          $imgurl = $thumb[0];
			        }else{
			          $imgurl = get_template_directory_uri().'/img/dummies/blog/img1.jpg';
			        }
			      ?>
			      <img src="<?php echo $imgurl; ?>" alt="<?php the_title(); ?>" />

            <h5>Published on: <?php the_date(); ?> :: Published By: <?php the_author_posts_link(); ?></h5>
						<p><?php the_content(); ?></p>

					<?php endwhile; ?>

					<?php else : ?>
						<h2>Not found</h2>
					<?php endif ; ?>

				</div>

					<?php get_sidebar(); ?>

			</div>
		</div>
	</section>
	<?php get_footer(); ?>
