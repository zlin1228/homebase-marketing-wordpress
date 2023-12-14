<?php $anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class_name = 'section section-faq';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

?>

<?php if (!get_field('hide_widget')) : ?>

  <?php
  $hide_widget      = get_field('hide_widget');
  $headline         = get_field('headline');
  $subheadline      = get_field('subheadline');
  $image_d          = get_field('image_d');
  $image_m          = get_field('image_m');
  $type             = get_field('type');
  $bg_color         = get_field('bg_color');
  ?>

  <div <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?> <?php echo $type; ?>" <?php echo ($bg_color) ? "style='background-color:".$bg_color.";'" : '';?>>
    <div class="container-narrow">
      <div class="row">
        <?php if ($type == 'one-col') : ?>
          <?php if ($subheadline) : ?>
            <p class="subheadline micro"><?php echo $subheadline; ?></p>
          <?php endif; ?>
          <?php if ($headline) : ?>
            <h2 class="headline fw-black"><?php echo $headline; ?></h2>
          <?php endif; ?>
          <div class="col-right">
            <div class="col-inner">
              <?php if(have_rows('faqs')) : ?>
                <?php while(have_rows('faqs')) : the_row(); 
                  $faq_field         = get_sub_field('faq_field');
                  $question          = get_sub_field('question');
                  $answer            = get_sub_field('answer'); ?>
                  <div class="faq-item text-left">
                    <?php if ($faq_field) : ?>
                      <div class="field">
                        <p class="micro"><?php echo $faq_field; ?></p>
                      </div>
                    <?php endif; ?>
                    <?php if ($question) : ?>
                      <div class="question">
                        <p><?php echo $question; ?></p>
                        <img src="<?php echo site_url(); ?>/wp-content/themes/homebase/images/scheduling-faq-cross.svg" alt="Open FAQ">
                      </div>
                    <?php endif; ?>
                    <?php if ($answer) : ?>
                      <div class="answer">
                        <?php echo $answer; ?>
                      </div>
                    <?php endif; ?>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
        <?php else : ?>
        <div class="col col-12 col-sm-6 col-left">
          <div class="col-inner">
            <div class="col-wrapper">
              <?php if ($headline) : ?>
                <h2 class="fw-black"><?php echo $headline; ?></h2>
              <?php endif; ?>
              <?php if ($image_d) : ?>
                <?php echo wp_get_attachment_image( $image_d, 'full', '', array( "class" => "hide-for-sm" ) ); ?>
              <?php endif; ?>
              <?php if ($image_m) : ?>
                <?php echo wp_get_attachment_image( $image_m, 'full', '', array( "class" => "show-for-sm" ) ); ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="col col-12 col-sm-6 col-right">
          <div class="col-inner">
            <?php if(have_rows('faqs')) : ?>
              <?php while(have_rows('faqs')) : the_row(); 
                $faq_field         = get_sub_field('faq_field');
                $question          = get_sub_field('question');
                $answer            = get_sub_field('answer'); ?>
                <div class="faq-item text-left">
                  <?php if ($faq_field) : ?>
                    <div class="field">
                      <p class="micro"><?php echo $faq_field; ?></p>
                    </div>
                  <?php endif; ?>
                  <?php if ($question) : ?>
                    <div class="question">
                      <p><?php echo $question; ?></p>
                      <img src="<?php echo site_url(); ?>/wp-content/themes/homebase/images/scheduling-faq-cross.svg">
                    </div>
                  <?php endif; ?>
                  <?php if ($answer) : ?>
                    <div class="answer">
                      <?php echo $answer; ?>
                    </div>
                  <?php endif; ?>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php endif; ?>

<?php 
    
global $schema;

$schema = array(
'@context'   => "https://schema.org",
'@type'      => "FAQpage",
'mainEntity' => array()
);

if ( have_rows('faqs') ) {
  while ( have_rows('faqs') ) : the_row();
    $questions = array(
      '@type'          => 'Question',
      'name'           => get_sub_field('question'),
      'acceptedAnswer' => array(
        '@type' => "Answer",
        'text' => get_sub_field('answer')
      )
    );
        array_push($schema['mainEntity'], $questions);
  endwhile;

  function block_generate_faq_schema ($schema) {
    global $schema;
    if ($schema['mainEntity']) {
      echo '<script type="application/ld+json">'. json_encode($schema) .'</script>';
    }
  }
  add_action( 'wp_footer', 'block_generate_faq_schema', 100 );
}

?>