<?php get_header(); ?>

<section class="support-header hr-header banner short single" style="background-image: url(<?php the_field('clover_hr_background_image', 'option'); ?>);">
  <div id="overlay"></div>
  <div class="row overlay-content">
    <div class="small-12 columns">
      <h1>HR Resources for Clover Merchants</h1>
      <p>Free Guides for Hiring and Employee Onboarding.</p>

      <div class="hrg hide-for-small">
        <p>In partnership with:</p>
        <a href="http://restauranthrgroup.com/" target="_blank"><span class="logo"></span></a>
      </div>
    </div>
  </div>
</section>

  <!-- Start the main container -->
<div class="container hr-container" role="document">
  <div class="row">

    <!-- Row for main content area -->
    <div class="small-11 small-centered large-11 large-centered columns" role="main">

      <div class="intro small-12 small-centered large-10 columns">
        <h2>Exclusive access to free HR resources and a HR expert to help you run your business.</h2> 
      </div>

      <div class="row">
        <!-- Row for main content area -->
        <div class="small-11 small-centered medium-10 medium-centered columns" role="main">
          <ul class="small-block-grid-1 medium-block-grid-2">
          <?php

          $post_type = 'hr-resources';
           
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
                      <div class="support-tax__content-inner">
                        <span class="support-tax__title"><?php echo $term->name; ?></span>
                        <a class="support-tax__link" href="<?php echo $term_link ?>" rel="bookmark" title="Permalink to <?php the_title(); ?>" data-reveal-id="<?php echo $term->slug; ?>-modal">View All Guides</a>
                      </div>
                    </div>
                  </div>
                </li>

                <div id="<?php echo $term->slug; ?>-modal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                  <h2 id="modalTitle">Important Disclaimer</h2>
                  <p>The following sample forms are intended to serve as a starting point and not as final drafts. These forms should be reviewed with Restaurant HR Group and modified to suit your organization’s culture and specific needs. Further, federal and state employment laws are amended frequently and vary from state to state & municipality to municipality. These forms have not been drafted in consideration of any one jurisdiction. As such, you should not use these forms without first consulting with Restaurant HR Group or legal counsel and reviewing your local, state, and federal laws as well as any applicable industry practices and company policies. </p>
                  <a href="<?php echo $term_link ?>" class="primary-cta">View the New Hire Forms</a>
                  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
                </div>
           
              <?php endforeach;
           
          endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="hrg-callout">
  <div class="row">
    <div class="small-11 small-centered large-10 large-centered columns">
      <h3>Check back shortly to join a webinar with our HR expert!</h3>
    </div>
  </div>
</section>
    
<?php get_footer(); ?>