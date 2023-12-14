<?php
/*
Template Name: Clover oAuth
*/
get_header(); ?>

  <section class="clover-oauth">
    <div class="container" role="document">
      <div class="row">
        <div class="small-12 medium-8 medium-centered columns">
          <p class="strong">we need a little more info</p>
          <h1>What type of user are you?</h1>
          <ul class="resources medium-block-grid-2">
            <li class="resource">
              <a href="http://app.joinhomebase.com" class="strong-link" target="_blank">
                <div class="wrapper">
                  <div class="icon homebase-user"></div>
                  <h2>Existing Homebase User</h2>
                  <p class="strong-link" target="_blank">Sign in Here<span class="arrow"></span></p>
                </div>
              </a>
            </li>
            <li class="resource">
              <a href="http://app.joinhomebase.com" class="strong-link" target="_blank" data-reveal-id="oauth-modal">
                <div class="wrapper">
                  <div class="icon new-user"></div>
                  <h2>New Homebase User</h2>
                  <p class="strong-link" target="_blank" data-reveal-id="oauth-modal">Click Here to Finish Install<span class="arrow"></span></p>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

    <div id="oauth-modal" class="reveal-modal medium" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
      <h2 id="modalTitle">Finish Your Installation of Homebase</h2>
      <p>To finish creating your new Homebase account, install and open Homebase on your Clover station via the Clover App Market.</p>
      <p>You will be directed to set up your account and create a password.</p>
      <a href="#" class="primary-cta got-it">Ok, got it!</a>
      <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div>
  </div>
    
<?php get_footer(); ?>
