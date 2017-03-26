<footer>
<div class="container">
  <div class="row">
      <!-- footer widget one-->
      <div class="col-lg-3">
        <?php if ( ! dynamic_sidebar('footer_widget_one') ) : ?>
        <!-- <div class="widget">
          <h5 class="widgetheading">Get in touch with us</h5>
          <address>
          <strong>Moderna company Inc</strong><br>
           Modernbuilding suite V124, AB 01<br>
           Someplace 16425 Earth </address>
          <p>
            <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
            <i class="icon-envelope-alt"></i> email@domainname.com
          </p>
        </div> -->
      <?php endif; ?>
      </div>
      <!--end footer widget one-->

      <!-- footer widget two-->
      <div class="col-lg-3">
        <?php if ( ! dynamic_sidebar('footer_widget_two') ) : ?>
        <!-- <div class="widget">
          <h5 class="widgetheading">Pages</h5>
          <ul class="link-list">
            <li><a href="#">Press release</a></li>
            <li><a href="#">Terms and conditions</a></li>
            <li><a href="#">Privacy policy</a></li>
            <li><a href="#">Career center</a></li>
            <li><a href="#">Contact us</a></li>
          </ul>
        </div> -->
        <?php endif; ?>
      </div>
      <!-- end footer widget two-->

      <!-- footer widget three-->
      <div class="col-lg-3">
        <?php if ( ! dynamic_sidebar('footer_widget_three') ) : ?>
        <!-- <div class="widget">
          <h5 class="widgetheading">Latest posts</h5>
          <ul class="link-list">
            <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
            <li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
            <li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
          </ul>
        </div> -->
        <?php endif; ?>
      </div>
      <!-- end footer widget three-->

      <!-- footer widget four-->
      <div class="col-lg-3">
        <?php if ( ! dynamic_sidebar('footer_widget_four') ) : ?>
        <!-- <div class="widget">
          <h5 class="widgetheading">Flickr photostream</h5>
          <div class="flickr_badge">
            <script type="text/javascript" src="https://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
          </div>
          <div class="clear">
          </div>
        </div> -->
        <?php endif; ?>
      </div>
      <!--end footer widget four-->

  </div>
</div>
<div id="sub-footer">
  <div class="container">
    <div class="row">
      <?php
        //its get from theme option
        $copyright_text = ot_get_option('copy_right_text');
        if($copyright_text){
      ?>
      <div class="col-lg-6">
        <div class="copyright">
          <p><?php echo $copyright_text; ?></p>
        </div>
      </div>
      <?php } ?>

      <?php
        $social_icons_lists = ot_get_option('social_icon_links',array());

        if(!empty($social_icons_lists)){ ?>
          <div class="col-lg-6">
            <ul class="social-network">
                <?php
                    foreach($social_icons_lists as $s_icon){
                      $iconname = $s_icon['icon_name'];
                      $iconlink = $s_icon['icon_link'];
                      $title = $s_icon['title'];
                      echo '<li><a href="'.$iconlink.'" data-placement="top" title="'.$title.'" target="_blank"><i class="fa fa-'.$iconname.'"></i></a></li>';
                   }
                ?>
            </ul>
          </div>
      <?php  }
      ?>
    </div>
  </div>
</div>
</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
  ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php wp_footer(); ?>
</body>
</html>
