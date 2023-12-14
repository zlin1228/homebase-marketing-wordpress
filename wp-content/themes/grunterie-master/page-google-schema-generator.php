<?php
/*
Template Name: Google Schema Generator
*/
get_header(); ?>

<section class="google-schema-generator">
    <div class="row">
        <div class="columns">
            <p class="purple">Create your custom event</p>
            <h2>Generate Event</h2>
            <p><?php the_field('description'); ?></p>

            <ul class="tabs">
              <li><a href="#" data-target="#tab-1" class="active">General Info</a></li>
              <li><a href="#" data-target="#tab-2">Tickets</a></li>
            </ul>


        </div>
    </div>
    <div class="row">
        <div class="columns large-6">
            <div class="tabs-container">
                <div id="tab-1" class="tab active">
                      <form>
                        <div class="input-container">
                            <?php
                                $input = get_field('event_name');
                                if( $input ): ?>
                                <label for="name"><?php echo $input['label']; ?></label>
                                <input id="name" name="name" type="text" placeholder="<?php echo $input['placeholder']; ?>">
                            <?php endif; ?>
                        </div>
                          <div class="input-container">
                              <?php
                                $input = get_field('event_streetAddress');
                                if( $input ): ?>
                            <label for="street-adress"><?php echo $input['label']; ?></label>
                            <input id="street-adress" name="street-adress" type="text" placeholder="<?php echo $input['placeholder']; ?>">
                              <?php endif; ?>
                        </div>
                          <div class="input-container half">
                              <?php
                                $input = get_field('event_addresslocality');
                                if( $input ): ?>
                            <label for="adress-locality"><?php echo $input['label']; ?></label>
                            <input id="adress-locality" name="adress-locality" type="text" placeholder="<?php echo $input['placeholder']; ?>">
                              <?php endif; ?>
                        </div>
                          <div class="input-container half">
                              <?php
                                $input = get_field('event_addressRegion');
                                if( $input ): ?>
                            <label for="adress-region"><?php echo $input['label']; ?> </label>
                            <input id="adress-region" name="adress-region" type="text" placeholder="<?php echo $input['placeholder']; ?>">
                              <?php endif; ?>
                        </div>
                          <div class="input-container half">
                              <?php
                                $input = get_field('event_postalCode');
                                if( $input ): ?>
                            <label for="postal-code"><?php echo $input['label']; ?></label>
                            <input id="postal-code" name="postal-code" type="text" placeholder="<?php echo $input['placeholder']; ?>">
                              <?php endif; ?>
                        </div>
                          <div class="input-container half">
                              <?php
                                $input = get_field('event_addressCountry');
                                if( $input ): ?>
                            <label for="adress-country"><?php echo $input['label']; ?></label>
                            <input id="adress-country" name="adress-country" type="text" placeholder="<?php echo $input['placeholder']; ?>">
                              <?php endif; ?>
                        </div>
                        <div class="input-container">
                            <?php
                                $input = get_field('event_locationName');
                                if( $input ): ?>
                            <label for="venue"><?php echo $input['label']; ?></label>
                            <input id="venue" name="venue" type="text" placeholder="<?php echo $input['placeholder']; ?>">
                            <?php endif; ?>
                        </div>
                        <div class="input-container half">
                            <?php
                                $input = get_field('event_startDate');
                                if( $input ): ?>
                            <label for="start"><?php echo $input['label']; ?></label>
                            <input id="start" name="start" type="text" placeholder="<?php echo $input['placeholder']; ?>">
                            <?php endif; ?>
                        </div>
                        <div class="input-container half">
                            <?php
                                $input = get_field('event_endDate');
                                if( $input ): ?>
                            <label for="end"><?php echo $input['label']; ?></label>
                            <input id="end" name="end" type="text" placeholder="<?php echo $input['placeholder']; ?>">
                            <?php endif; ?>
                        </div>
                        <div class="input-container">
                            <?php
                                $input = get_field('event_description');
                                if( $input ): ?>
                            <label for="description"><?php echo $input['label']; ?></label>
                            <textarea id="description" name="description" placeholder="<?php echo $input['placeholder']; ?>"></textarea>
                            <?php endif; ?>
                        </div>
                        <div class="input-container">
                            <?php
                                $input = get_field('event_image');
                                if( $input ): ?>
                            <label for="image"><?php echo $input['label']; ?></label>
                            <input id="image" name="image" type="text" placeholder="<?php echo $input['placeholder']; ?>">
                            <?php endif; ?>
                        </div>
                    </form>
                </div>
                <div id="tab-2" class="tab">
                   <form class="tickets">
                       <div class="ticket initial" data-ticket-id="0">
                           <div class="input-container">
                               <?php
                                $input = get_field('offers_name');
                                if( $input ): ?>
                                <label for="ticket-name"><?php echo $input['label']; ?></label>
                                <input id="ticket-name" name="ticket-name" type="text" placeholder="<?php echo $input['placeholder']; ?>">
                               <?php endif; ?>
                            </div>
                            <div class="input-container half">
                                <?php
                                $input = get_field('offers_availability');
                                if( $input ): ?>
                                <label for="availabilty"><?php echo $input['label']; ?></label>
                                <input id="availabilty" name="availabilty" type="text" placeholder="<?php echo $input['placeholder']; ?>">
                                <?php endif; ?>
                            </div>
                            <div class="input-container half">
                                <?php
                                $input = get_field('offers_validFrom');
                                if( $input ): ?>
                                <label for="valid"><?php echo $input['label']; ?></label>
                                <input id="valid" name="valid" type="text" placeholder="<?php echo $input['placeholder']; ?>">
                                <?php endif; ?>
                            </div>
                            <div class="input-container half">
                                <?php
                                $input = get_field('offers_price');
                                if( $input ): ?>
                                <label for="price"><?php echo $input['label']; ?></label>
                                <input id="price" name="price" type="text" placeholder="<?php echo $input['placeholder']; ?>">
                                <?php endif; ?>
                            </div>
                            <div class="input-container half">
                                <?php
                                $input = get_field('offers_priceCurrency');
                                if( $input ): ?>
                                <label for="currency"><?php echo $input['label']; ?></label>
                                <input id="currency" name="currency" type="text" placeholder="<?php echo $input['placeholder']; ?>">
                                <?php endif; ?>
                            </div>
                            <div class="input-container">
                                <?php
                                $input = get_field('offers_url');
                                if( $input ): ?>
                                <label for="ticket-url"><?php echo $input['label']; ?></label>
                                <input id="ticket-url" name="ticket-url" type="text" placeholder="<?php echo $input['placeholder']; ?>">
                                <?php endif; ?>
                            </div>
                            <div class="input-container">
                                <?php
                                $input = get_field('performer_PerformingGroup');
                                if( $input ): ?>
                                <label for="performer-group"><?php echo $input['label']; ?></label>
                                <input id="performer-group" name="performer-group" type="text" placeholder="<?php echo $input['placeholder']; ?>">
                                <?php endif; ?>
                            </div>
                           <div class="input-container">
                               <?php
                                $input = get_field('performer_Person');
                                if( $input ): ?>
                                <label for="performer-name"><?php echo $input['label']; ?></label>
                                <input id="performer-name" name="performer-name" type="text" placeholder="<?php echo $input['placeholder']; ?>">
                               <?php endif; ?>
                            </div>
                           <a href="#" class="add-ticket">Add another ticket</a>
                       </div>

                    </form>
                </div>
            </div>

        </div>
        <div class="columns large-6">
            <label>Code simulator</label>
            <pre>
                <code id="code-simulator" class="code-simulator">

                </code>
            </pre>
            <ul class="btn-list">
               <!--<li><a href="#" class="btn-mail">Email code</a></li>-->
                <li>
                    <div class="signup-bumper-section send-email-form">
                        <?php if (method_exists('Ninja_Forms', "display")) { Ninja_Forms()->display( intval(get_field('email_form_id')) ); } ?>
                    </div>
                </li>

                <li><a href="#" class="btn-copy" data-tooltip-text="Code copied!">Copy code</a></li>
            </ul>

        </div>
    </div>
     <div class="row description-below">
        <div class="columns">

            <p><?php the_field('description_below'); ?></p>

        </div>
    </div>
</section>

<?php get_footer(); ?>
