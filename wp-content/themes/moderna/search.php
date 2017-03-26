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

					<?php if(have_posts()) : ?>
              <h1 class="page-title"><?php
                printf( __('Search result for: %s', 'moderna'), '<span>'. get_search_query(). '</span>');
              ?></h1>
              <?php get_template_part('post-exerpt'); ?>
            <?php else : ?>
              <h2>No Posts Found.</h2>
              <?php get_search_form(); ?>
          <?php endif; ?>

				</div>

					<?php get_sidebar(); ?>

			</div>
		</div>
	</section>
	<?php get_footer(); ?>
