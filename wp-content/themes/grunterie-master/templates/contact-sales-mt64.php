<?php
/*
Template Name: Contact sales MT64
*/
get_header(); ?>

<?php
  $form_id                = get_field('form_id');
  $form_name              = get_field('form_name');
  $notification           = get_field('notification');
  $headline               = get_field('headline');
  $subheadline            = get_field('subheadline');
  $image                  = get_field('image');
?>

<div class="container new-style" role="document">
  <div class="section section-main">
    <div class="row">
      <div class="row-container">
        <div class="columns medium-4 col-left">
          <div class="column-inner">
            <div class="heading-wrap">
              <?php if ($headline) : ?>
                <h1><?php echo $headline; ?></h1>
              <? endif;?>
              <?php if ($subheadline) : ?>
                <h3 class="subheading normal"><?php echo $subheadline; ?></h3>
              <? endif;?>
            </div>
            <?php if ($image) : ?>
            <div class="image-wrap  hide-for-small">
              <img class="lazyload" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </div>
            <? endif;?>
          </div>
        </div>

        <div class="columns medium-6 medium-offset-2 col-right">
          <div class="column-inner">
            <?php if ($form_id) :?>
            <div id="contact-sales" class="form-wrap">
              <?php 
              if ( is_plugin_active( 'ninja-forms/ninja-forms.php' ) ) {
                Ninja_Forms()->display( intval($form_id), true );
              } 
              ?>
            </div>
            <? endif;?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
window.addEventListener( 'load', function() {
  $("input:not([type='button'])").focusout(function(e){
    e.preventDefault();

    if($("input").val())
      return true;
    else
      return false
  });

});


</script>

<?php get_footer(); ?>