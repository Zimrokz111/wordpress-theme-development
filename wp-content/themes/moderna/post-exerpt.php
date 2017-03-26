<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<article>
    <div class="post-image">
      <div class="post-heading">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      </div>
      <?php
        $thumb = wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID()), 'post_image');
        if($thumb[0]){
          $imgurl = $thumb[0];
        }else{
          $imgurl = get_template_directory_uri().'/img/dummies/blog/img1.jpg';
        }
      ?>
      <a href="<?php the_permalink(); ?>"><img src="<?php echo $imgurl; ?>" alt="<?php the_title(); ?>" /></a>
    </div>
    <?php //the_post_thumbnail('portfolio_thumb'); ?>
      <?php the_excerpt(); ?>

    <div class="bottom-article">
      <ul class="meta-post">
        <li><i class="icon-calendar"></i><?php the_date(); ?></li>
        <li><i class="icon-user"></i><?php the_author_posts_link(); ?></li>
        <li><i class="icon-folder-open"></i><?php the_category(', '); ?></li>
        <li><i class="icon-comments"></i><?php comments_popup_link('No Comments', 'One Comment', '% Comments', '', 'Comments is disabled'); ?></li>
      </ul>
      <a href="<?php the_permalink(); ?>" class="pull-right">Continue reading <i class="icon-angle-right"></i></a>
    </div>
</article>
<?php endwhile; ?>
<?php else: ?>
  <h2>No data found</h2>
<?php endif; ?>

<?php
  if(function_exists('wp_pagenavi')){
     wp_pagenavi();
   }else{
     include('navigation.php');
  }
 ?>
