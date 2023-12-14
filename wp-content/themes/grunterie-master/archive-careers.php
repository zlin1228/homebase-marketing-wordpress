<?php get_header(); ?>
<meta name="description" content="Careers at Homebase. Join us as we help local businesses around the country eliminate paperwork and spend more time growing their businesses.">

<style>
.banner.short {
  padding: 0 !important;
}
.banner .row .columns {
  padding: 0;
}
.headlines {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 100%;
  transform: translate(-50%, -50%);
}
</style>

<section class="banner short single">
<!--
	<div id="overlay"></div>
-->
  <div class="row">
    <div class="small-12 columns">
      <div class="image"><img alt="homebase team" src="https://joinhomebase.com/wp-content/uploads/2020/02/new-careers.jpg"/></div>
      <div class="headlines">
        <h1>Learn more about careers at Homebase</h1>
        <p>We are changing the future of local business. Join us.</p>
      </div>
    </div>
  </div>
</section>

  <!-- Start the main container -->
<div class="container" role="document" <?php if( isset( $_GET['gh_jid']) ) echo 'style="display: none"'; ?> >

  <div class="row">

<!-- Row for main content area -->

<br><br>
        <p>We all have our favorite small coffee shop, or cafe we go to on the weekends, or bookstore full of shelf after shelf of must reads.  It’s the local businesses that bring life to our neighborhoods and make our own lives a little bit easier.  At Homebase, we’re working to make life a little bit easier in return, for the employees, managers, and owners of these local businesses.</p>
	<p>The paperwork and administration of hourly work is an unnecessary burden, especially given advances in technology.  It’s causing headaches and uncertainty for millions of hard-working people, and it’s costing local business owners over a billion hours of wasted time every year.</p>
	<p>We believe in these entrepreneurs, and we believe in the people who work in these businesses. We are on a mission to eliminate this paper so that owners, managers, and employees can focus on the things they love.  And we’re already helping over 100,000 businesses.</p>
        <p>At Homebase, you will join a hardworking, smart, energetic team committed to changing the lives of hourly workers, which make up one-third of the US economy.  You’ll become part of a team that brings local business expertise from Intuit, Square, OpenTable, Yelp, and First Data.  Based in San Francisco and Houston, Homebase is backed by leading venture investors Baseline Ventures, Cowboy Ventures, and Khosla Ventures, who believe in transforming hourly work the way we do.</p>
	<p>We’d love for you to join our fast-growing team.  We can’t wait to meet you.</p>
        <p><img alt="Our Customers" src="https://joinhomebase.com/wp-content/uploads/2015/03/our-customers2.jpg"></p>
  </div>
</div>



<div class="row open-roles">
  <div class="small-11 small-centered large-8 large-centered columns" role="main">
    <div class="row">
      <br><br>
      <div id="job-board-container">
        <div id="grnhse_app"></div>
      </div>
      <style type="text/css"> 
        .all_jobs > .jobs { display: none; }
      </style>
    </div>
  </div>
</div>

<?php if( isset( $_GET['gh_jid']) ) : ?>
<script src="https://boards.greenhouse.io/embed/job_board/js?for=homebase"></script>
<script type="text/javascript">
  window.addEventListener( 'load', function() {
      Grnhse.Iframe.autoLoad();

      if ($('#grnhse_app').length > 0) {
        $('html, body').animate({
          scrollTop: $('#grnhse_app').offset().top - window.innerHeight / 3
        }, 500);
      }
  });
</script>
<?php else : ?>
<script type="text/javascript">
window.addEventListener( 'load', function() {
  jQuery(window).scroll(function(event){ 

      $.getScript('https://boards.greenhouse.io/embed/job_board/js?for=homebase', function() {
          Grnhse.Iframe.autoLoad();
      });

      jQuery(window).off(event);
  });
});
</script>
<?php endif; ?>


<?php get_footer(); ?>