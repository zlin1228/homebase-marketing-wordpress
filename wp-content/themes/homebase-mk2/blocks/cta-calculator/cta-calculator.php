<?php $anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class_name = 'section section-cta';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

?>

<?php if (!get_sub_field('hide_widget')) : ?>

  <?php
  $hide_widget      = get_field('hide_widget');
  $id               = get_field('widget_id');
  $headline         = get_field('headline');
  $subheadline      = get_field('subheadline');
  $logo             = get_field('logo');
  $main_image       = get_field('main_image');
  $button           = get_field('button');
  $bg_color         = get_field('bg_color');
  ?>

  <div <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?> <?php echo $type; ?>" <?php echo ($bg_color) ? "style='background-color:".$bg_color.";'" : '';?>>
    <div class="container-narrow">
      <div class="left">
        <?php if ($logo) : ?>
          <img class="logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
        <?php endif; ?>
        <?php if ($headline) : ?>
          <h3 class="headline"><?php echo $headline; ?></h3>
        <?php endif; ?>
        <?php if ($subheadline) : ?>
          <p class="subheadline"><?php echo $subheadline; ?></p>
        <?php endif; ?>
        <?php if(have_rows('list')) : ?>
          <ul class="tick">
            <?php while(have_rows('list')) : the_row();
              $text = get_sub_field('text'); ?>
                <?php if ($text) : ?>
                  <li><?php echo $text; ?></li>
                <?php endif; ?>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
        <?php if ($button) : ?>
          <a class="button primary" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
        <?php endif;?>
      </div>
      <div class="right">
        <?php if ($main_image) : ?>
          <img class="main-image" src="<?php echo $main_image['url']; ?>" alt="<?php echo $main_image['alt']; ?>">
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php endif; ?>