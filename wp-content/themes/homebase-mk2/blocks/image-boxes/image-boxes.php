<?php $anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class_name = 'section section-image-boxes';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

?>

<?php if (!get_field('hide_widget')) : ?>

  <?php
  $headline         = get_field('headline');
  $bg_color         = get_field('bg_color');

  if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $type;
  }
  ?>

  <div <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?>" <?php echo ($bg_color) ? "style='background-color:".$bg_color.";'" : '';?>>
    <div class="container">
      <?php if ($headline) : ?>
        <h3 class="headline"><?php echo $headline; ?></h3>
      <?php endif; ?>
      <?php if(have_rows('image_boxes')) : ?>
        <div class="image-boxes">
          <?php while(have_rows('image_boxes')) : the_row(); 
            $image         = get_sub_field('image');
            $text          = get_sub_field('text');
            $title         = get_sub_field('title'); ?>
            <div class="image-box">
              <?php if ($image) : ?>
                <div class="image">
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                </div>
              <?php endif; ?>
              <?php if ($title) : ?>
                <div class="title">
                  <p><?php echo $title; ?></p>
                </div>
              <?php endif; ?>
              <?php if ($text) : ?>
                <div class="text">
                  <p><?php echo $text; ?></p>
                </div>
              <?php endif; ?>
            </div>
          <?php endwhile; ?>
        </div> 
      <?php endif; ?>   
    </div>
  </div>
<?php endif; ?>