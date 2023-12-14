<?php $anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class_name = 'section section-text-with-gif';
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
  $text             = get_field('text');
  $gif              = get_field('gif');
  $image_before     = get_field('image_before');
  $arrow_bottom     = get_field('arrow_bottom');
  $bg_color         = get_field('bg_color');

  if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $type;
  }
  ?>

  <div <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?>" <?php echo ($bg_color) ? "style='background-color:".$bg_color.";'" : '';?>>
    <div class="container-narrow">
      <div class="left">
        <?php if ($headline) : ?>
          <h3 class="headline fw-black"><?php echo $headline; ?></h3>
        <?php endif; ?>
        <?php if ($text) : ?>
          <p class="text"><?php echo $text; ?></p>
        <?php endif; ?>
      </div>
      <div class="right">
        <?php if ($gif) : ?>
          <div class="gif">
            <img src="<?php echo $gif['url']; ?>" alt="<?php echo $gif['alt']; ?>">
          </div>
        <?php endif; ?>
      </div>
      <?php if ($image_before) : ?>
        <div class="image-before">
          <img src="<?php echo $image_before['url']; ?>" alt="<?php echo $image_before['alt']; ?>">
        </div>
      <?php endif; ?>
      <?php if ($arrow_bottom) : ?>
        <div class="arrow-bottom">
          <img src="<?php echo $arrow_bottom['url']; ?>" alt="<?php echo $arrow_bottom['alt']; ?>">
        </div>
      <?php endif; ?>
    </div>
  </div>
<?php endif; ?>