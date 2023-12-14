<?php
/*
Template Name: Referrals
*/
get_header(); ?>

<section class="banner short verticals" style="background-color: #B587D2; background-image: url(<?php the_field('background_image'); ?>);"> 
  <div id="overlay"></div>
  <div class="row overlay-content">
    <div class="small-12 medium-10 medium-centered columns">
      <h1><?php the_field('h1_headline'); ?></h1>
      <h1><?php the_field('h2_headline'); ?></h1>
    </div>
  </div>
</section>
  
  <div class="container" role="document">
    <div class="row">
      <div class="small-11 small-centered medium-10 medium-centered columns">
        <h2>Why partner with Homebase</h2>
      </div>
    </div>

    <div class="row">
      <div class="small-11 small-centered medium-10 medium-centered columns">
        <ul class="medium-block-grid-2">
          <li>
            <h4>Find new customers</h4>
            <p>Thousands of businesses use Homebase to manage their teams. Leverage Homebase promotional support and even get featured on the Homebase website.</p>
          </li>
          <li>
            <h4>Get Paid!</h4>
            <p>Earn an upfront payment on new accounts, or a monthly commission for the life of the account. Earn opportunities for additional bonuses and rewards.</p>
          </li>
          <li>
            <h4>Simplify your business</h4>
            <p>Homebase eliminates the paperwork of time tracking, saving time for you and your clients. You’ll even get a free Homebase account for your own practice.</p>
          </li>
          <li>
            <h4>Manage your clients in one place</h4>
            <p>Homebase will provide you one dashboard for all of your clients. Login once to view timesheets and complete payroll for all of your clients.</p>
          </li>
        </ul>
      </div>
    </div>

    <section class="referrals-signup">
      <div class="row">
        <div class="small-11 small-centered medium-10 medium-centered columns">
          <h2>Get started today</h2>
        </div>
      </div>

      <div class="row">
        <div class="small-11 small-centered medium-10 medium-centered columns">
          <ul class="medium-block-grid-2">
            <li>
              <ul>
                <li>20% commission on all referrals</li>
                <li>Free account for your business</li>
                <li>Reward accounts for your clients</li>
                <li>Free affilliate tracking link </li>
                <li>Dedicated support</li>
                <li>Free & unlimited training</li>
              </ul>
            </li>

            <li>
              <div class="referrals-form">
                <?php if (method_exists('Ninja_Forms', "display")) { Ninja_Forms()->display(5); } ?>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>

  </div>
    
<?php get_footer(); ?>
