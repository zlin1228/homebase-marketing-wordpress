<?php
/*
Template Name: Free Time Card Calculator
*/
get_header(); ?>
  
<section class="time-card-calculator">
    <div class="row">
        <div class="columns">
            <div class="text-center">
                <div class="title"><b><?php echo get_field('headline'); ?></b><br><?php echo get_field('subheadline'); ?></div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Day</th>
                        <th>Starting Time</th>
                        <th>Ending Time</th>
                        <th>Break Estimation</th>
                        <th>Total Hours</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="day-container">
                        <td class="day">Monday</td>
                        <td class="starting">
                            <input value="00" class="hour" type="text">:<input value="00" class="minutes" type="text">
                            <div class="indicator">
                                <input type="hidden" value="00">
                                <a href="#" class="am active">AM</a>
                                <a href="#" class="pm">PM</a>
                            </div>
                        </td>
                        <td class="ending">
                            <input value="00" class="hour" type="text">:<input value="00" class="minutes" type="text">
                            <div class="indicator">
                                <input type="hidden" value="00">
                                <a href="#" class="am active">AM</a>
                                <a href="#" class="pm">PM</a>
                            </div>
                        </td>
                        <td class="break">
                            <input value="00" class="hour" type="text">:<input value="00" class="minutes" type="text">
                        </td>
                        <td><input type="hidden" value="00" class="totalinput"><div class="total">0.00</div> </td>
                    </tr>
                    <tr class="day-container">
                        <td class="day">Tuesday</td>
                        <td class="starting">
                            <input value="00" class="hour" type="text">:<input value="00" class="minutes" type="text">
                            <div class="indicator">
                                <input type="hidden" value="00">
                                <a href="#" class="am active">AM</a>
                                <a href="#" class="pm">PM</a>
                            </div>
                        </td>
                        <td class="ending">
                            <input value="00" class="hour" type="text">:<input value="00" class="minutes" type="text">
                            <div class="indicator">
                                <input type="hidden" value="00">
                                <a href="#" class="am active">AM</a>
                                <a href="#" class="pm">PM</a>
                            </div>
                        </td>
                        <td class="break">
                            <input value="00" class="hour" type="text">:<input value="00" class="minutes" type="text">
                        </td>
                        <td><input type="hidden" value="00" class="totalinput"><div class="total">0.00</div>
                        </td>
                    </tr>
                    <tr class="day-container">
                        <td class="day">Wednesday</td>
                        <td class="starting">
                            <input value="00" class="hour" type="text">:<input value="00" class="minutes" type="text">
                            <div class="indicator">
                                <input type="hidden" value="00">
                                <a href="#" class="am active">AM</a>
                                <a href="#" class="pm">PM</a>
                            </div>
                        </td>
                        <td class="ending">
                            <input value="00" class="hour" type="text">:<input value="00" class="minutes" type="text">
                            <div class="indicator">
                                <input type="hidden" value="00">
                                <a href="#" class="am active">AM</a>
                                <a href="#" class="pm">PM</a>
                            </div>
                        </td>
                        <td class="break">
                            <input value="00" class="hour" type="text">:<input value="00" class="minutes" type="text">
                        </td>
                        <td><input type="hidden" value="00" class="totalinput"><div class="total">0.00</div>
                        </td>
                    </tr>
                    <tr class="day-container">
                        <td class="day">Thursday</td>
                        <td class="starting">
                            <input value="00" class="hour" type="text">:<input value="00" class="minutes" type="text">
                            <div class="indicator">
                                <input type="hidden" value="00">
                                <a href="#" class="am active">AM</a>
                                <a href="#" class="pm">PM</a>
                            </div>
                        </td>
                        <td class="ending">
                            <input value="00" class="hour" type="text">:<input value="00" class="minutes" type="text">
                            <div class="indicator">
                                <input type="hidden" value="00">
                                <a href="#" class="am active">AM</a>
                                <a href="#" class="pm">PM</a>
                            </div>
                        </td>
                        <td class="break">
                            <input value="00" class="hour" type="text">:<input value="00" class="minutes" type="text">
                        </td>
                        <td><input type="hidden" value="00" class="totalinput"><div class="total">0.00</div>
                        </td>
                    </tr>
                    <tr class="day-container">
                        <td class="day">Friday</td>
                        <td class="starting">
                            <input value="00" class="hour" type="text">:<input value="00" class="minutes" type="text">
                            <div class="indicator">
                                <input type="hidden" value="00">
                                <a href="#" class="am active">AM</a>
                                <a href="#" class="pm">PM</a>
                            </div>
                        </td>
                        <td class="ending">
                            <input value="00" class="hour" type="text">:<input value="00" class="minutes" type="text">
                            <div class="indicator">
                                <input type="hidden" value="00">
                                <a href="#" class="am active">AM</a>
                                <a href="#" class="pm">PM</a>
                            </div>
                        </td>
                        <td class="break">
                            <input value="00" class="hour" type="text">:<input value="00" class="minutes" type="text">
                        </td>
                        <td><input type="hidden" value="00" class="totalinput"><div class="total">0.00</div>
                        </td>
                    </tr>
                    <tr class="day-container">
                        <td class="day">Saturday</td>
                        <td class="starting">
                            <input value="00" class="hour" type="text">:<input value="00" class="minutes" type="text">
                            <div class="indicator">
                                <input type="hidden" value="00">
                                <a href="#" class="am active">AM</a>
                                <a href="#" class="pm">PM</a>
                            </div>
                        </td>
                        <td class="ending">
                            <input value="00" class="hour" type="text">:<input value="00" class="minutes" type="text">
                            <div class="indicator">
                                <input type="hidden" value="00">
                                <a href="#" class="am active">AM</a>
                                <a href="#" class="pm">PM</a>
                            </div>
                        </td>
                        <td class="break">
                            <input value="00" class="hour" type="text">:<input value="00" class="minutes" type="text">
                        </td>
                        <td><input type="hidden" value="00" class="totalinput"><div class="total">0.00</div>
                        </td>
                    </tr>
                    <tr class="day-container">
                        <td class="day">Sunday</td>
                        <td class="starting">
                            <input value="00" class="hour" type="text">:<input value="00" class="minutes" type="text">
                            <div class="indicator">
                                <input type="hidden" value="00">
                                <a href="#" class="am active">AM</a>
                                <a href="#" class="pm">PM</a>
                            </div>
                        </td>
                        <td class="ending">
                            <input value="00" class="hour" type="text">:<input value="00" class="minutes" type="text">
                            <div class="indicator">
                                <input type="hidden" value="00">
                                <a href="#" class="am active">AM</a>
                                <a href="#" class="pm">PM</a>
                            </div>
                        </td>
                        <td class="break">
                            <input value="00" class="hour" type="text">:<input value="00" class="minutes" type="text">
                        </td>
                        <td><input type="hidden" value="00" class="totalinput"><div class="total">0.00</div>
                        </td>
                    </tr>

                </tbody>
            </table>
            <div class="calculate-end">
                <div class="signup-bumper-section send-email-form">
                    <?php if (method_exists('Ninja_Forms', "display")) { Ninja_Forms()->display( intval(get_field('email_form_id')) ); } ?>
                </div>
                <a href="#" class="print-btn" onclick="window.print();return false;">Print</a>
                <a href="#" class="clear-btn">Clear all</a>
                <div class="result-hours">
                    <p>Total Hours</p>
                    <div class="total-hours">0.00</div> 
                </div>
            </div>
        </div>
    </div>
</section>
<section class="calculator-learn-more">
    <div class="row">
        <div class="columns large-5">
            <div class="title"><b><?php echo get_field('section_title'); ?></b><br><?php echo get_field('section_subtitle'); ?></div>
            <a href="<?php echo get_field('section_link'); ?>" class="lnk">Learn more</a>
        </div>
        <div class="columns large-7">
            <img src="<?php echo get_field('section_image'); ?>" alt="Time Clock App" width="550" />
        </div>
    </div>
</section>
<?php if(get_field('show_bottom_content') == true): ?>
<section class="section bottom-content">
    <div class="row">
        <div class="columns large-12">
            <?php echo get_field('bottom_content'); ?>
        </div>        
    </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>
