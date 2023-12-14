<?php $anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class_name = 'section section-hero-paycheck-lp';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

?>

<?php if (!get_field('hide_widget')) : ?>

  <?php
  $logo                   = get_field('logo');
  $headline               = get_field('headline');
  $subheadline            = get_field('subheadline');
  $text                   = get_field('text');
  $nav_headline           = get_field('nav_headline');
  $bg_image               = get_field('bg_image');
  ?>

  <div <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?>" <?php echo ($bg_image) ? "style='background-image:url(" .  $bg_image['url'] . ");'"  : ""; ?>>
    <div class="container">
      <?php if ($logo) : ?>
        <a class="logo-link" href="/" aria-label="Homepage">
          <img class="logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
        </a>        
      <?php endif ?>
      <?php if ($headline) : ?>
        <h1 class="headline"><?php echo $headline; ?></h1>
      <?php endif ?>
      <?php if ($subheadline || $text) : ?>
        <div class="middle">
          <?php if ($subheadline) : ?>
            <p class="subheadline"><?php echo $subheadline; ?></p>
          <?php endif ?>
          <?php if ($text) : ?>
            <div class="text"><?php echo $text; ?></div>
          <?php endif ?>
        </div>
      <?php endif ?>
      <?php if ($nav_headline) : ?>
        <h2 class="nav-headline"><?php echo $nav_headline; ?></h2>
      <?php endif ?>
      <?php if(have_rows('links')) : ?>
        <div class="links">
          <?php while(have_rows('links')) : the_row(); 
            $link         = get_sub_field('link'); ?>
            <a class="text-link-arrow" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
<?php endif; ?>