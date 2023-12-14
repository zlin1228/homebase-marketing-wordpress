<?php
/*
Template Name: Schedule Maker
*/
get_header(); ?>

<section class="schedule-hero"> 
  <div class="row">
    <div class="columns text-center">
      <h2><strong><?php the_field('h1_headline'); ?></strong><br><?php the_field('h2_headline'); ?></h2>
        <p><?php the_content()?></p>
    </div>
  </div>
</section>

<section class="schedule-maker">
    <div class="row">
        <div class="columns">
            <div class="schedule-title">
                Create a schedule for your team
                <div class="landscape"><img width="50" src="<?php echo get_template_directory_uri(); ?>/img/landscape.png"> Flip your phone for a better view</div>
            </div>
            <div class="weekly-calendar">
                <div class="tool-tip">Add people to your schedule here.</div>
                <div class="gantt">
                    <div class="gantt__row gantt__row--hours">
                        <div class="gantt__row-first">Day</div>
                        <span>9am</span><span>10am</span><span>11am</span>
                        <span>12pm</span><span>1pm</span><span>2pm</span>
                        <span>3pm</span><span>4pm</span><span>5pm</span>
                    </div>
                    <div class="gantt__row day">
                        <div class="gantt__row-first">
                            Mon<span class="hidden-xs">day </span><a href="#" class="add-btn" data-day="1">Add</a>
                        </div>
                        <ul class="gantt__row-bars"></ul>
                    </div>
                    <div class="gantt__row day">
                        <div class="gantt__row-first">
                            Tue<span class="hidden-xs">sday </span> <a href="#" class="add-btn" data-day="2">Add</a>
                        </div>
                        <ul class="gantt__row-bars"></ul>
                    </div>
                    <div class="gantt__row day">
                        <div class="gantt__row-first">
                            Wed<span class="hidden-xs">nesday </span> <a href="#" class="add-btn" data-day="3">Add</a>
                        </div>
                        <ul class="gantt__row-bars"></ul>
                    </div>
                    <div class="gantt__row day">
                        <div class="gantt__row-first">
                            Thu<span class="hidden-xs">rsday </span> <a href="#" class="add-btn" data-day="4">Add</a>
                        </div>
                        <ul class="gantt__row-bars"></ul>
                    </div>
                    <div class="gantt__row day">
                        <div class="gantt__row-first">
                            Fri<span class="hidden-xs">day </span> <a href="#" class="add-btn" data-day="5">Add</a>
                        </div>
                        <ul class="gantt__row-bars"></ul>
                    </div>
                    <div class="gantt__row day">
                        <div class="gantt__row-first">
                            Sat<span class="hidden-xs">urday </span> <a href="#" class="add-btn" data-day="6">Add</a>
                        </div>
                        <ul class="gantt__row-bars"></ul>
                    </div>
                    <div class="gantt__row day">
                        <div class="gantt__row-first">
                            Sun<span class="hidden-xs">day </span> <a href="#" class="add-btn" data-day="7">Add</a>
                        </div>
                        <ul class="gantt__row-bars"></ul>
                    </div>
                </div>   
                <div class="schedule-editor">
                    <a class="close-editor" href="#"></a>
                    <div class="title">New shift</div>
                    <!--<select id="people">
                      <option value="Marcelo Angel">Marcelo Angel</option>
                      <option value="Abby James">Abby James</option>
                      <option value="Leandro Longo">Leandro Longo</option>
                    </select>-->
                    <select class="form-control js-example-tags" id="people"></select>
                    <div class="edit-hours">
                        <select disabled id="from" name="from">
                            <option selected value="1">9:00 AM</option>
                            <option value="2">10:00 AM</option>
                            <option value="3">11:00 AM</option>
                            <option value="4">12:00 PM</option>
                            <option value="5">1:00 PM</option>
                            <option value="6">2:00 PM</option>
                            <option value="7">3:00 PM</option>
                            <option value="8">4:00 PM</option>
                        </select>
                        <p> - </p>
                        <select disabled id="to" name="to">
                            <option selected value="2">10:00 AM</option>
                            <option value="3">11:00 AM</option>
                            <option value="4">12:00 PM</option>
                            <option value="5">1:00 PM</option>
                            <option value="6">2:00 PM</option>
                            <option value="7">3:00 PM</option>
                            <option value="8">4:00 PM</option>
                            <option value="9">5:00 PM</option>
                        </select>
                    </div>
                    <div class="edit-bottom">
                        <input id="role" type="text" placeholder="Job or task">
                         <select id="color" name="color">
                            <option value="gray" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/color-gray.png"></option>
                            <option value="green" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/color-green.png"></option>
                            <option value="blue" selected="selected" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/color-blue.png"></option>
                            <option value="red" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/color-red.png"></option>
                        </select>
                    </div>
                    <div class="buttons">
                        <a href="#" class="delete-btn">Delete</a>
                        <a href="#" class="save-btn disabled">Save</a>
                    </div>
                </div>
            </div>
            <div class="schedule-end">
                    <div class="send-email-form">
                        <?php if (method_exists('Ninja_Forms', "display")) { Ninja_Forms()->display( intval(get_field('form_email_schedule_id')) ); } ?>
                    </div>
                    <a href="#" class="download-btn">Download</a>
                    <a href="#" class="print-btn">Print</a>
                    <a href="#" class="clear-btn">Clear all</a>
                </div>
        </div>    
    </div>
