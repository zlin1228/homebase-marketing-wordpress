<?php $anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class_name = 'section section-text-with-image';
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
  $image            = get_field('image');
  $button           = get_field('button');

  if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $type;
  }
  ?>

  <div <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?>" <?php echo ($bg_color) ? "style='background-color:".$bg_color.";'" : '';?>>
    <div class="container">
      <div class="left">
        <?php if ($headline) : ?>
          <h3 class="headline"><?php echo $headline; ?></h3>
        <?php endif; ?>
        <?php if(have_rows('texts')) : ?>
          <div class="texts">
            <?php while(have_rows('texts')) : the_row();
              $text          = get_sub_field('text'); ?>
              <?php if ($text) : ?>
                <div class="text">
                  <p><?php echo $text; ?></p>
                </div>
              <?php endif; ?>
            <?php endwhile; ?>
          </div> 
        <?php endif; ?>
        <?php if ($button) : ?>
          <a class="button primary" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
        <?php endif; ?>
      </div>
      <div class="right">
        <?php if ($image) : ?>
          <div class="image">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php endif; ?>