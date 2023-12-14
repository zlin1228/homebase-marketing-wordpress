<?php $anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class_name = 'section section-paycheck-calculator';
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
  $bg_color         = get_field('bg_color');
  ?>

  <div <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?> <?php echo $type; ?>" <?php echo ($bg_color) ? "style='background-color:".$bg_color.";'" : '';?>>
    <div class="container-narrow">
      <div class="titles">
        <div class="title">
          Pay date
        </div>
        <div class="title">
          Frequency
        </div>
      </div>
      <div class="date-freq">
        <div class="date">
          <label for="date">Pay date</label>
          <input type="text" name="date" aria-label="Date">
        </div>
        <div class="freq">
          <label for="freq">Frequency</label>
          <select name="freq" aria-label="Frequency">
            <option value="weekly">Weekly</option>
            <option value="bi-weekly">Bi-weekly</option>
            <option value="monthly">Monthly</option>
          </select>
        </div>
      </div>
      <div class="titles">
        <div class="title">
          Hourly wage
        </div>
        <div class="title">
          Regular hours this pay period
        </div>
        <div class="title">
          Gross Pay
        </div>
      </div>
      <div class="regular">
        <div class="rate-reg">
          <label for="rate-reg">Hourly wage</label>
          <div class="wrapper">
            <span>$</span>
            <input id="rate-reg" type="number" name="rate-reg" placeholder="00.00" step="0.01" min="0.10" max="300.00" aria-label="Regular rate">
            <span>/hour</span>
          </div>          
        </div>
        <div class="hours-reg">
          <label for="hours-reg">Regular hours this pay period</label>
          <div class="time">
            <input class="hours" type="number" min="0" step="1" name="hours-reg" aria-label="Regular hours" placeholder="00">:<input class="mins" type="number" min="0" max="59" step="1" name="mins-reg" aria-label="Regular minutes" placeholder="00">
          </div>
        </div>
        <div class="gross-reg">
          <div class="gross-reg-title">Gross Pay</div>
          <div class="gross-reg-val">$0.00</div>
        </div>
      </div>
      <div class="addons">
        <div class="addon-title">
          <p>Add on:</p>
        </div>
        <div class="checkboxes">
          <div class="over-check-container">
            <div class="over-check">
              <input type="checkbox" name="over-check" aria-label="Add overtime">
              <label for="over-check">Overtime</label>
            </div>
          </div>
        </div>
        <div class="titles overtime">
          <div class="title">
            Overtime wage
          </div>
          <div class="title">
            Overtime hours
          </div>
        </div>
        <div class="over-item">
          <div class="box">
            <div class="rate-over">
              <label for="rate-over">Overtime wage</label>
              <div class="wrapper">
                <span>$</span>
                <input type="number" name="rate-over" placeholder="00.00" step="0.01" min="0.10" max="300.00" aria-label="Overtime rate">
                <span>/hour</span>
              </div>
            </div>
            <div class="hours-over">
              <label for="hours-over">Overtime hours</label>
              <div class="time">
                <input class="hours" type="number" min="0" step="1" name="hours-over" aria-label="Regular hours" placeholder="00">:<input class="mins" type="number" min="0" max="59" step="1" name="mins-over" aria-label="Regular minutes" placeholder="00">
              </div>
            </div>
          </div>
          <div class="close"><img src="/wp-content/themes/homebase/images/scheduling-faq-cross.svg"></div>
        </div>
        <div class="over-add">
          <img src="/wp-content/themes/homebase/images/scheduling-faq-cross.svg">
          <span class="text">Add Overtime</span>
        </div>
        <div class="totals">
          <div class="top">
            <div class="item total-gross">
              Take home pay: <span id="total-gross-pay">$0.00</span>
            </div>
          </div>
          <div class="bottom">
            *State and other taxes are not included
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>