</section>

<?php
$columns = get_field('two_columns');
if( $columns ): ?>

    <section class="two-columns">
        <div class="row">
            <div class="columns medium-5 description">
                <h1><?php echo $columns['title']; ?></h1>
                <?php echo $columns['description'] ; ?>
            </div>
             <div class="columns medium-7">
                 <img src="<?php echo esc_url( $columns['media'] ); ?>">
            </div>
        </div>
    </section>

<?php endif; ?>

<?php
$bottom = get_field('bottom');
if( $bottom ): ?>

    <section class="bottom">
        <div class="row">
            <div class="columns text-center">
                <h1><?php echo $bottom['title']; ?></h1>
                <?php echo $bottom['text'] ; ?>
            </div>
        </div>
    </section>

<?php endif; ?>


<?php
$modal = get_field('modal');
if( $modal ): ?>

    <section class="schedule-modal">
        <div class="background"></div>
        <div class="content">
            <div class="modal-image">
                <img src="<?php echo esc_url( $modal['image'] ); ?>">
            </div>
            <div class="modal-description">
                <a class="close-modal" href="#"></a>
                <h1><?php echo $modal['title']; ?></h1>
                <p><?php echo $modal['description'] ; ?></p>
                <a href="<?php echo esc_url( $modal['button']['url'] ); ?>" class="btn"><?php echo esc_html( $modal['button']['title']); ?></a>
                <a href="<?php echo esc_url( $modal['link']['url'] ); ?>" class="lnk"><?php echo esc_html( $modal['link']['title']); ?></a>
            </div>
        </div>
    </section>

<?php endif; ?>
<?php
    $modal = get_field('subscription_modal');
    if( $modal['iterable_subscription_list_id'] ): ?>

    <div class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal-title" aria-describedby="modal-subtitle" data-remodal-options="hashTracking: false, closeOnEscape: true, closeOnOutsideClick: true">
            <div class="row">
                    <h2 id="modal-title"><?php echo $modal['modal_title']; ?></h2>
                    <p id="modal-subtitle"><?php echo $modal['modal_subtitle']; ?></p>
                    
                    <div class="send-email-form">
                            <form name="modal_form" action="" method="POST" class="email">
                                    <div class="row">
                                            <div class="columns medium-8">
                                                    <input type="email" class="text-wrap" id="modal-email" name="email" size="22" required="required" aria-required="true" onfocus="if(this.value===this.defaultValue){this.value='';}" onblur="if(this.value===''){this.value=this.defaultValue;}" value="Enter your email">
                                            </div>
                                            <div class="columns medium-4">
                                                    <input type="submit" class="submit-wrap" value="<?php echo ( $modal['submit_button_text']) ? $modal['submit_button_text'] : 'Submit' ?>">
                                            </div>
                                    </div>
                            </form>
                    </div>
            </div>
    </div>

    <script>
            var iterablePostUrl = "//links.iterable.com/lists/publicAddSubscriberForm?publicIdString=<?php echo $modal['iterable_subscription_list_id']; ?>";
            
            function postSubmitIterableForm() {
                var alreadySubmittedEmail = (localStorage.getItem('schedule-maker-submited-email') == 'true');

                if(!alreadySubmittedEmail) {
                    jQuery.post(iterablePostUrl, jQuery('.send-email-form form').serialize(),  function(response) {
                        console.log("Posting form from ninja to iterable");
                        console.log(response);
                        localStorage.setItem('schedule-maker-submited-email', true);
                        console.log("Submited Iterable from email schedule button");
                    });
                }
                
            }
            window.postSubmitIterableForm = postSubmitIterableForm;

            jQuery(document).ready(function () {         
                
                <?php if( $modal['iterable_subscription_list_id'] ): ?>
                    jQuery('form[name="modal_form"]').submit(function(e) {
                        e.preventDefault();
                        var postAction = jQuery('.remodal[data-remodal-id=modal]').data('post-action');
                        console.log("Post ActionL: " + postAction);
                        jQuery.post(iterablePostUrl, jQuery('form[name="modal_form"]').serialize(),  function(response) {
                            localStorage.setItem('schedule-maker-submited-email', true);
                            var modal = jQuery('.remodal[data-remodal-id=modal]').remodal();
                            modal.close();
                            if(postAction == 'print') {
                                console.log("Post action PRINT");
                                window.print();
                                return false;
                            } else if(postAction == 'download') {
                                console.log("Post action DOWNLOAD");
                                window.downloadSchedule();
                            }
                            
                        });
                    });
                        

                <?php endif; ?>
            });
    </script>
    <?php endif; ?>
<?php get_footer(); ?>
