<?php get_header(); ?>

<section class="support-header banner short single" style="background-image: url(<?php the_field('support_background_image', 'option'); ?>);">
  <div id="overlay"></div>
  <div class="row overlay-content">
    <div class="small-12 columns">
      <h1>Homebase Help & Support</h1>
      <p>Get the most of out Homebase. Contact us if you don't find what you're looking for.</p>
      <div class="search row">
        <div class="small-12 medium-7 medium-centered columns">
          <?php include (TEMPLATEPATH . '/support-search.php'); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="support__term-list">
  <!-- Start the main container -->
  <div class="container" role="document">
    <div class="row">

  <!-- Row for main content area -->
    <div class="small-11 small-centered medium-10 medium-centered columns" role="main">
      <ul class="small-block-grid-1 medium-block-grid-2">
      <?php

      $post_type = 'support';
       
      // Get all the taxonomies for this post type
      $taxonomies = get_object_taxonomies( array( 'post_type' => $post_type ) );
       
      foreach( $taxonomies as $taxonomy ) :
       
          // Gets every "category" (term) in this taxonomy to get the respective posts
          $terms = get_terms( $taxonomy );
       
          foreach( $terms as $term ) : ?>

          <?php $term_link = get_term_link( $term ); ?> 

            <li>
              <div class="support-tax">
                <div class="show-for-medium-up support-tax__icon <?php echo $term->slug; ?>"></div>
                <div class="support-tax__content">
                  <span class="support-tax__title"><?php echo $term->name; ?></span>
                  <a class="support-tax__link" href="<?php echo $term_link ?>" rel="bookmark" title="Permalink to <?php the_title(); ?>">View All Guides</a>
                </div>
              </div>
            </li>
       
          <?php endforeach;
       
      endforeach; ?>
      </ul>

      <a href="<?php echo get_site_url(); ?>/support-category/getting-started/" class="support__view-all strong-link">View All Help Guides <span class="arrow"></span></a>
    </div>
  </div>
</section>

<section>
  <div class="row">
    <div class="small-11 small-centered medium-10 medium-centered columns">
      <div class="support__videos">
        <h2>Prefer to watch videos?</h2>
        <h3>Watch video tutorials to get the most out of Homebase</h3>
        <!--<ul class="small-block-grid-1 medium-block-grid-3">
          <li>
            <div class="support__video getting-started-video">
            </div>
            <h4>Getting Started</h4>
          </li>
          <li>
            <div class="support__video scheduling-video">
            </div>
            <h4>Building Your First Schedule</h4>
          </li>
          <li>
            <div class="support__video payroll-video">
            </div>
            <h4>Running Your First Payroll</h4>
          </li>
        </ul>
-->
        <a href="<?php echo get_site_url(); ?>/product-videos" class="support__view-all strong-link">View All Videos <span class="arrow"></span></a>
      </div>
    </div>
  </div>
</section> 
<section class="support__footer">
  <div class="row">
    <div class="support-footer medium-12 medium-centered columns">
      <ul class="medium-block-grid-3">
        <li>
          <div class="support-contact">
            <div class="webinar"></div>
            <h2>Join a Webinar</h2>
            <p><a href="http://homebasesetup.com" target="_blank">homebasesetup.com</a></p>
            <p>Join one of our 30 min training webinars to help you get set up.</p>
          </div>
        </li>
        <li>
          <div class="support-contact">
            <div class="email"></div>
            <h2>Send an Email</h2>
            <p><a href="mailto:help@joinhomebase.com">help@joinhomebase.com</a></p>
            <p>Reach us at any time! We will reply within 24hrs.</p>
          </div>
        </li>
        <li>
          <div class="support-contact">
            <div class="phone"></div>
            <h2>Give us a Call</h2>
            <p><a href="#">415-951-3830</a></p>
            <p>Our dedicated support team are happy to help.</p>
          </div>
       </li>
      </ul>
    </div>
  </div>
</section>
    
<?php get_footer(); ?>