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
              <h1 class="archive-title"><?php
                if(is_day()) :
                    printf( __('Daily Archives: %s', 'moderna'), '<span>'. get_the_date(). '</span>');
                elseif(is_month()) :
                    printf( __('Monthly Archives: %s', 'moderna'), '<span>'. get_the_date(_x('F Y', 'Monthly archives date formates', 'moderna')). '</span>');
                elseif(is_year()) :
                    printf( __('Yearly Archives: %s', 'moderna'), '<span>'. get_the_date(_x('Y', 'Yearly archives date formates', 'moderna')). '</span>');
                else :
                    _e('Archives', 'moderna');
                endif;
              ?></h1>
              <?php get_template_part('post-exerpt'); ?>
            <?php else : ?>
              <h2>No Posts Found.</h2>
          <?php endif; ?>

				</div>

					<?php get_sidebar(); ?>

			</div>
		</div>
	</section>
	<?php get_footer(); ?>
