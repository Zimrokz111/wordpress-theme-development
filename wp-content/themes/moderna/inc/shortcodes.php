<?php
  /*Start button shortcode with icon*/
  function button_shortcodes( $atts, $content=null){
    extract( shortcode_atts( array(
        'link' => '',
        'type' => '',
        'icon' => '',
        'text' => ''
    ), $atts) );

    if($icon) :
      return '<a href="'.$link.'" class="btn btn-'.$type.'"><i class="fa fa-'.$icon.'"></i>'.$text.'</a>';
    else:
      return '<a href="'.$link.'" class="btn btn-'.$type.'">'.$text.'</a>';
    endif;
  }
  add_shortcode('btn', 'button_shortcodes');
  /*End Button shortcode with icon*/

  /*Start progress bar shortcode*/
  function my_bar_shortcode($atts, $content=null){
    extract(shortcode_atts(array(
      'value' => '',
      'text' => '',
      'active' => '',
      'type' => ''
    ), $atts));

    return '<div class="progress progress-striped '.$active.'">
  <div class="progress-bar progress-bar-'.$type.'" role="progressbar" aria-valuenow="'.$value.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$value.'%;">
    <span class="sr-only">'.$text.'</span>
  </div>
</div>';
  }
  add_shortcode('bar', 'my_bar_shortcode');
  /*End bar shortcode*/

  /*pricing table shortcode*/
  function pricing_table_shortcode($atts, $content=null){
    extract(shortcode_atts(array(
      'column' => '4',
      'heading_1' => 'Vary',
      'heading_2' => 'Basic',
      'price' => '$15 / Month',
      'btn_link' => '#',
      'btn_text' => 'Register',
      'btn_type' => 'theme',
      'special' => '',
      'btn_icon' => 'bolt'
    ), $atts));
    return '<div class="col-lg-'.$column.'">
				<div class="pricing-box-alt '.$special.'">
					<div class="pricing-heading">
						<h3>'.$heading_1.' <strong>'.$heading_2.'</strong></h3>
					</div>
					<div class="pricing-terms">
						<h6>'.$price.'</h6>
					</div>
					<div class="pricing-content">
						'.$content.'
					</div>
					<div class="pricing-action">
						<a href="'.$btn_link.'" class="btn btn-medium btn-'.$btn_type.'"><i class="icon-'.$btn_icon.'"></i> '.$btn_text.'</a>
					</div>
				</div>
			</div>';
  }
  add_shortcode('pricing', 'pricing_table_shortcode');
  /*end pricing table shortcode*/

  /*post using shortcode*/
  function post_list_shortcode($atts, $content=null){
    extract(shortcode_atts(array(
      'type' => 'post',
      'count' => '-1'
    ),$atts));

    $q = new WP_Query(array('posts_per_page'=>$count, 'post_type'=>$type));

    $list = '<ul>';
    while($q->have_posts()): $q->the_post();
      $list.='<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
    endwhile;
    $list.='</ul>';
    wp_reset_query();
    return $list;
  }
  add_shortcode('post', 'post_list_shortcode');
  /*End post using shortcode*/

  /*Start Portfolio shortcode*/
  function portfolio_list_shortcode($atts, $content=null){
    extract(shortcode_atts(array(
      'order' => 'desc',
      'count' => '-1'
    ),$atts));

    $q = new WP_Query(array('posts_per_page'=>$count, 'post_type'=>'portfolios', 'order'=>$order));

    $list = '<div class="row">
              <section id="projects">
                <ul id="thumbs" class="portfolio">';
                  while($q->have_posts()): $q->the_post();
                    $portfolio_large = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'large');
                    $portfolio_small = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'portfolio_thumb');
                    $list.='<li class="col-lg-3 design" data-id="id-0" data-type="web">
                    <div class="item-thumbs">
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="'.get_the_title().'" href="'.$portfolio_large[0].'">
                    <span class="overlay-img"></span>
                    <span class="overlay-img-thumb font-icon-plus"></span>
                    </a>
                    <img src="'.$portfolio_small[0].'" alt="'.get_the_title().'"/>
                    </div>
                    </li>';
                  endwhile;
    $list.='</ul>
    </section>
  </div>';
    wp_reset_query();
    return $list;
  }
  add_shortcode('portfolio', 'portfolio_list_shortcode');
  /*End portfolio shortcode*/

  /*Jobs shortcode*/
  function job_list_shortcode($atts, $content=null){
    extract(shortcode_atts(array(
      'count' => '-1'
    ),$atts));

    $q = new WP_Query(array('posts_per_page'=>$count, 'post_type'=>'jobs'));


    $list = '<div class="all_job_list">';
    while($q->have_posts()): $q->the_post();
    $id = get_the_ID();
    $job_link = get_post_meta($id,'job_link',true);
      $list.='<div class="single_job">';
      $list.='<h2>'.get_the_title().'</h2>
      '.get_the_excerpt().'
      ';
      if($job_link) :
        $list.='<a href="'.$job_link.'" target="_blank">Apply Now</a>';
      endif;
      $list.='</div>';
    endwhile;
    $list.='</div>';
    wp_reset_query();
    return $list;
  }
  add_shortcode('jobs', 'job_list_shortcode');
  /*End jobs shortcode*/
 ?>
