<?php
/*
Template Name: [partner-landing]

*/
?>





<?php

get_header(); ?>

<style type="text/css">
	

header.contain-to-grid.hide-for-small.fixed.standard.reversed {
  display: none !important;


}

.contain-to-grid.show-for-small.fixed.standard.reversed {
    display: none !important;
}


</style>

<header id="site-header">
<div class="row">
<div class="large-12 columns"><img src="/wp-content/uploads/2016/04/logo.png" alt="" /></div>
</div>
</header><!-- header-end-here -->

<!-- section-start-here -->

<section>
<div class="row">

			<?php while ( have_posts() ) : the_post(); ?>

						<?php the_content(); ?>
				
			<?php endwhile; ?>




  <div class="large-4 medium-5 small-12 column">
          <div class="right-col">
            <form class="sign_up-form" method="get" action="https://app.joinhomebase.com/onboarding/sign-up">
              <div class="form-head">
                <h4>Sign Up Now</h4>
              </div>
              <div class="form-group large-12">
                <label>Email
                  <input type="text" name="email" aria-describedby="emailText">
                </label>
              </div>
              <div class="form-group large-12">
                <label>Password
                  <input type="password" name="password" aria-describedby="passwordText">
                </label>
              </div>
              <div class="form-group-button large-12">
                <input type="submit" value="Create Account">
              </div>
            </form>
            <div class="client-quotes">
              <p>"With 20+ employees on one schedule,<br>
                 Homebase is the best time-saving,<br>
                 headache-reducing business partner I<br>
                 could ask for!"</p>
              <h6>Beth P, Norm‘s News(Kalispell, MT)</h6>
              <img src="/wp-content/uploads/2016/04/profile-img.jpg">
            </div>
          </div>
        </div>





</div>
</section><!-- section-end-here -->



<!-- footer-start-here -->

<footer id="site-footer">
<div class="row">
<div class="large-12 column">

<p>Have questions? Our dedicated support team are happy to help</p>
<ul class="footer-ul">
	<li><i class="fi-telephone"></i>415-951-3830</li>
	<li><i class="fi-mail"></i>help@joinhomebase.com</li>
</ul>
</div>   
</div>
</footer> 


