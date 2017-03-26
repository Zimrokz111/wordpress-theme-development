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
              <div class="author_photo">
                  <h2>Author Profile</h2>
                  <style>
                    .author_bio{
                      overflow: hidden;
                    }
                    .author_bio img{
                      float: left;
                      margin-right: 30px;
                    }
                  </style>
                  <div class="author_bio">
                    <img src="http://placehold.it/250x250" alt="photo" class="alignleft">
                    <h2><?php the_author(); ?></h2>
                    <p><?php the_author_meta('description');  ?></p>
                    <a href="<?php the_author_meta('user_url');  ?>" target="_blank">Website</a> |
                    <a href="mailto:<?php the_author_meta('user_email');  ?>">Email</a>
                  </div>
              </div>
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
