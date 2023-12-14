<?php $anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class_name = 'section section-navbar feature-navbar';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

?>

<?php if (!get_field('hide_widget')) : ?>

  <?php
  $hide_widget        = get_field('hide_widget');
  $nav_menu_name      = get_field('menu_name');
  ?>

  <div <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?> <?php echo $type; ?>" data-scroll-sticky>
    <div class="container">
      <div class="row">
        <div class="col col-12">
          <div class="col-inner">
            <?php wp_nav_menu( array('menu' => $nav_menu_name, 'menu_class' => 'features-sub', 'container_class' => 'features-sub-container') ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>