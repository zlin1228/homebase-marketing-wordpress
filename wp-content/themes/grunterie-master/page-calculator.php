<?php
/*
Template Name: Calculator Download
*/
get_header(); ?>

<section class="calculator-download">
    <div class="bg">
        <?php
        $hero = get_field('hero');
        if( $hero ): ?>

        <div class="hero ">
            <div class="row">
                <div class="columns text-center">
                    <h1><?php echo $hero['title']; ?></h1>
                </div>
                <div class="columns large-3 text-center">
                    <img src="<?php echo esc_url( $hero['image'] ); ?>" />
                </div>
                <div class="columns large-5">
                    <p><?php echo $hero['caption']; ?></p>
                    <?php if(strlen($hero['download_button_url']) > 0): ?>
                    <p><a class="button js-ga-tracking-event" target="_blank" href="<?php echo $hero['download_button_url']; ?>"><?php echo $hero['download_button_ext']; ?></a></p>
                    <?php endif; ?>                    
                    <?php if(strlen($hero['form_email_list_id']) > 0): ?>
                    <p><span class="line">line</span></p>
                    <p><?php echo $hero['form_email_caption']; ?></p>
                    <div class="send-email-form">
                        <form name="iterable_optin" action="//links.iterable.com/lists/publicAddSubscriberForm?publicIdString=<?php echo $hero['form_email_list_id']; ?>" target="_blank" method="POST" class="email">
                            <input type="text" class="text-wrap" name="email" size="22" onfocus="if(this.value===this.defaultValue){this.value='';}" onblur="if(this.value===''){this.value=this.defaultValue;}" value="Enter your email">
                            <input type="submit" class="submit-wrap" value="Submit">
                        </form>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <?php endif; ?>

        <?php if( have_rows('table_container') ): ?>
            <?php while( have_rows('table_container') ): the_row(); ?>

        <div class="minimum-wages">
            <div class="row">
                <div class="columns text-center">
                    <table>
                        <thead>
                            <tr>
                                <th colspan="3">
                                    <?php the_sub_field('table_title'); ?>
                                </th>
                            </tr>
                        </thead>

                        <?php if( have_rows('table') ): ?>
                            <tbody>
                                <?php while( have_rows('table') ): the_row(); ?>
                                        <tr>
                                            <?php if( have_rows('row') ): ?>
                                                 <?php while( have_rows('row') ): the_row(); ?>
                                                    <td>
                                                        <?php  
                                                         $link = get_sub_field('state'); 
                                                         $link_target = $link['target'] ? $link['target'] : '_self';
                                                        ?>
                                                        <a href="<?php echo esc_url( $link['url']); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html( $link['title'] ); ?></a>
                                                    </td>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </tr>
                                <?php endwhile; ?>
                            </tbody>
                        <?php endif; ?>
                        <tfoot>
                            <tr>
                                <th colspan="3">
                                </th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

            <?php endwhile; ?>
        <?php endif; ?>

        <?php
        $taxes = get_field('taxes');
        if( $taxes ): ?>

        <div class="taxes ">
            <div class="row">
                <div class="columns text-center">
                    <h2><?php echo $taxes['taxes_title']; ?></h2>
                </div>
                <div class="columns large-4 text-left">
                    <?php echo $taxes['first_column']; ?>
                </div>
                <div class="columns large-4 text-left">
                    <?php echo $taxes['second_column']; ?>
                </div>
            </div>
        </div>

        <?php endif; ?>
    </div>
    <?php
        $subscription = get_field('subscription');
        if( $subscription ): ?>
        <div class="row">
        <div class="columns text-center">
            <h2><?php echo $subscription['subscription_title']; ?></h2>
            <h3><?php echo $subscription['subscription_subtitle']; ?></h3>
        </div>
        <div class="columns">
            <div class="signup-bumper-section send-email-form text-center">
                <form name="iterable_optin" action="//links.iterable.com/lists/publicAddSubscriberForm?publicIdString=<?php echo $subscription['iterable_subscription_list_id']; ?>" target="_blank" method="POST" class="email">
                    <input type="text" name="email" size="22" onfocus="if(this.value===this.defaultValue){this.value='';}" onblur="if(this.value===''){this.value=this.defaultValue;}" placeholder="Enter your email">
                    <select name="location_state" onfocus="if(this.value===this.defaultValue){this.value='';}" onblur="if(this.value===''){this.value=this.defaultValue;}">
                        <option hidden disabled selected>Select a state</option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District Of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option> 
                    </select>
                    <input type="submit" value="Submit">
                </form>
            </div>          
        </div>
    </div>          
    <?php endif; ?>
</section>
<script>
    window.addEventListener( 'load', function () {
        jQuery('.js-ga-tracking-event').on('click', function(e) {
            console.log("Tracking GA Event");
            <?php echo $hero['ga_tracking_code_download']; ?>
        })
    });
</script>



<?php get_footer(); ?>
