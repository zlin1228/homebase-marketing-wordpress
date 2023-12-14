<?php if (!get_sub_field('hide_widget')) : ?>

  <?php
  $hide_widget      = get_field('hide_widget');
  $id               = get_field('widget_id');
  $headline         = get_field('headline');
  $caption          = get_field('caption');
  $bg_color         = get_field('bg_color');
  ?>

  <div class="section section-how-to-use" <?php echo ($id) ? "id='".$id."'" : '';?> <?php echo ($bg_color) ? "style='background-color:".$bg_color.";'" : '';?>>
    <div class="container-narrow">
      <?php if ($headline) : ?>
        <h3 class="headline"><?php echo $headline; ?></h3>
      <?php endif; ?>
      <?php if(have_rows('steps')) : ?>
        <div class="steps">
          <?php while(have_rows('steps')) : the_row(); 
            $title          = get_sub_field('title');
            $text           = get_sub_field('text'); ?>
            <div class="step">
              <?php if ($title) : ?>
                <p class="title"><?php echo $title; ?></p>
              <?php endif; ?>
              <?php if ($text) : ?>
                <p class="text"><?php echo $text; ?></p>
              <?php endif; ?>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
      <?php if ($caption) : ?>
        <p class="caption"><?php echo $caption; ?></p>
      <?php endif; ?>
    </div>
  </div>
<?php endif; ?>