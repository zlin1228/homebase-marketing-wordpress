<form role="search" method="get" id="support-searchform" action="<?php echo home_url('/'); ?>">
  <div class="row collapse">
    <div class="large-10 small-9 columns">
      <input type="hidden" name="post_type" value="hr" />
      <input type="text" value="" name="s" id="s" placeholder="<?php esc_attr_e('Search', 'reverie'); ?>">
    </div>
    <div class="large-2 small-3 columns">
      <input type="submit" id="searchsubmit" value="<?php esc_attr_e('Search', 'reverie'); ?>" class="button postfix">
    </div>
  </div>
</form>