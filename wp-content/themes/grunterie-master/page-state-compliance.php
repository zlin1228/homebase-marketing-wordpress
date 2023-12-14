<?php
/*
Template Name: State Compliance
*/
get_header(); ?>

<section class="state-compliance">
    <div class="hero without-picture ">
        <div class="row">
            <div class="columns hero-text-col small">
                <div class="text-center">
                    <h1><?php the_field('h1_headline'); ?></h1>
                    <h2><?php the_field('h2_headline'); ?></h2>
                </div>
            </div>
        </div>
    </div>
    <?php
    $info = get_field('state_info');
    if( $info ): ?>
    <div class="col-2-section">
        <div class="row">
            <div class="columns large-6 text-center">
                <img src="<?php echo esc_url( $info['state_image'] ); ?>"/>
            </div>
            
            <div class="columns large-6">
                <?php echo $info['state_description']; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    

    <div class="wages-breaks">
        <div class="row">
            <div class="columns">
                <h2 class="text-center">Wages and Breaks</h2>
                <?php if( have_rows('wages_content')) : ?>
                <div class="content">

                       <?php while ( have_rows('wages_content') ) : the_row(); ?>

                        <div class="wages-column">
                            <div class="title"><?php the_sub_field('column_title'); ?></div>
                            <div class="number"><?php the_sub_field('number'); ?></div>
                            <div class="readmore" data-chars="165" ><?php the_sub_field('description');  ?></div>
                        </div>
                       <?php endwhile; ?>

                    
                    
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <?php
    $twocolumns = get_field('two_columns');
    if( $twocolumns ): ?>
    <div class="two-columns">
        <div class="row">
            <div class="columns large-6">
                <div class="columns-readmore" data-chars="500" >
                    <?php echo $twocolumns['first_column']; ?>
                </div>
            </div>
            
            <div class="columns large-6">
                <div class="columns-readmore" data-chars="500" >
                    <?php echo $twocolumns['second_column']; ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    
    <div class="leave-requirements">
        <div class="row">
            <div class="columns">
                <h2 class="text-center">Leave Requirements</h2>
                <?php if( have_rows('leave_requirements')) : ?>
                <div class="requirements-table">

                       <?php while ( have_rows('leave_requirements') ) : the_row(); ?>

                        <div class="requirement-row">
                            <div class="icon"><img width="40" src="<?php the_sub_field('icon'); ?>"></div>
                            <div class="requirement-subtitle"><?php the_sub_field('subtitle'); ?></div>
                            <div class="content"><?php the_sub_field('content');?></div>
                        </div>
                       <?php endwhile; ?>

                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <div class="hiring-firing">
        <div class="row">
            <div class="columns">
                <h2 class="text-center">Hiring, firing, and more</h2>
                
            </div>
            <?php if( have_rows('hiring_firing')) : ?>
            

                   <?php while ( have_rows('hiring_firing') ) : the_row(); ?>
                    <div class="columns large-4">
                        <div class="box">
                            <div class="hiring-subtitle"><?php the_sub_field('subtitle'); ?></div>
                            <div class="content"><div class="hiring-readmore" data-chars="180" ><?php the_sub_field('content');?></div></div>
                        </div>
                    </div>
                   <?php endwhile; ?>

            
            <?php endif; ?>
        </div>
    </div>
    
     <div class="additional-laws col-2-section">
        <div class="row">
            <div class="columns">
                <h2 class="text-center">Additional laws that may apply to you</h2>
                
            </div>
         </div>
        <?php if( have_rows('additional_laws')) : ?>


           <?php while ( have_rows('additional_laws') ) : the_row(); ?>
            <div class="row">
                <div class="columns large-4">
                    <div class="laws-subtitle"><?php the_sub_field('subtitle'); ?></div>
                </div>
                <div class="columns large-7">
                    <div class="box">
                        <div class="content"><?php the_sub_field('content');?></div>
                    </div>
                </div>
            </div>
           <?php endwhile; ?>


        <?php endif; ?>
    </div>
    
    <div class="subscription">
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
    </div>
    
     <div class="additional-resources">
        <?php
            $resources = get_field('additional_resources');
            if( $resources ): ?>
            <div class="row">
                <div class="columns large-4">
                    <div class="remember"><?php echo $resources['remember']; ?></div>
                </div>
                <div class="columns large-8">
                    <div class="content"><?php echo $resources['content']; ?></div>
                </div>
            </div>   
        <?php endif; ?>
    </div>
    
</section>

<?php get_footer(); ?>