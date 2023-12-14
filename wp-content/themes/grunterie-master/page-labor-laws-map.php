<?php
/*
Template Name: Labor Laws Map
*/
get_header(); ?>

<section class="labor-laws-map">
    <div class="hero without-picture ">
        <div class="row">
            <div class="columns hero-text-col small">
                <div class="text-center">
                    <h1><?php the_field('h1_headline'); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="columns">
            
            <div class="select-container">
                    <select name="state">
                        <option hidden disabled selected>Select a state</option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District of Columbia</option>
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
                    <p>And don't forget to grab your federal posters here.</p>
                </div>
            
            <div class="map-container">
                
                <div id="map" style="width: 300px"></div>
                <?php  if( get_field('hi_description')): ?>
                    <div class="state-description HI">
                    <div class="d-flex">
                        <div class="state-name">Hawaii</div>
                        <div class="initials">HI</div>
                    </div>
                    <?php the_field('hi_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('ak_description')): ?>
                <div class="state-description AK">
                    <div class="d-flex">
                        <div class="state-name">Alaska</div>
                        <div class="initials">AK</div>
                    </div>
                    <?php the_field('ak_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('ca_description')): ?>
                <div class="state-description CA">
                    <div class="d-flex">
                        <div class="state-name">California</div>
                        <div class="initials">CA</div>
                    </div>
                    <?php the_field('ca_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('nv_description')): ?>
                <div class="state-description NV">
                    <div class="d-flex">
                        <div class="state-name">Nevada</div>
                        <div class="initials">NV</div>
                    </div>
                    <?php the_field('nv_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('or_description')): ?>
                <div class="state-description OR">
                    <div class="d-flex">
                        <div class="state-name">Oregon</div>
                        <div class="initials">OR</div>
                    </div>
                    <?php the_field('or_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('wa_description')): ?>
                <div class="state-description WA">
                    <div class="d-flex">
                        <div class="state-name">Washington</div>
                        <div class="initials">WA</div>
                    </div>
                    <?php the_field('wa_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('id_description')): ?>
                <div class="state-description ID">
                    <div class="d-flex">
                        <div class="state-name">Idaho</div>
                        <div class="initials">ID</div>
                    </div>
                    <?php the_field('id_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('mt_description')): ?>
                <div class="state-description MT">
                    <div class="d-flex">
                        <div class="state-name">Montana</div>
                        <div class="initials">MT</div>
                    </div>
                    <?php the_field('mt_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('wy_description')): ?>
                <div class="state-description WY">
                    <div class="d-flex">
                        <div class="state-name">Wyoming</div>
                        <div class="initials">WY</div>
                    </div>
                    <?php the_field('wy_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('ut_description')): ?>
                <div class="state-description UT">
                    <div class="d-flex">
                        <div class="state-name">Utah</div>
                        <div class="initials">UT</div>
                    </div>
                    <?php the_field('ut_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('az_description')): ?>
                <div class="state-description AZ">
                    <div class="d-flex">
                        <div class="state-name">Arizona</div>
                        <div class="initials">AZ</div>
                    </div>
                    <?php the_field('az_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('co_description')): ?>
                <div class="state-description CO">
                    <div class="d-flex">
                        <div class="state-name">Colorado</div>
                        <div class="initials">CO</div>
                    </div>
                    <?php the_field('co_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('nm_description')): ?>
                <div class="state-description NM">
                    <div class="d-flex">
                        <div class="state-name">New Mexico</div>
                        <div class="initials">NM</div>
                    </div>
                    <?php the_field('nm_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('tx_description')): ?>
                <div class="state-description TX">
                    <div class="d-flex">
                        <div class="state-name">Texas</div>
                        <div class="initials">TX</div>
                    </div>
                    <?php the_field('tx_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('ok_description')): ?>
                <div class="state-description OK">
                    <div class="d-flex">
                        <div class="state-name">Oklahoma</div>
                        <div class="initials">OK</div>
                    </div>
                    <?php the_field('ok_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('ks_description')): ?>
                <div class="state-description KS">
                    <div class="d-flex">
                        <div class="state-name">Kansas</div>
                        <div class="initials">KS</div>
                    </div>
                    <?php the_field('ks_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('ne_description')): ?>
                <div class="state-description NE">
                    <div class="d-flex">
                        <div class="state-name">Nebraska</div>
                        <div class="initials">NE</div>
                    </div>
                    <?php the_field('ne_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('se_description')): ?>
                <div class="state-description SD">
                    <div class="d-flex">
                        <div class="state-name">South Dakota</div>
                        <div class="initials">SD</div>
                    </div>
                    <?php the_field('se_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('nd_description')): ?>
                <div class="state-description ND">
                    <div class="d-flex">
                        <div class="state-name">North Dakota</div>
                        <div class="initials">ND</div>
                    </div>
                    <?php the_field('nd_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('mn_description')): ?>
                <div class="state-description MN">
                    <div class="d-flex">
                        <div class="state-name">Minnesota</div>
                        <div class="initials">MN</div>
                    </div>
                    <?php the_field('mn_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('ia_description')): ?>
                <div class="state-description IA">
                    <div class="d-flex">
                        <div class="state-name">Iowa</div>
                        <div class="initials">IA</div>
                    </div>
                    <?php the_field('ia_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('wi_description')): ?>
                <div class="state-description WI">
                    <div class="d-flex">
                        <div class="state-name">Wisconsin</div>
                        <div class="initials">WI</div>
                    </div>
                    <?php the_field('wi_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('il_description')): ?>
                <div class="state-description IL">
                    <div class="d-flex">
                        <div class="state-name">Illinois</div>
                        <div class="initials">IL</div>
                    </div>
                    <?php the_field('il_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('mo_description')): ?>
                <div class="state-description MO">
                    <div class="d-flex">
                        <div class="state-name">Missouri</div>
                        <div class="initials">MO</div>
                    </div>
                    <?php the_field('mo_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('ar_description')): ?>
                <div class="state-description AR">
                    <div class="d-flex">
                        <div class="state-name">Arkansas</div>
                        <div class="initials">AR</div>
                    </div>
                    <?php the_field('ar_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('la_description')): ?>
                <div class="state-description LA">
                    <div class="d-flex">
                        <div class="state-name">Louisiana</div>
                        <div class="initials">LA</div>
                    </div>
                    <?php the_field('la_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('ms_description')): ?>
                <div class="state-description MS">
                    <div class="d-flex">
                        <div class="state-name">Mississippi</div>
                        <div class="initials">MS</div>
                    </div>
                    <?php the_field('ms_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('al_description')): ?>
                <div class="state-description AL">
                    <div class="d-flex">
                        <div class="state-name">Alabama</div>
                        <div class="initials">AL</div>
                    </div>
                    <?php the_field('al_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('tn_description')): ?>
                <div class="state-description TN">
                    <div class="d-flex">
                        <div class="state-name">Tennessee</div>
                        <div class="initials">TN</div>
                    </div>
                    <?php the_field('tn_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('ky_description')): ?>
                <div class="state-description KY">
                    <div class="d-flex">
                        <div class="state-name">Kentucky</div>
                        <div class="initials">KY</div>
                    </div>
                    <?php the_field('ky_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('in_description')): ?>
                <div class="state-description IN">
                    <div class="d-flex">
                        <div class="state-name"> Indiana</div>
                        <div class="initials">IN</div>
                    </div>
                    <?php the_field('in_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('mi_description')): ?>
                <div class="state-description MI">
                    <div class="d-flex">
                        <div class="state-name"> Michigan</div>
                        <div class="initials">MI</div>
                    </div>
                    <?php the_field('mi_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('oh_description')): ?>
                <div class="state-description OH">
                    <div class="d-flex">
                        <div class="state-name">Ohio</div>
                        <div class="initials">OH</div>
                    </div>
                    <?php the_field('oh_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('pa_description')): ?>
                <div class="state-description PA">
                    <div class="d-flex">
                        <div class="state-name"> Pennsylvania</div>
                        <div class="initials">PA</div>
                    </div>
                    <?php the_field('pa_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('ny_description')): ?>
                <div class="state-description NY">
                    <div class="d-flex">
                        <div class="state-name">New York</div>
                        <div class="initials">NY</div>
                    </div>
                    <?php the_field('ny_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('me_description')): ?>
                <div class="state-description ME">
                    <div class="d-flex">
                        <div class="state-name">Maine</div>
                        <div class="initials">ME</div>
                    </div>
                    <?php the_field('me_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('wv_description')): ?>
                <div class="state-description WV">
                    <div class="d-flex">
                        <div class="state-name">West Virginia</div>
                        <div class="initials">WV</div>
                    </div>
                    <?php the_field('wv_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('va_description')): ?>
                <div class="state-description VA">
                    <div class="d-flex">
                        <div class="state-name">Virginia</div>
                        <div class="initials">VA</div>
                    </div>
                    <?php the_field('va_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('nc_description')): ?>
                <div class="state-description NC">
                    <div class="d-flex">
                        <div class="state-name">North Carolina</div>
                        <div class="initials">NC</div>
                    </div>
                    <?php the_field('nc_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('sc_description')): ?>
                <div class="state-description SC">
                    <div class="d-flex">
                        <div class="state-name">South Carolina</div>
                        <div class="initials">SC</div>
                    </div>
                    <?php the_field('sc_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('ga_description')): ?>
                <div class="state-description GA">
                    <div class="d-flex">
                        <div class="state-name">Georgia</div>
                        <div class="initials">GA</div>
                    </div>
                    <?php the_field('ga_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('fl_description')): ?>
                <div class="state-description FL">
                    <div class="d-flex">
                        <div class="state-name">Florida</div>
                        <div class="initials">FL</div>
                    </div>
                    <?php the_field('fl_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('nh_description')): ?>
                <div class="state-description NH">
                    <div class="d-flex">
                        <div class="state-name">New Hampshire</div>
                        <div class="initials">NH</div>
                    </div>
                    <?php the_field('nh_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('vt_description')): ?>
                <div class="state-description VT">
                    <div class="d-flex">
                        <div class="state-name">Vermont</div>
                        <div class="initials">VT</div>
                    </div>
                    <?php the_field('vt_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('ma_description')): ?>
                <div class="state-description MA">
                    <div class="d-flex">
                        <div class="state-name">Massachusetts</div>
                        <div class="initials">MA</div>
                    </div>
                    <?php the_field('ma_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('ct_description')): ?>
                <div class="state-description CT">
                    <div class="d-flex">
                        <div class="state-name">Connecticut</div>
                        <div class="initials">CT</div>
                    </div>
                    <?php the_field('ct_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('ri_description')): ?>
                <div class="state-description RI">
                    <div class="d-flex">
                        <div class="state-name">Rhode Island</div>
                        <div class="initials">RI</div>
                    </div>
                    <?php the_field('ri_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('nj_description')): ?>
                <div class="state-description NJ">
                    <div class="d-flex">
                        <div class="state-name">New Jersey</div>
                        <div class="initials">NJ</div>
                    </div>
                    <?php the_field('nj_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('de_description')): ?>
                <div class="state-description DE">
                    <div class="d-flex">
                        <div class="state-name">Delaware</div>
                        <div class="initials">DE</div>
                    </div>
                    <?php the_field('de_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('md_description')): ?>
                <div class="state-description MD">
                    <div class="d-flex">
                        <div class="state-name">Maryland</div>
                        <div class="initials">MD</div>
                    </div>
                    <?php the_field('md_description'); ?>
                </div>
                <?php endif; ?>
                <?php  if( get_field('dc_description')): ?>
                <div class="state-description DC">
                    <div class="d-flex">
                        <div class="state-name">District of Columbia</div>
                        <div class="initials">DC</div>
                    </div>
                    <?php the_field('dc_description'); ?>
                </div>
                <?php endif; ?>
                
            </div>
            <div class="signup-bumper-section send-email-form text-center">
                <p><b><?php the_field('form_email_title'); ?></b></p>
                <form name="iterable_optin" action="//links.iterable.com/lists/publicAddSubscriberForm?publicIdString=b7db0538-8b4f-49ec-b2b1-b208d05b3a40" target="_blank" method="POST" class="email">
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
                            <option value="DC">District of Columbia</option>
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
            <div class="note"><p><?php the_field('form_email_note'); ?></p></div>
            <div><?php  the_content(); ?></div>
        </div>
    </div>
</section>




<?php get_footer(); ?>
