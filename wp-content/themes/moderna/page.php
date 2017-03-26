<?php get_header(); ?>
	<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="<?php echo site_url(); ?>"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li><a href="javascript:void(0);"><?php the_title(); ?></a><i class="icon-angle-right"></i></li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="internal-content">
					<?php if(have_posts()): while(have_posts()) : the_post(); ?>

						<h2><?php the_title(); ?></h2>
						<p><?php the_content(); ?></p>

					<?php endwhile; ?>

					<?php else : ?>
						<h2>Not found</h2>
					<?php endif ; ?>
				</div>
			</div>
		</div>
		<!-- divider -->
		<div class="row">
			<div class="col-md-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
	</div>
	</section>

	<?php get_footer(); ?>
