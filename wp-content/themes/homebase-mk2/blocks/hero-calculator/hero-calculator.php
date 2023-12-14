<?php $anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class_name = 'section section-hero-calc';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

?>

<?php if (!get_field('hide_widget')) : ?>

  <?php
  $headline               = get_field('headline');
  $subheadline            = get_field('subheadline');
  $link                   = get_field('link');
  $add_bg                 = get_field('add_background');
  $bg_color               = get_field('bg_color');
  ?>

  <div <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?> <?php echo $type; ?>">
    <?php if ($add_bg) : ?>
      <div class="bg-layer <?php echo $bg_color; ?>">
        <div class="bg-inner"></div>
      </div>
    <?php endif; ?>
    <div class="container-narrow">
      <div class="row">
        <div class="col col-12">
          <div class="col-inner">
            <div class="hero-header">
              <?php
              if ($headline) :
                echo '<h1 class="fw-black">' . $headline . '</h1>';
              endif;

              if ($subheadline) :
                echo '<h2 class="subheading fw-normal">' . $subheadline . '</h2>';
              endif;?>
            </div>
            <div class="hero-footer">
              <?php
              if ($link) : ?>
                <a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?><img src="<?php echo get_template_directory_uri(); ?>/images/triangle.svg" alt="triangle"></a>
              <?php endif;?>                      
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>