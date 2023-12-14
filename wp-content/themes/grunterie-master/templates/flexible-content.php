<?php
/* Template name: Flexible content
 * Template version: V2
 * Updated By: Baljinder Singh
 * Date: Feb 25, 2020
 *  */
get_header();
?>

<script type="application/ld+json">
    {  
      "@context":"http://schema.org",
      "@type":"WebApplication",
      "name": "Homebase",
      "applicationCategory": "BusinessApplication",
      "datePublished": "2014-04-01T08:32:29-08:00",
      "description": "Free time tracking, employee scheduling, hiring, and team management tools for small (but mighty) businesses.",
      "operatingSystem":"Web platform, Windows, Mac OS X, Linux, iOS, Android",
      "url":"https://joinhomebase.com/",
      "offers": {
          "@type": "Offer",
          "price": "0",
          "priceCurrency": "USD"
			},
      "image": [
        "https://joinhomebase.com/wp-content/uploads/2020/02/timeclock-3-1-1-1.png",
        "https://joinhomebase.com/wp-content/uploads/2020/02/scheduling-3-2-1.png",
        "https://joinhomebase.com/wp-content/uploads/2020/05/hiring-on-2.png"
       ],
      "featureList":"https://joinhomebase.com/features/employee-scheduling/",
      "screenshot": "https://joinhomebase.com/wp-content/uploads/2020/02/scheduling-3-2-1.png",
      "softwareHelp": "https://joinhomebase.com/homebase-support/",
      "author":{  
          "@type":"Organization",
          "name":"Homebase",
          "url":"https://joinhomebase.com/",
          "logo":{
            "@type":"ImageObject",
            "url":"https://joinhomebase.com/wp-content/uploads/2020/05/homebase-logo-purple_proxnova.svg",
            "width":"256px",
            "height":"256px"
          }
      },
      "video":{  
          "@type":"VideoObject",
          "caption":"Getting started with Homebase",
          "thumbnailUrl":"https://img.youtube.com/vi/qmk18_LnLBU/maxresdefault.jpg",
          "contentUrl":"https://www.youtube.com/watch?v=qmk18_LnLBU",
          "name":"Free Employee Scheduling, Timesheets, Time Clock, Hiring, and Team Communication App | Homebase Demo",
          "description":"Homebase makes work easier for 100,000+ small (but mighty) businesses with everything they need to manage an hourly team: employee scheduling, time clocks, team communication, hiring, onboarding, and compliance. Learn more and sign up for free at joinhomebase.com.",
          "uploadDate":"2018-09-24"
      },
      "aggregateRating": {
         "@type": "AggregateRating",
         "ratingValue": "4.8",
         "reviewCount": "15821"
      },
      "review": [
        {
          "@type": "Review",
          "author":
          {
            "@type": "Person",
            "name": "Danny Del Campo"
          },
          "datePublished": "2020-06-10",
          "description": "User friendly yet has very advanced settings for those who need more control. Has options for location tracking, time cards are accurate, and able to track PTO simply.",
          "name": "Great scheduling and HR software for small business",
          "reviewRating": {
            "@type": "Rating",
            "bestRating": "5",
            "ratingValue": "5",
            "worstRating": "1"
          }
        },
        {
          "@type": "Review",
          "author": 
          {
            "@type": "Person",
            "name": "Samantha Powell"
          },
          "datePublished": "2019-04-18",
          "description": "This product is great for creating schedules and keeping track of staff. The phone app is a great way to see posted schedules, requested time off, and estimated pay!",
          "name": "Great product",
          "reviewRating": {
            "@type": "Rating",
            "bestRating": "5",
            "ratingValue": "5",
            "worstRating": "1"
          }
        }
      ]
    }
 </script>

<?php

/*
*
* FLEXIBLE CONTENT for New modules
*
* Developed By Hakuna
*
*/

if ( have_rows('flexible_content_new_modules') ) :

	while ( have_rows('flexible_content_new_modules') ) : the_row();

		if ( get_row_layout() == 'hero_fullwidth' ) : ?>


			<?php if (!get_sub_field('hide_widget')) : ?>

				<?php $scroll_anchor = get_sub_field('scroll_anchor'); ?>

				<div class="hero-fullwidth-section">

					<?php

					$logo       = get_sub_field('hero_fullwidth_logo');
					$subtext    = get_sub_field('hero_fullwidth_text');
					$subtitle   = get_sub_field('hero_fullwidth_subtitle');
					$bg_image   = get_sub_field('hero_fullwidth_image');

					?>

					<?php if ($bg_image) : ?>
						<div class="hero-content" style="background-image: url('<?php echo $bg_image['url']; ?>')">
							<div class="row">
								<div class="hero-logo">
									<img src="<?php echo $logo['url']; ?>" alto="<?php echo $logo['alt']; ?>">
								</div>
								<p><?php echo ($subtext); ?></p>
								<h3><?php echo ($subtitle); ?></h3>
							</div>
						</div>
					<?php endif; ?>

				</div>

			<?php endif;


		endif;


	endwhile;

endif; ?>


<?php
if ( have_rows('flexible_content') ) :

	while ( have_rows('flexible_content') ) : the_row();


		/* --------------------------------------------
			hero
		-------------------------------------------- */
		if ( get_row_layout() == 'flex_hero' ) : ?>


			<?php if (!get_sub_field('hide_widget')) :

				$scroll_anchor = get_sub_field('scroll_anchor');
				$hero_style    = get_sub_field('hero_style');

				// with picture
				if ($hero_style == 'with-picture') : ?>


					<?php
					$bg              = get_sub_field('background_image');
					$bg_pos          = get_sub_field('bg_horizontal_alignment');
					$col_classes     = (get_sub_field('text_position') == 'left') ? 'medium-7' : 'large-offset-6 medium-offset-5 medium-7';
					$height          = (get_sub_field('section_height')) ? get_sub_field('section_height') : 530;
					$hero_text_pos   = (get_sub_field('text_position') == 'left') ? 'hero-text-left' : 'hero-text-right';
					$text_color      = get_sub_field('text_color');
					$text_size       = get_sub_field('text_size');
					$headline        = get_sub_field('headline');
					$subheadline     = get_sub_field('subheadline');
					$sign_up         = get_sub_field('email_sign_up_form');
					$sign_up_action  = (get_sub_field('sign_up_action')) ? get_sub_field('sign_up_action') : 'https://app.joinhomebase.com/onboarding/sign-up';
					$sign_up_text    = (get_sub_field('sign_up_text')) ? get_sub_field('sign_up_text') : 'Get started';
					$button          = get_sub_field('button');
					$button_text     = get_sub_field('button_text');
					$button_link     = get_sub_field('button_link');
					$additional_text = get_sub_field('additional_text');
					$add_credit      = get_sub_field('add_image_credit');
					$credit_person   = get_sub_field('image_credit_person');
					$credit_text     = get_sub_field('image_credit_text');
					$credit_color    = get_sub_field('image_credit_color');
					?>

					<div class="hero with-picture <?php echo ($custom_classes = get_sub_field('custom_css_classes')) ? $custom_classes : ''; ?>"
						 <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>
						 style="background-image: url(<?php echo $bg; ?>); background-position: <?php echo $bg_pos; ?> top;"
					>
						<div class="row <?php echo $hero_text_pos ?>">
							<div class="columns large-6 hero-text-col <?php echo $col_classes; ?>"
								 style="height: <?php echo $height; ?>px;"
							>

								<div class="hero-text <?php echo $text_size; ?>"
									 style="color: <?php echo $text_color; ?>;"
								>
									<?php if ($headline) : ?>
										<h1><?php echo $headline; ?></h1>
									<?php endif; ?>

									<?php if ($subheadline) : ?>
										<h2><?php echo $subheadline; ?></h2>
									<?php endif; ?>

									<?php if ($sign_up) : ?>
										<form action="<?php echo $sign_up_action; ?>"
											  id="home-signup-form"
											  method="GET"
											  class="home-form"
										>

											<input class="homeform"
												   aria-label="email address"
												   type="email"
												   name="email"
												   placeholder="Email address"

												   />

											<input type="submit"
												   aria-label="submit"
												   id="create-account"
												   name="Submit"
												   class="primary-cta buttonsbn"

												   value="<?php echo $sign_up_text; ?>"
											/>
										</form>
									<?php endif; ?>

									<?php
$image = get_field( 'image' );

if( ! empty( $image )
	&& function_exists( 'get_rocket_option' )
	&& get_rocket_option( 'lazyload' )
	&& ! ( defined( 'DONOTROCKETOPTIMIZE' ) && DONOTROCKETOPTIMIZE )
) : ?>
	<img class="lazyload" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php elseif( ! empty( $image ) ) : ?>
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php endif; ?>



									<?php if ($button) : ?>
										<a href="<?php echo $button_link; ?>" class="hero-button">
											<?php echo $button_text; ?>
										</a>
									<?php endif; ?>

									<?php if ($additional_text) : ?>
										<div class="hero-additional-text">
											<?php echo $additional_text; ?>
										</div>
									<?php endif ?>
								</div>

							</div>

							<?php if ($add_credit) : ?>
								<div class="hero-image-credit"
									 style="color: <?php echo $credit_color; ?>;"
								>
									<?php echo ($credit_person) ? '<span>' . $credit_person . '</span>' : ''; ?>
									<?php echo ($credit_text) ? $credit_text : ''; ?>
								</div>
							<?php endif; ?>

						</div>
					</div>


				<?php // support hero
				elseif ($hero_style == 'support') : ?>


					<?php
					$bg                = get_sub_field('background_image');
					$bg_pos            = get_sub_field('bg_horizontal_alignment');
					$height            = (get_sub_field('section_height')) ? get_sub_field('section_height') : 530;
					$text_color        = get_sub_field('text_color');
					$text_size         = get_sub_field('text_size');
					$headline          = get_sub_field('headline');
					$subheadline       = get_sub_field('subheadline');
					$text_below_search = get_sub_field('text_below_search');
					$add_bitmoji       = get_sub_field('add_bitmoji');
					$bitmoji_image     = get_sub_field('bitmoji_image');
					$bitmoji_name      = get_sub_field('bitmoji_name');
					$bitmoji_position  = get_sub_field('bitmoji_position');
					?>

					<div class="hero support-hero <?php echo ($custom_classes = get_sub_field('custom_css_classes')) ? $custom_classes : ''; ?>"
						 <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>
						 style="background-image: url(<?php echo $bg; ?>); background-position: <?php echo $bg_pos; ?> top;"
					>
						<div class="row">
							<div class="columns large-6 large-offset-3 medium-8 medium-offset-2 hero-text-col"
								 style="height: <?php echo $height; ?>px;"
							>

								<div class="hero-text <?php echo $text_size; ?>"
									 style="color: <?php echo $text_color; ?>;"
								>
									<?php if ($headline) : ?>
										<h1 class="text-center"><?php echo $headline; ?></h1>
									<?php endif; ?>

									<?php if ($subheadline) : ?>
										<h2><?php echo $subheadline; ?></h2>
									<?php endif; ?>

									<form
										action="http://support.joinhomebase.com/hc/en-us/search/"
										method="GET"
										target="_blank"
										class="zendesk-search"
									>
										<input type="text" aria-label="How can we help you?" name="query">
										<input type="hidden" name="utf8" value="✓">
										<input type="hidden" name="commit" value="Search">
									</form>

									<?php if ($text_below_search) : ?>
										<div class="hero-support-text-below-search">
											<?php echo $text_below_search; ?>
										</div>
									<?php endif; ?>
								</div>

							</div>

							<?php
							// bitmoji
							if ($add_bitmoji) : ?>
								<div class="bitmoji">
									<div
										class="bitmoji-img"
										style="background-image: url(<?php echo $bitmoji_image; ?>);"
									></div>
									<div class="bitmoji-text">
										<span class="bitmoji-name">
											<?php echo $bitmoji_name; ?>
										</span>
										<span>
											<?php echo $bitmoji_position; ?>
										</span>
									</div>
								</div>
							<?php endif; ?>

						</div>
					</div>


				<?php // without picture
				elseif ($hero_style == 'without-picture') : ?>


					<?php
					$text_size     = get_sub_field('text_size');
					$headline      = get_sub_field('headline');
					$subheadline   = get_sub_field('subheadline');
					$second_subheadline   = get_sub_field('second_subheadline');
					$sign_up       = get_sub_field('email_sign_up_form');
					$sign_up_action  = (get_sub_field('sign_up_action')) ? get_sub_field('sign_up_action') : 'https://app.joinhomebase.com/onboarding/sign-up';
					$sign_up_text  = (get_sub_field('sign_up_text')) ? get_sub_field('sign_up_text') : 'Get Started';
					$button        = get_sub_field('button');
					$button_text   = get_sub_field('button_text');
					$button_link   = get_sub_field('button_link');
					?>

					<div class="hero without-picture <?php echo ($custom_classes = get_sub_field('custom_css_classes')) ? $custom_classes : ''; ?>" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
						<div class="row">
							<div class="columns hero-text-col <?php echo $text_size; ?>">
								<div class="text-center">
									<?php if ($headline) : ?>
										<h1><?php echo $headline; ?></h1>
									<?php endif; ?>

									<?php if ($subheadline) : ?>
										<h2><?php echo $subheadline; ?></h2>
									<?php endif; ?>

									<?php if ($second_subheadline) : ?>
										<h3><?php echo $second_subheadline; ?></h3>
									<?php endif; ?>

									<?php if ($sign_up) : ?>
										<form action="<?php echo $sign_up_action; ?>?fullname=$_GET['fullname']&email=$_GET['email']"
											  id="home-signup-form"
											  method="GET"
											  class="home-form"
										>
											<input class="homeform"
												   aria-label="email address"
												   type="email"
												   name="email"
												   placeholder="Email address"
											/>
											<input type="submit"
												   id="create-account"
												   name="Submit"
												   class="primary-cta buttonsbn"
												   value="<?php echo $sign_up_text; ?>"
											/>
										</form>
									<?php endif; ?>

									<?php if ($button) : ?>
										<a href="<?php echo $button_link; ?>" class="hero-button">
											<?php echo $button_text; ?>
										</a>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>


				<?php endif; ?>


				<?php
				// quote
				$add_quote  = get_sub_field('add_quote');
				$quote_text = get_sub_field('quote_text');
				$quote_note = get_sub_field('quote_note');

				if ($add_quote) : ?>
					<div class="hero-quote">
						<p>"<?php echo $quote_text; ?>"<?php echo ($quote_note) ? ' - <span>' . $quote_note . '</span>' : ''; ?></p>
					</div>
				<?php endif; ?>

			<?php endif; ?>


		<?php


		/* --------------------------------------------
			2 column
		-------------------------------------------- */
		elseif ( get_row_layout() == 'flex_2_column' ) : ?>


			<?php if (!get_sub_field('hide_widget')) : ?>

				<?php
				$scroll_anchor      = get_sub_field('scroll_anchor');
				$borders            = get_sub_field('borders');
				$reverse            = get_sub_field('reverse');
				$headline           = get_sub_field('headline');
				$subheadline        = get_sub_field('subheadline');
				$subheadline_link   = get_sub_field('subheadline_link');
				$text               = get_sub_field('text');
				$add_custom_list    = get_sub_field('add_custom_list');
				$learn_more         = get_sub_field('learn_more');
				$link_text          = (get_sub_field('link_text')) ? get_sub_field('link_text') : 'Learn more';
				$link_url           = get_sub_field('link_url');
				$button_text        = (get_sub_field('button_text')) ? get_sub_field('button_text') : 'Learn more';
				$button_link        = get_sub_field('button_link');
				$image              = get_sub_field('image');
				$image_link         = get_sub_field('image_link');
				$add_image_credit   = get_sub_field('add_image_credit');
				$image_credit_title = get_sub_field('image_credit_title');
				$image_credit_text  = get_sub_field('image_credit_text');
				$image_credit_color = get_sub_field('image_credit_color');
				$form_text      = (get_sub_field('sign_up_text')) ? get_sub_field('sign_up_text') : 'Start now for free';
				$form_link      = (get_sub_field('sign_up_action')) ? get_sub_field('sign_up_action') : 'https://app.joinhomebase.com/onboarding/sign-up';
				?>

				<div class="col-2-section <?php echo ($borders) ? 'col-2-borders' : ''; ?> <?php echo ($reverse) ? 'reverse' : ''; ?>" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
					<div class="row">

						<div class="columns large-5 col-2-left-col">
							<?php
							// headline
							if ($headline) :
								echo '<h2>' . $headline . '</h2>';
							endif;

							// subheadline
							if ($subheadline) :
								$sub_headline  = ($subheadline_link) ? '<a href="' . $subheadline_link . '">' : '';
								$sub_headline .= $subheadline;
								$sub_headline .= ($subheadline_link) ? '</a>' : '';

								echo '<h3>' . $sub_headline . '</h3>';
							endif;

							// text
							if ($text) : ?>
								<div class="col-2-text">
									<?php echo $text; ?>
								</div>
							<?php endif;

							// custom bullet list
							if ($add_custom_list && have_rows('custom_bullet_list')) : ?>
								<ul class="col-2-bullet-list">
									<?php while ( have_rows('custom_bullet_list') ) : the_row(); ?>

										<?php
										$headline = get_sub_field('headline');
										$text     = get_sub_field('text');
										?>

										<li>
											<?php if ($headline) : ?>
												<h4><?php echo $headline; ?></h4>
											<?php endif; ?>

											<?php echo $text; ?>
										</li>

									<?php endwhile; ?>
								</ul>
							<?php endif;

							// link/button/form
							if( $learn_more == 'form' ) : ?>
								<div class="page-template-flexible-home">
									<div class="signup-bumper-column">
									    <form action="<?php echo $form_link ?>?fullname=$_GET['fullname']&email=$_GET['email']"
									            id="home-signup-form-2"
									            method="GET"
									            class="home-form"
									    >
									        <input class="homeform"
									                aria-label="email address"
									                type="email"
									                name="email"
									                placeholder="Email Address"
									        />
									        <input type="submit"
									                id="create-account"
									                aria-label="submit"
									                name="Submit"
									                class="primary-cta buttonsbn"
									                value="<?php echo $form_text; ?>"
									        />
									    </form>
									</div>
								</div>
							<?php
							elseif ($learn_more) : ?>
								<div class="col-3-col-link">
									<a
										href="<?php echo ($learn_more == 'link') ? $link_url : $button_link; ?>"
										class="<?php echo ($learn_more == 'button') ? 'button' : ''; ?>"
									>
										<?php echo ($learn_more == 'link') ? $link_text : $button_text; ?>
									</a>
								</div>
							<?php endif; ?>
						</div>

						<?php
						// image
						if ($image) : ?>
							<div class="columns large-7 text-center col-2-right-col">
								<div class="col-2-img">
									<?php echo ($image_link) ? '<a href="' . $image_link . '">' : ''; ?>
									<img class="lazyload" alt="Screenshot App" data-src="<?php echo $image; ?>">
									<?php echo ($image_link) ? '</a>' : ''; ?>

									<?php if ($add_image_credit) : ?>
										<div class="col-2-image-credit"
											 style="color: <?php echo $image_credit_color; ?>;"
										>
											<?php echo ($image_credit_title) ? '<span>' . $image_credit_title . '</span>' : ''; ?>
											<?php echo ($image_credit_text) ? $image_credit_text : ''; ?>
										</div>
									<?php endif; ?>
								</div>
							</div>
						<?php endif; ?>

					</div>
				</div>

			<?php endif;


		/* --------------------------------------------
			3 column
		-------------------------------------------- */
		elseif ( get_row_layout() == 'flex_3_column' ) : ?>


			<?php if (!get_sub_field('hide_widget')) : ?>

				<?php
				$scroll_anchor        = get_sub_field('scroll_anchor');
				$add_border_to_bottom = get_sub_field('add_border_to_bottom');
				$add_border_to_top    = get_sub_field('add_border_to_top');
				?>

				<div class="col-3-section <?php echo ($extra_classes = get_sub_field('extra_css_classes')) ? $extra_classes : ''; ?> <?php echo ($add_border_to_bottom) ? 'support-bumper-section-border-bottom' : ''; ?> <?php echo ($add_border_to_top) ? 'support-bumper-section-border-top' : ''; ?>" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>

					<?php
					// top image
					$top_pic_src = get_sub_field('top_picture');

					if ($top_pic_src) :

						$top_pic_style = get_sub_field('top_picture_style');
						$top_pic_pos   = get_sub_field('top_picture_position');
						$top_pic_link  = get_sub_field('top_picture_link');

						// simple
						if ($top_pic_style) :

							$top_pic  = '<div class="row col-3-top-pic-simple">';
							$top_pic .= '<div class="columns">';
							$top_pic .= ($top_pic_link) ? '<a href="' . $top_pic_link . '">' : '';
							$top_pic .= '<img alt="Team Managment Icon" src="' . $top_pic_src . '">';
							$top_pic .= ($top_pic_link) ? '</a>' : '';
							$top_pic .= '</div>';
							$top_pic .= '</div>';

						// full width
						else :

							$top_pic_height = get_sub_field('full_width_picture_height');
							$pic_height     = ($top_pic_height) ? $top_pic_height : '200';
							?>

							<div class="row col-3-top-pic-full">
								<div class="columns">

									<?php
									// link
									if ($top_pic_link) :

										$top_pic  = '<div class="row col-3-top-pic-full">';
										$top_pic .= '<div class="columns">';
										$top_pic .= '<a style="background-image: url(' . $top_pic_src . '); height: ' . $pic_height . 'px;" href="' . $top_pic_link . '"></a>';
										$top_pic .= '</div>';
										$top_pic .= '</div>';

									// div
									else :

										$top_pic  = '<div class="row col-3-top-pic-full">';
										$top_pic .= '<div class="columns">';
										$top_pic .= '<div style="background-image: url(' . $top_pic_src . '); height: ' . $pic_height . 'px;"></div>';
										$top_pic .= '</div>';
										$top_pic .= '</div>';

									endif; ?>

								</div>
							</div>

						<?php endif;

					endif;

					// render top picture above headline
					echo ($top_pic_src && $top_pic_pos == 'above_headline') ? $top_pic : ''; ?>

					<div class="row col-3-top-headlines">
						<div class="columns">

							<?php
							$top_headline         = get_sub_field('top_headline');
							$top_subheadline_text = get_sub_field('top_subheadline');
							$top_subheadline_link = get_sub_field('top_subheadline_link');

							// headline
							if ($top_headline) :
								echo '<h2>' . $top_headline . '</h2>';
							endif;

							// subheadline
							if ($top_subheadline_text) :
								$top_subheadline  = ($top_subheadline_link) ? '<a href="' . $top_subheadline_link . '">' : '';
								$top_subheadline .= $top_subheadline_text;
								$top_subheadline .= ($top_subheadline_link) ? '</a>' : '';

								echo '<h3>' . $top_subheadline . '</h3>';
							endif;
							?>

						</div>
					</div>



					<?php
					// render top picture below headline
					echo ($top_pic_src && $top_pic_pos == 'below_headline') ? $top_pic : '';
					?>


					<?php
					// columns
					$expand_row = get_sub_field('expand_row');

					if ( have_rows('columns') ) : ?>
						<div class="row col-3-cols">

							<?php
							$col_qty = 0;

							while (have_rows('columns')) { the_row(); $col_qty++; }

							switch($col_qty) {
								case 1 :
									$inner_wrap = 'medium-offset-3 medium-6';
									break;
								case 2 :
									$inner_wrap = 'large-offset-2 large-8';
									$col_class  = 'medium-6';
									break;
								case 3 :
									$inner_wrap = 'large-offset-1 large-10';
									$col_class  = 'medium-4';
									break;
								case 4 :
									$col_class  = 'large-3 medium-6';
									break;
								default:
									$col_class  = 'medium-6';
							}

							if ($expand_row) {
								$inner_wrap = '';
							}
							?>

							<div class="columns <?php echo $inner_wrap; ?>">
								<div class="row">

									<?php
									while (have_rows('columns')) : the_row(); ?>


										<div class="columns <?php echo $col_class; ?>">
											<div class="col-3-col">

												<?php
												$col_img          = get_sub_field('picture');
												$text_alignment   = get_sub_field('text_alignment');
												$headline_text    = get_sub_field('headline');
												$headline_link    = get_sub_field('headline_link');
												$subheadline_text = get_sub_field('subheadline');
												$subheadline_link = get_sub_field('subheadline_link');
												$text             = get_sub_field('text');
												$learn_more       = get_sub_field('learn_more');
												$link_text        = (get_sub_field('link_text')) ? get_sub_field('link_text') : 'Learn more';
												$link_url         = get_sub_field('link_url');
												$button_text      = (get_sub_field('button_text')) ? get_sub_field('button_text') : 'Learn more';
												$button_link      = get_sub_field('button_link');

												// image
												if ($col_img) : ?>


                                                <div class="col-3-col-img" style="text-align: <?php echo $text_alignment; ?>;">
                                                    <?php if ($learn_more) { ?>
                                                        <a style="display: block;" href="<?php echo ($learn_more == 'link') ? $link_url : $button_link; ?>">
                                                    <?php } ?>
                                                    <img class="lazyload" alt="USP Icon" data-src="<?php echo $col_img; ?>">
                                                    <?php if ($learn_more) { ?>
                                                        </a>
                                                    <?php } ?>

                                                </div>

												<?php endif;

												// content
												if ($headline_text || $subheadline_text || $text) : ?>
													<div class="col-3-col-content" style="text-align: <?php echo $text_alignment; ?>;">

														<?php
														// headline
														if ($headline_text) :

															$headline  = '<h4>';
															$headline .= ($headline_link) ? '<a href="' . $headline_link . '">' : '';
															$headline .= $headline_text;
															$headline .= ($headline_link) ? '</a>' : '';
															$headline .= '</h4>';

															echo $headline;

														endif;

														// subheadline
														if ($subheadline_text) :

															$headline  = '<h5>';
															$headline .= ($subheadline_link) ? '<a href="' . $subheadline_link . '">' : '';
															$headline .= $subheadline_text;
															$headline .= ($subheadline_link) ? '</a>' : '';
															$headline .= '</h5>';

															echo $headline;

														endif;

														// text
														if ($text) :

															echo '<div class="col-3-col-text">' . $text . '</div>';

														endif;
														?>

													</div>
												<?php endif;

												// link/button
												if ($learn_more) : ?>
													<div class="col-3-col-link">
														<a
															href="<?php echo ($learn_more == 'link') ? $link_url : $button_link; ?>"
															class="<?php echo ($learn_more == 'button') ? 'button' : ''; ?>"
														>
															<?php echo ($learn_more == 'link') ? $link_text : $button_text; ?>
														</a>
													</div>
												<?php endif; ?>

											</div>
										</div>


									<?php endwhile; ?>

								</div>

                            </div>

						</div>
					<?php endif; ?>
							
				</div>



			<?php endif;
         /* --------------------------------------------
                FAQ
            -------------------------------------------- */
		elseif ( get_row_layout() == 'frequently_asked_questions' ) : ?>

            <div class="faq">
                <div class="row col-3-top-headlines">
                    <div class="columns">
                        <h2><?php the_sub_field('headline'); ?></h2>
                    </div>
                </div>

								<?php
								 if( have_rows('faq') ):
										$count = 0;
										while ( have_rows('faq') ) : the_row(); 
											$count++;
										endwhile;

										$breakPoint = round($count/2);

										// if (is_page(11069)) // FSB Employee Scheduling page
										// 	$breakPoint++;
								endif;
								?>

                <?php if( have_rows('faq') ): ?>
                <div class="row">
										<?php $number = 1;?>
                    <div class="columns large-6">
                    <?php  while ( have_rows('faq') ) : the_row(); ?>
                        <div class="item">
                            <div class="question"><h5><?php if(get_sub_field('question')) the_sub_field('question'); else echo "Question ".$number; ?></h5></div>
                            <div class="response"><?php the_sub_field('response'); ?></div>
                        </div>

                        <?php if( $number == $breakPoint ): ?>
                            </div>
                            <div class="columns large-6">
                        <?php endif; ?>
                        <?php $number = $number + 1; ?>
                    <?php  endwhile; ?>
                    </div>
                </div>

                <?php endif; ?>

            </div>

        <?php


		/* --------------------------------------------
			slideshow
		-------------------------------------------- */
		elseif ( get_row_layout() == 'flex_slideshow' ) : ?>


			<?php if (!get_sub_field('hide_widget')) : ?>

				<?php
				$scroll_anchor     = get_sub_field('scroll_anchor');
				$add_top_border    = get_sub_field('add_top_border');
				$add_bottom_border = get_sub_field('add_bottom_border');
				?>

				<div class="slideshow-section <?php echo ($add_top_border) ? 'slideshow-border-top' : ''; ?> <?php echo ($add_bottom_border) ? 'slideshow-border-bottom' : ''; ?>" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>

					<div class="row slideshow-head">
						<div class="columns text-center">
							<?php
							$headline_text    = get_sub_field('headline');
							$subheadline_text = get_sub_field('subheadline');
							$subheadline_link = get_sub_field('subheadline_link');

							// headline
							if ($headline_text) : ?>
								<h2><?php echo $headline_text; ?></h2>
							<?php endif; ?>

							<?php
							// subheadline
							if ($subheadline_text) :
								$subheadline  = '<h3>';
								$subheadline .= ($subheadline_link) ? '<a href="' . $subheadline_link . '">' : '';
								$subheadline .= $subheadline_text;
								$subheadline .= ($subheadline_link) ? '<span>></span>' : '';
								$subheadline .= ($subheadline_link) ? '</a>' : '';
								$subheadline .= '</h3>';

								echo $subheadline;
							endif;
							?>
						</div>
					</div>


					<div class="row slideshow-body">


						<div class="columns large-4 slideshow-caps-col">
							<?php if (have_rows('slideshow')) : ?>
								<div class="slideshow-caps">
									<?php
									$cap_count = 1;
									while ( have_rows('slideshow') ) : the_row(); ?>

										<div
											class="slideshow-cap <?php echo ($cap_count == 1) ? 'active' : ''; ?>"
											data-slide="<?php echo $cap_count; ?>"
										>
											<?php
											$caption_headline       = get_sub_field('caption_headline');
											$caption_text           = get_sub_field('caption_text');
											$add_learn_more_button  = get_sub_field('add_learn_more_button');
											$button_text            = ($custom_button_text = get_sub_field('custom_button_text')) ? $custom_button_text : "Learn more";
											$learn_more_button_link = get_sub_field('learn_more_button_link');

											// headline
											if ($caption_headline) : ?>
												<h4><?php echo $caption_headline; ?></h4>
											<?php endif; ?>

											<?php
											// text
											if ($caption_text) : ?>
												<div class="slideshow-cap-text"><?php echo $caption_text; ?></div>
											<?php endif; ?>

											<?php
											// learn more
											if ($add_learn_more_button) : ?>
												<a href="<?php echo $learn_more_button_link; ?>">
													<?php echo $button_text; ?>
												</a>
											<?php endif; ?>
										</div>

									<?php $cap_count++; endwhile; ?>
								</div>
							<?php endif; ?>
						</div>


						<div class="columns large-8 slideshow-imgs-col">
							<?php if (have_rows('slideshow')) : ?>
								<div class="slideshow-imgs">
									<?php
									$slide_count = 1;
									while (have_rows('slideshow')) : the_row(); ?>

										<div
											class="slideshow-img <?php echo ($slide_count == 1) ? 'active' : ''; ?>"
											data-slide="<?php echo $slide_count; ?>"
										>


											<?php
											$slide_img = get_sub_field('image');
											?>


											<div
												class="slideshow-img-img lazyload"
												style="background-image: url(<?php echo $slide_img['url']; ?>); width: <?php echo $slide_img['width']; ?>px; height: <?php echo $slide_img['height']; ?>px;"
												></div>

											<div class="slideshow-cap">

												<?php
												$caption_headline       = get_sub_field('caption_headline');
												$caption_text           = get_sub_field('caption_text');
												$add_learn_more_button  = get_sub_field('add_learn_more_button');
												$button_text            = ($custom_button_text = get_sub_field('custom_button_text')) ? $custom_button_text : "Learn more";
												$learn_more_button_link = get_sub_field('learn_more_button_link');

												// headline
												if ($caption_headline) : ?>
													<h4><?php echo $caption_headline; ?></h4>
												<?php endif; ?>

												<?php
												// text
												if ($caption_text) : ?>
													<div class="slideshow-cap-text"><?php echo $caption_text; ?></div>
												<?php endif; ?>

												<?php
												// learn more
												if ($add_learn_more_button) : ?>
													<a href="<?php echo $learn_more_button_link; ?>">
														<?php echo $button_text; ?>
													</a>
												<?php endif; ?>
											</div>

										</div>

									<?php $slide_count++; endwhile; ?>
								</div>
							<?php endif; ?>
						</div>


					</div>


				</div>

			<?php endif;


		/* --------------------------------------------
			customer proof
		-------------------------------------------- */
		elseif ( get_row_layout() == 'flex_customer_proof' ) : ?>


			<?php if (!get_sub_field('hide_widget')) : ?>

				<?php $scroll_anchor = get_sub_field('scroll_anchor'); ?>

				<div class="proof-section" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>


					<div class="row proof-head">
						<div class="columns">
							<h2><?php the_sub_field('title'); ?></h2>
							<?php if (get_sub_field('subtitle')) : ?>
								<h3><?php the_sub_field('subtitle'); ?></h3>
							<?php endif; ?>

							<?php
							// nav
							if (have_rows('tabs')) : ?>
								<ul class="proof-nav">
									<?php
									$tab_count = 1;
									while ( have_rows('tabs') ) : the_row(); ?>

										<li
											<?php echo ($tab_count == 1) ? 'class="active" ' : ''; ?>
											data-tab-count="<?php echo $tab_count; ?>"
										>
											<?php the_sub_field('tab_name'); ?>
										</li>

									<?php $tab_count++; endwhile; ?>
								</ul>
							<?php endif; ?>
						</div>
					</div>


					<?php
					// proof tab top
					if (have_rows('tabs')) : ?>
						<?php
						$proof_tab_top = 1;
						while ( have_rows('tabs') ) : the_row(); ?>

							<div
								class="row proof-tab-top <?php echo ($proof_tab_top == 1) ? ' active' : ''; ?>"
								data-tab-count="<?php echo $proof_tab_top; ?>"
							>


								<?php
								$background_image = get_sub_field('background_image');
								$logo             = get_sub_field('logo');
								$text             = get_sub_field('text');
								$credit_headline  = get_sub_field('credit_headline');
								$credit_text      = get_sub_field('credit_text');
								$add_link         = get_sub_field('add_link');
								$link_text        = get_sub_field('link_text');
								$link_url         = get_sub_field('link_url');
								?>

								<div
									class="proof-quote lazyload"
									style="background-image: url(<?php echo $background_image; ?>);"
								>
									<div class="columns large-6 medium-6 medium-offset-3 large-offset-0">

										<?php
										// logo
										if ($logo) : ?>
											<img class="lazyload" alt="Proof Quote Logo" data-src="<?php echo $logo; ?>" class="proof-quote-logo">
										<?php endif; ?>

										<?php
										// text
										if ($text) : ?>
											<div class="proof-quote-text">
												<?php echo $text; ?>
											</div>
										<?php endif; ?>

										<?php
										// credit
										if ($credit_headline || $credit_text) : ?>
											<div class="proof-credit">
												<strong><?php echo $credit_headline; ?></strong>
												<?php echo $credit_text; ?>
											</div>
										<?php endif; ?>

										<?php
										// link
										if ($add_link) : ?>
											<a href="<?php echo $link_url; ?>" class="proof-quote-link">
												<?php echo $link_text; ?>
											</a>
										<?php endif; ?>

									</div>
								</div>


								<?php
								// logos
								$images      = get_sub_field('logos');
								$logos_title = get_sub_field('logos_title');

								if( $images ) : ?>
									<div class="proof-logos-wrap">
										<?php if ($logos_title) : ?>
											<h2 class="text-center"><?php echo $logos_title; ?></h2>
										<?php endif; ?>

										<ul class="proof-logos">
											<?php foreach( $images as $image ): ?>
												<li>


													<img class="lazyload" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
												</li>
											<?php endforeach; ?>
										</ul>
									</div>
								<?php endif; ?>


							</div>

						<?php $proof_tab_top++; endwhile; ?>
					<?php endif; ?>


					<div class="proof-tab-center">

						<?php
						// static text section
						$st1_background_image    = get_sub_field('st1_background_image');
						$st1_image               = get_sub_field('st1_image');
						$st1_section_image_url   = get_sub_field('st1_section_image_url');
						$st1_icon_above_headline = get_sub_field('st1_icon_above_headline');
						$st1_headline            = get_sub_field('st1_headline');
						$st1_text                = get_sub_field('st1_text');
						$st1_add_link_with_icon  = get_sub_field('st1_add_link_with_icon');
						$st1_link_icon           = get_sub_field('st1_link_icon');
						$st1_link_text           = get_sub_field('st1_link_text');
						$st1_link_url            = get_sub_field('st1_link_url');
						$st1_bottom_links        = get_sub_field('st1_bottom_links');
						?>

						<div
							class="static-text-section"
							style="background-image: url(<?php echo $st1_background_image; ?>);"
						>
							<div class="row">
								<?php
								// image
								if ($st1_image) :
									$st1_section_img  = '<div class="columns medium-6 static-text-section-img">';
									$st1_section_img .= ($st1_section_image_url) ? '<a href="' . $st1_section_image_url . '">' : '';
									$st1_section_img .= '<img alt="Phone" src="' . $st1_image . '"/>';
									$st1_section_img .= ($st1_section_image_url) ? '</a>' : '';
									$st1_section_img .= '</div>';

									echo $st1_section_img;
								endif;
								?>

								<div class="columns medium-5 <?php echo (!$st1_image) ? 'medium-offset-6' : '';?> static-text-section-body">
									<?php
									// icon
									if ($st1_icon_above_headline) : ?>
										<img class="lazyload static-text-section-icon" alt="Homebase Icon" data-src="<?php echo $st1_icon_above_headline; ?>" class="static-text-section-icon">
									<?php endif; ?>

									<?php
									// headline
									if ($st1_headline) : ?>
										<h2><?php echo $st1_headline; ?></h2>
									<?php endif; ?>

									<?php
									// text
									if ($st1_text) : ?>
										<div class="static-text-section-text">
											<?php echo $st1_text; ?>
										</div>
									<?php endif; ?>

									<?php
									// link with icon
									if ($st1_add_link_with_icon) : ?>
										<a class="static-text-section-link-with-icon" href="<?php echo $st1_link_url ?>">
											<img class="lazyload" alt="Homebase Icon" data-src="<?php echo $st1_link_icon; ?>" alt="">
											<?php echo $st1_link_text; ?>
										</a>
									<?php endif; ?>

									<?php
									// bottom links
									if (have_rows('st1_bottom_links')) : ?>
										<ul class="static-text-section-bottom-links">
											<?php while ( have_rows('st1_bottom_links') ) : the_row(); ?>

												<li>
													<a href="<?php the_sub_field('link_url'); ?>" target="_blank" rel="noreferrer">
														<?php the_sub_field('link_text'); ?>
													</a>
												</li>

											<?php endwhile; ?>
										</ul>
									<?php endif; ?>
								</div>
							</div>
						</div>


						<?php // static number section ?>
						<div class="static-number-section">
							<?php
							// headline
							$st2_headline = get_sub_field('st2_headline');

							if ($st2_headline) : ?>
								<div class="row">
									<div class="columns text-center">
										<h2><?php echo $st2_headline; ?></h2>
									</div>
								</div>
							<?php endif; ?>

							<?php if (have_rows('st2_columns')) : ?>
								<div class="static-number-section-columns">
									<?php while ( have_rows('st2_columns') ) : the_row(); ?>

										<?php
										$top_text    = get_sub_field('top_text');
										$number      = get_sub_field('number');
										$bottom_text = get_sub_field('bottom_text');
										?>

										<div class="static-number-section-column">
											<?php if ($top_text) : ?>
												<p class="static-number-section-top">
													<?php echo $top_text; ?>
												</p>
											<?php endif; ?>

											<?php if ($number) : ?>
												<p class="static-number-section-number">
													<?php echo $number; ?>
												</p>
											<?php endif; ?>

											<?php if ($bottom_text) : ?>
												<p class="static-number-section-bottom">
													<?php echo $bottom_text; ?>
												</p>
											<?php endif; ?>
										</div>

									<?php endwhile; ?>
								</div>
							<?php endif; ?>


						</div>

					</div>


					<?php
					// proof tab bottom
					if (have_rows('tabs')) : ?>
						<?php
						$proof_tab_bottom = 1;
						while ( have_rows('tabs') ) : the_row(); ?>

							<div
								class="proof-tab-bottom <?php echo ($proof_tab_bottom == 1) ? ' active' : ''; ?>"
								data-tab-count="<?php echo $proof_tab_bottom; ?>"
							>


								<?php
								$grid_logo                    = get_sub_field('grid_logo');
								$grid_top_left_image          = get_sub_field('grid_top_left_image');
								$grid_top_left_image_link     = get_sub_field('grid_top_left_image_link');
								$grid_top_right_image         = get_sub_field('grid_top_right_image');
								$grid_top_right_image_link    = get_sub_field('grid_top_right_image_link');
								$grid_bottom_left_image       = get_sub_field('grid_bottom_left_image');
								$grid_bottom_left_image_link  = get_sub_field('grid_bottom_left_image_link');
								$grid_bottom_right_image      = get_sub_field('grid_bottom_right_image');
								$grid_bottom_right_image_link = get_sub_field('grid_bottom_right_image_link');
								$grid_quote_text              = get_sub_field('grid_quote_text');
								$grid_quote_person_photo      = get_sub_field('grid_quote_person_photo');
								$grid_quote_person_name       = get_sub_field('grid_quote_person_name');
								$grid_quote_person_text       = get_sub_field('grid_quote_person_text');
								$grid_link_text               = get_sub_field('grid_link_text');
								$grid_link_url                = get_sub_field('grid_link_url');
								?>

								<div class="photo-grid">
									<div class="row photo-grid-top">
										<?php if ($grid_logo) : ?>
											<img alt="Antique Taco Logo" src="<?php echo $grid_logo; ?>" class="photo-grid-logo">
										<?php endif; ?>

										<div class="columns medium-5 small-6">
											<?php if ($grid_top_left_image_link) : ?>

												<a
													class="photo-grid-image"
													href="<?php echo $grid_top_left_image_link; ?>"
													style="background-image: url(<?php echo $grid_top_left_image; ?>);"
												></a>

											<?php else : ?>

												<div
													class="photo-grid-image"
													style="background-image: url(<?php echo $grid_top_left_image; ?>);"
												></div>

											<?php endif; ?>
										</div>

										<div class="columns medium-7 small-6">
											<?php if ($grid_top_right_image_link) : ?>

												<a
													class="photo-grid-image"
													href="<?php echo $grid_top_right_image_link; ?>"
													style="background-image: url(<?php echo $grid_top_right_image; ?>);"
												></a>

											<?php else : ?>

												<div
													class="photo-grid-image"
													style="background-image: url(<?php echo $grid_top_right_image; ?>);"
												></div>

											<?php endif; ?>
										</div>
									</div>

									<div class="row photo-grid-bottom">
										<div class="columns large-6">
											<div class="photo-grid-quote">
												<?php
												// quote text
												if ($grid_quote_text) : ?>
													<div class="photo-grid-quote-text">
														<?php echo $grid_quote_text; ?>
													</div>
												<?php endif; ?>

												<?php
												// quote person
												if ($grid_quote_person_photo) : ?>
													<div class="photo-grid-quote-person">
														<div
															class="photo-grid-quote-person-photo"
															style="background-image: url(<?php echo $grid_quote_person_photo; ?>);"
														></div>
														<div class="photo-grid-quote-person-text">
															<strong><?php echo $grid_quote_person_name; ?></strong>
															<?php echo $grid_quote_person_text; ?>
														</div>
													</div>
												<?php endif; ?>

												<?php
												// link
												if ($grid_link_text) : ?>
													<a href="<?php echo $grid_link_url; ?>" class="photo-grid-quote-link">
														<?php echo $grid_link_text; ?>
													</a>
												<?php endif; ?>
											</div>
										</div>

										<div class="columns large-3">
											<?php if ($grid_bottom_left_image_link) : ?>

												<a
													class="photo-grid-image"
													href="<?php echo $grid_bottom_left_image_link; ?>"
													style="background-image: url(<?php echo $grid_bottom_left_image; ?>);"
												></a>

											<?php else : ?>

												<div
													class="photo-grid-image"
													style="background-image: url(<?php echo $grid_bottom_left_image; ?>);"
												></div>

											<?php endif; ?>
										</div>

										<div class="columns large-3">
											<?php if ($grid_bottom_right_image_link) : ?>

												<a
													class="photo-grid-image"
													href="<?php echo $grid_bottom_right_image_link; ?>"
													style="background-image: url(<?php echo $grid_bottom_right_image; ?>);"
												></a>

											<?php else : ?>

												<div
													class="photo-grid-image"
													style="background-image: url(<?php echo $grid_bottom_right_image; ?>);"
												></div>

											<?php endif; ?>
										</div>
									</div>
								</div>


							</div>

						<?php $proof_tab_bottom++; endwhile; ?>
					<?php endif; ?>


				</div>

			<?php endif;


		/* --------------------------------------------
			support bumper
		-------------------------------------------- */
		elseif ( get_row_layout() == 'flex_support_team_bumper' ) : ?>


			<?php if (!get_sub_field('hide_widget')) : ?>

				<?php
				$scroll_anchor        = get_sub_field('scroll_anchor');
				$top_headline         = get_sub_field('top_headline');
				$top_subheadline      = get_sub_field('top_subheadline');
				$top_subheadline_link = get_sub_field('top_subheadline_link');
				$background_image     = get_sub_field('background_image');
				$headline             = get_sub_field('headline');
				$text                 = get_sub_field('text');
				$links                = get_sub_field('links');
				$bitmoji_type         = get_sub_field('bitmoji_type');
				?>

				<div class="support-bumper-section <?php echo 'support-bumper-' . $bitmoji_type; ?>" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>

					<?php if ($top_headline || $top_subheadline) : ?>
						<div class="row support-bumper-top">
							<div class="columns text-center">
								<?php
								// headline
								if ($top_headline) : ?>
									<h2><?php echo $top_headline; ?></h2>
								<?php endif; ?>

								<?php
								// subheadline
								if ($subheadline_text) :
									$subheadline  = '<h3>';
									$subheadline .= ($top_subheadline_link) ? '<a href="' . $top_subheadline_link . '">' : '';
									$subheadline .= $top_subheadline;
									$subheadline .= ($top_subheadline_link) ? '<span>></span>' : '';
									$subheadline .= ($top_subheadline_link) ? '</a>' : '';
									$subheadline .= '</h3>';

									echo $subheadline;
								endif;
								?>
							</div>
						</div>
					<?php endif; ?>

					<div class="row">
						<div class="columns">
							<div
								class="support-bumper"
								style="background-image: url(<?php echo $background_image; ?>);"
							>
								<div class="row">
									<div class="columns large-5 large-offset-6 medium-6 medium-offset-5 support-bumper-col">
										<div class="support-bumper-content">
											<?php
											// headline
											if ($headline) : ?>
												<h2><?php echo $headline; ?></h2>
											<?php endif; ?>

											<?php
											// text
											if ($text) : ?>
												<div class="support-bumper-text">
													<?php echo $text; ?>
												</div>
											<?php endif; ?>

											<?php
											// links
											if (have_rows('links')) : ?>
												<ul class="support-bumper-links">
													<?php while ( have_rows('links') ) : the_row(); ?>

														<li>
															<a href="<?php the_sub_field('link_url'); ?>" target="_blank">
																<?php the_sub_field('link_text'); ?>
															</a>
														</li>

													<?php endwhile; ?>
												</ul>
											<?php endif; ?>
										</div>
									</div>
								</div>


								<?php
								// bitmoji
								if ($bitmoji_type == 'single') :

									$add_bitmoji      = get_sub_field('add_bitmoji');
									$bitmoji_image    = get_sub_field('bitmoji_image');
									$mobile_photo     = get_sub_field('mobile_photo');
									$bitmoji_name     = get_sub_field('bitmoji_name');
									$bitmoji_position = get_sub_field('bitmoji_position');

									if ($add_bitmoji) : ?>
										<div class="bitmoji support-bumper-bitmoji-single <?php echo ($mobile_photo) ? 'has-mobile-photo' : ''; ?>">
											<div
												class="bitmoji-img"
												style="background-image: url(<?php echo $bitmoji_image; ?>);"
											></div>

											<?php if ($mobile_photo) : ?>
												<div
													class="bitmoji-mob-photo"
													style="background-image: url(<?php echo $mobile_photo; ?>);"
												></div>
											<?php endif; ?>

											<div class="bitmoji-text">
												<span class="bitmoji-name">
													<?php echo $bitmoji_name; ?>
												</span>
												<span>
													<?php echo $bitmoji_position; ?>
												</span>
											</div>
										</div>
									<?php endif;

								elseif ($bitmoji_type == 'multiple') :

									$add_bitmoji_1      = get_sub_field('add_bitmoji_1');
									$bitmoji_1_image    = get_sub_field('bitmoji_1_image');
									$bitmoji_1_name     = get_sub_field('bitmoji_1_name');
									$bitmoji_1_position = get_sub_field('bitmoji_1_position');

									if ($add_bitmoji_1) : ?>
										<div class="bitmoji support-bumper-bitmoji-1">
											<div
												class="bitmoji-img"
												style="background-image: url(<?php echo $bitmoji_1_image; ?>);"
											></div>
											<div class="bitmoji-text">
												<span class="bitmoji-name">
													<?php echo $bitmoji_1_name; ?>
												</span>
												<span>
													<?php echo $bitmoji_1_position; ?>
												</span>
											</div>
										</div>
									<?php endif;

									$add_bitmoji_2      = get_sub_field('add_bitmoji_2');
									$bitmoji_2_image    = get_sub_field('bitmoji_2_image');
									$bitmoji_2_name     = get_sub_field('bitmoji_2_name');
									$bitmoji_2_position = get_sub_field('bitmoji_2_position');

									if ($add_bitmoji_2) : ?>
										<div class="bitmoji support-bumper-bitmoji-2">
											<div
												class="bitmoji-img"
												style="background-image: url(<?php echo $bitmoji_2_image; ?>);"
											></div>
											<div class="bitmoji-text">
												<span class="bitmoji-name">
													<?php echo $bitmoji_2_name; ?>
												</span>
												<span>
													<?php echo $bitmoji_2_position; ?>
												</span>
											</div>
										</div>
									<?php endif;

									$add_bitmoji_3      = get_sub_field('add_bitmoji_3');
									$bitmoji_3_image    = get_sub_field('bitmoji_3_image');
									$bitmoji_3_name     = get_sub_field('bitmoji_3_name');
									$bitmoji_3_position = get_sub_field('bitmoji_3_position');

									if ($add_bitmoji_3) : ?>
										<div class="bitmoji support-bumper-bitmoji-3">
											<div
												class="bitmoji-img"
												style="background-image: url(<?php echo $bitmoji_3_image; ?>);"
											></div>
											<div class="bitmoji-text">
												<span class="bitmoji-name">
													<?php echo $bitmoji_3_name; ?>
												</span>
												<span>
													<?php echo $bitmoji_3_position; ?>
												</span>
											</div>
										</div>
									<?php endif; ?>

								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>

			<?php endif;


		/* --------------------------------------------
			signup bumper
		-------------------------------------------- */
		elseif ( get_row_layout() == 'flex_signup_bumper' ) : ?>


			<?php if (!get_sub_field('hide_widget')) : ?>

				<?php $scroll_anchor = get_sub_field('scroll_anchor'); ?>

				<div class="signup-bumper-section row" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
					<div class="columns text-center">
						<?php
						$headline         = get_sub_field('headline');
						$form_button_text = get_sub_field('form_button_text');
						$enable_buttond = get_sub_field('enable_button');
						$button_text = get_sub_field('button_text');
						$button_link = get_sub_field('button_link');
						$form_action_link = get_sub_field('form_action_link');

						// Fallback to original link not valid form URL
						if( !is_int( stripos($form_action_link, 'http') ) ) $form_action_link = 'https://app.joinhomebase.com/onboarding/sign-up';

						// Enable Button
						if ($enable_buttond) : ?>
							<div class="signupbumper-btn">
								<a href="<?php echo $button_link; ?>" class="button">
									<?php echo $button_text; ?>
								</a>
							</div>
						<?php else : { ?>
						
							<?php if ($headline) : ?>
								<h2><?php echo $headline; ?></h2>
							<?php endif; ?>

							<form action="<?php echo $form_action_link . ( is_int( stripos( $form_action_link, '?' ) ) ? '&' : '?' ); ?>fullname=$_GET['fullname']&email=$_GET['email']"
									id="home-signup-form-2"
									method="GET"
									class="home-form"
							>
								<input class="homeform"
										aria-label="email address"
										type="email"
										name="email"
										placeholder="Email address"
								/>
								<input type="submit"
										id="create-account"
										aria-label="submit"
										name="Submit"
										class="primary-cta buttonsbn"
										value="<?php echo ($form_button_text) ? $form_button_text : 'Get Started'; ?>"
								/>
							</form>
						<?php } endif; ?>
					</div>
				</div>

			<?php endif;


		/* --------------------------------------------
			features sub nav
		-------------------------------------------- */
		elseif ( get_row_layout() == 'flex_features_sub_nav' ) : ?>


			<?php if (!get_sub_field('hide_widget')) : ?>
                <?php $new = get_field( 'global_css_class_name'); ?>
                <?php if ($new == 'new-features'): ?>
                    <?php $scroll_anchor = get_sub_field('scroll_anchor'); ?>

                    <div class="features-nav hide-for-small" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
                        <?php wp_nav_menu( array('theme_location' => 'features-menu2') ); ?>
                    </div>
				<?php elseif (strpos($new, 'new-features features-3') !== false ): ?>
                    <?php $scroll_anchor = get_sub_field('scroll_anchor'); ?>

                    <div class="features-nav hide-for-small" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
                        <?php wp_nav_menu( array('theme_location' => 'features-menu3') ); ?>
                    </div>

                <?php else : ?>
                    <?php $scroll_anchor = get_sub_field('scroll_anchor'); ?>

                    <div class="features-nav hide-for-small" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
                        <?php wp_nav_menu( array('theme_location' => 'features-menu') ); ?>
                    </div>

                <?php endif; ?>

			<?php endif;


		/* --------------------------------------------
			quote
		-------------------------------------------- */
		elseif ( get_row_layout() == 'flex_quote' ) : ?>


			<?php if (!get_sub_field('hide_widget')) : ?>

				<?php
				$scroll_anchor    = get_sub_field('scroll_anchor');
				$background_image = get_sub_field('background_image');
				$logo             = get_sub_field('logo');
				$text             = get_sub_field('text');
				$credit_headline  = get_sub_field('credit_headline');
				$credit_text      = get_sub_field('credit_text');
				$add_link         = get_sub_field('add_link');
				$link_text        = get_sub_field('link_text');
				$link_url         = get_sub_field('link_url');
				?>

				<div class="quote-section" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>

					<?php
					$headline_text    = get_sub_field('headline');
					$subheadline_text = get_sub_field('subheadline');
					$subheadline_link = get_sub_field('subheadline_link');

					if ($headline_text || $subheadline_text) : ?>

						<div class="row quote-section-top">
							<div class="columns text-center">
								<?php
								// headline
								if ($headline_text) : ?>
									<h2><?php echo $headline_text; ?></h2>
								<?php endif; ?>

								<?php
								// subheadline
								if ($subheadline_text) :
									$subheadline  = '<h3>';
									$subheadline .= ($subheadline_link) ? '<a href="' . $subheadline_link . '">' : '';
									$subheadline .= $subheadline_text;
									$subheadline .= ($subheadline_link) ? '<span>></span>' : '';
									$subheadline .= ($subheadline_link) ? '</a>' : '';
									$subheadline .= '</h3>';

									echo $subheadline;
								endif;
								?>
							</div>
						</div>

					<?php endif; ?>

					<div
						class="row proof-quote"
						style="background-image: url(<?php echo $background_image; ?>);"
					>
						<div class="columns large-6 medium-6 medium-offset-3 large-offset-0">

							<?php
							// logo
							if ($logo) : ?>
								<img class="lazyload" alt="Proof Quote Logo" data-src="<?php echo $logo; ?>" class="proof-quote-logo">
							<?php endif; ?>

							<?php
							// text
							if ($text) : ?>
								<div class="proof-quote-text">
									<?php echo $text; ?>
								</div>
							<?php endif; ?>

							<?php
							// credit
							if ($credit_headline || $credit_text) : ?>
								<div class="proof-credit">
									<strong><?php echo $credit_headline; ?></strong>
									<?php echo $credit_text; ?>
								</div>
							<?php endif; ?>

							<?php
							// link
							if ($add_link) : ?>
								<a href="<?php echo $link_url; ?>" class="proof-quote-link">
									<?php echo $link_text; ?>
								</a>
							<?php endif; ?>

						</div>
					</div>
				</div>

			<?php endif;

		/* --------------------------------------------
			new quote
		-------------------------------------------- */
		elseif ( get_row_layout() == 'flex_new_quote' ) : ?>


			<?php if (!get_sub_field('hide_widget')) : ?>

				<?php
				$scroll_anchor    = get_sub_field('scroll_anchor');
				$author_photo     = get_sub_field('author_photo');
				$background         = get_sub_field('background');
				$quote            = get_sub_field('quote');
				$name  						= get_sub_field('name');
				$position      		= get_sub_field('position');
				$handwrite        = get_sub_field('handwrite');
				?>

				<div class="quote-section new-quote-section" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>

					<?php
					$headline_text    = get_sub_field('headline');
					$subheadline_text = get_sub_field('subheadline');
					$subheadline_link = get_sub_field('subheadline_link');

					if ($headline_text || $subheadline_text) : ?>

						<div class="row quote-section-top">
							<div class="columns text-center">
								<?php
								// headline
								if ($headline_text) : ?>
									<h2><?php echo $headline_text; ?></h2>
								<?php endif; ?>

								<?php
								// subheadline
								if ($subheadline_text) :
									$subheadline  = '<h3>';
									$subheadline .= ($subheadline_link) ? '<a href="' . $subheadline_link . '">' : '';
									$subheadline .= $subheadline_text;
									$subheadline .= ($subheadline_link) ? '<span>></span>' : '';
									$subheadline .= ($subheadline_link) ? '</a>' : '';
									$subheadline .= '</h3>';

									echo $subheadline;
								endif;
								?>
							</div>
						</div>

					<?php endif; ?>

					<div	class="row">
						<div class="quote-wrapper" style="background-image:url(<?php echo $background; ?>)">
							<div class="columns medium-4 text-center col-2-left-col">
								<div class="photo-group">
									<div class="photo"><img class="lazyload" alt="Author Photo" data-src="<?php echo $author_photo; ?>"/></div>
									<div class="handwrite"><p><?php echo $handwrite; ?></p></div>
								</div>
							</div>
							<div class="columns medium-8 text-center col-2-right-col">
								<div class="quote-container">
									<div class="quote">
										<p><?php echo $quote; ?></p>
									</div>
									<div class="author-info">
										<div class="author-name">
											<p><?php echo $name; ?></p>
										</div>
										<div class="author-position">
											<p><?php echo $position; ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			<?php endif;


		/* --------------------------------------------
			logos
		-------------------------------------------- */
		elseif ( get_row_layout() == 'flex_logos' ) : ?>


			<?php if (!get_sub_field('hide_widget')) : ?>

				<?php
				$scroll_anchor = get_sub_field('scroll_anchor');
				$images        = get_sub_field('logos');
				$logos_title   = get_sub_field('logos_title');
				$bottom_border = get_sub_field('bottom_border');
				?>

				<div class="logos-section <?php echo ($bottom_border) ? 'logos-border-bottom' : ''; ?>" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
					<div class="row">
						<div class="columns">
							<?php
							// logos
							if( $images ) : ?>
								<div class="proof-logos-wrap">
									<?php if ($logos_title) : ?>
										<h2 class="text-center"><?php echo $logos_title; ?></h2>
									<?php endif; ?>

									<ul class="proof-logos">
										<?php foreach( $images as $image ): ?>
											<li>
												<img class="lazyload" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
											</li>
										<?php endforeach; ?>
									</ul>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>

			<?php endif;


		/* --------------------------------------------
			pos integrations
		-------------------------------------------- */
		elseif ( get_row_layout() == 'flex_pos_integrations' ) : ?>


			<?php if (!get_sub_field('hide_widget')) : ?>

				<?php $scroll_anchor = get_sub_field('scroll_anchor'); ?>

				<div class="pos-section <?php the_sub_field('extra_class') ?>" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
					<div class="row">
						<div class="columns large-8 large-offset-2 pos-top text-center">
							<?php
							$headline_text    = get_sub_field('headline');
							$subheadline_text = get_sub_field('subheadline');
							$subheadline_link = get_sub_field('subheadline_link');

							// headline
							if ($headline_text) : ?>
								<h2><?php echo $headline_text; ?></h2>
							<?php endif; ?>

							<?php
							// subheadline
							if ($subheadline_text) :
								$subheadline  = '<h3>';
								$subheadline .= ($subheadline_link) ? '<a href="' . $subheadline_link . '">' : '';
								$subheadline .= $subheadline_text;
								$subheadline .= ($subheadline_link) ? '<span>></span>' : '';
								$subheadline .= ($subheadline_link) ? '</a>' : '';
								$subheadline .= '</h3>';

								echo $subheadline;
							endif;
							?>
						</div>


						<?php
						$list_type = get_sub_field('list_type');

						if ($list_type != 'featured') : ?>

							<?php $arg = array(
								'post_type'            => 'integration',
								'integration-category' => 'pos',
								'orderby'              => 'menu_order',
								'posts_per_page'       => -1,
							);

							$the_query = new WP_Query( $arg );
							if ( $the_query->have_posts() ) : ?>
								<div class="columns pos-bottom">
									<div class="row">
										<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

											<div class="columns large-4 medium-6">
												<div class="pos-item">

													<div class="pos-img">
														<?php
														$img = get_field('logo');

														if ($img) : ?>
															<div>
																<img class="lazyload" data-src="<?php echo $img; ?>" alt="<?php the_title(); ?>">
															</div>
														<?php endif; ?>
													</div>

													<div class="pos-text">
														<h4><?php the_title(); ?></h4>
													</div>

												</div>
											</div>

										<?php endwhile; ?>
									</div>
								</div>
							<?php endif; wp_reset_query(); ?>

						<?php else : ?>

							<?php
							$posts = get_sub_field('featured_posts');

							if( $posts ): ?>
								<div class="columns pos-bottom">
									<div class="row">
										<?php foreach($posts as $post) : ?>
											<?php setup_postdata($post); ?>

											<div class="columns large-4 medium-6 small-6">
												<div class="pos-item">

													<div class="pos-img">
														<?php
														$img = get_field('logo');

														if ($img) : ?>
															<div>
																<img class="lazyload" data-src="<?php echo $img; ?>" alt="<?php the_title(); ?>">
															</div>
														<?php endif; ?>
													</div>
												<!--
													<div class="pos-text">
														<h4><?php the_title(); ?></h4>
													</div> -->
												</div>
											</div>

										<?php endforeach; ?>
										<?php
											$more_text    = get_sub_field('many_more_text');
											// manymore
											if ($more_text) : ?>
												<div class="columns large-4 medium-6">
													<div class="pos-item">
														<p><?php echo $more_text; ?></p>
													</div>
												</div>
										<?php endif; ?>
									</div>
								</div>
								<?php wp_reset_postdata(); ?>
							<?php endif; ?>

						<?php endif; ?>

					</div>
				</div>

			<?php endif;


		/* --------------------------------------------
			illustration
		-------------------------------------------- */
		elseif ( get_row_layout() == 'flex_illustration' ) : ?>


			<?php if (!get_sub_field('hide_widget')) : ?>

				<?php
				$scroll_anchor = get_sub_field('scroll_anchor');
				$image         = get_sub_field('image');
				$reverse_mode  = get_sub_field('enable_reverse_mode');
				$headline      = get_sub_field('headline');
				$caption_1     = get_sub_field('caption_1');
				$caption_2     = get_sub_field('caption_2');
				?>

				<div class="illustration-section <?php echo ($reverse_mode) ? 'reverse' : ''; ?>" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>

					<img class="lazyload" data-src="<?php echo $image; ?>" class="illustration">

					<div class="illustration-text">
						<div class="row">
							<?php if (!$reverse_mode) : ?>

								<?php if ($caption_1) : ?>
									<div class="columns large-3 illustration-caption-1-col">
										<div class="illustration-caption illustration-caption-1">
											<?php echo $caption_1; ?>
										</div>
									</div>
								<?php endif; ?>

								<div class="columns large-4 illustration-headline-col <?php echo ($caption_1) ? 'large-offset-5' : 'large-offset-8'; ?> medium-5 medium-offset-1">
									<div class="illustration-headline-wrap">
										<?php if ($headline) : ?>
											<div class="illustration-headline">
												<?php echo $headline; ?>
											</div>
										<?php endif; ?>

										<?php if ($caption_2) : ?>
											<div class="row illustration-caption-2-row">
												<div class="columns large-9 large-offset-3">
													<div class="illustration-caption illustration-caption-2">
														<?php echo $caption_2; ?>
													</div>
												</div>
											</div>
										<?php endif; ?>
									</div>
								</div>

							<?php
							// revesre
							else : ?>

								<div class="columns large-4 illustration-headline-col medium-6 medium-offset-5 large-offset-0">
									<div class="illustration-headline-wrap">
										<?php if ($headline) : ?>
											<div class="illustration-headline">
												<?php echo $headline; ?>
											</div>
										<?php endif; ?>

										<?php if ($caption_2) : ?>
											<div class="row illustration-caption-2-row">
												<div class="columns large-9 large-offset-3">
													<div class="illustration-caption illustration-caption-2">
														<?php echo $caption_2; ?>
													</div>
												</div>
											</div>
										<?php endif; ?>
									</div>
								</div>

								<?php if ($caption_1) : ?>
									<div class="columns large-3 illustration-caption-1-col large-offset-5">
										<div class="illustration-caption illustration-caption-1">
											<?php echo $caption_1; ?>
										</div>
									</div>
								<?php endif; ?>

							<?php endif; ?>
						</div>
					</div>
				</div>

			<?php endif;


		/* --------------------------------------------
			step-by-step
		-------------------------------------------- */
		elseif ( get_row_layout() == 'flex_step_by_step' ) : ?>


			<?php if (!get_sub_field('hide_widget')) : ?>

				<?php
				$scroll_anchor     = get_sub_field('scroll_anchor');
				$add_top_border    = get_sub_field('add_top_border');
				$add_bottom_border = get_sub_field('add_bottom_border');
				?>

				<div class="step-section <?php echo ($add_top_border) ? 'step-border-top' : ''; ?> <?php echo ($add_bottom_border) ? 'step-border-bottom' : ''; ?>" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
					<?php
					// top

					$headline_text    = get_sub_field('headline');
					$subheadline_text = get_sub_field('subheadline');
					$subheadline_link = get_sub_field('subheadline_link');

					if ($headline_text || $subheadline_text) : ?>

						<div class="row step-top">
							<div class="columns text-center">
								<?php
								// headline
								if ($headline_text) : ?>
									<h2><?php echo $headline_text; ?></h2>
								<?php endif; ?>

								<?php
								// subheadline
								if ($subheadline_text) :
									$subheadline  = '<h3>';
									$subheadline .= ($subheadline_link) ? '<a href="' . $subheadline_link . '">' : '';
									$subheadline .= $subheadline_text;
									$subheadline .= ($subheadline_link) ? '<span>></span>' : '';
									$subheadline .= ($subheadline_link) ? '</a>' : '';
									$subheadline .= '</h3>';

									echo $subheadline;
								endif;
								?>
							</div>
						</div>

					<?php endif; ?>


					<?php
					// columns
					$col_number = 1;

					if (have_rows('columns')) : ?>
						<div class="row step-columns">
							<?php while ( have_rows('columns') ) : the_row(); ?>

								<?php
								$subheadline_text = get_sub_field('subheadline');
								$subheadline_link = get_sub_field('subheadline_link');
								$text             = get_sub_field('text');
								$learn_more       = get_sub_field('learn_more');
								$link_text        = (get_sub_field('link_text')) ? get_sub_field('link_text') : 'Learn more';
								$link_url         = get_sub_field('link_url');
								$button_text      = (get_sub_field('button_text')) ? get_sub_field('button_text') : 'Learn more';
								$button_link      = get_sub_field('button_link');
								?>

								<div class="columns large-3 medium-6 step-col">
									<div class="step-container">
										<div class="step-count">
											<?php echo $col_number; ?>
										</div>

										<?php
										// subheadline
										if ($subheadline_text) :
											$subheadline  = '<h4 class="text-center">';
											$subheadline .= ($subheadline_link) ? '<a href="' . $subheadline_link . '">' : '';
											$subheadline .= $subheadline_text;
											$subheadline .= ($subheadline_link) ? '<span>></span>' : '';
											$subheadline .= ($subheadline_link) ? '</a>' : '';
											$subheadline .= '</h4>';

											echo $subheadline;
										endif;
										?>

										<?php
										// text
										if ($text) : ?>
											<div class="step-text">
												<?php echo $text; ?>
											</div>
										<?php endif; ?>

										<?php
										// learn more
										if ($learn_more) : ?>
											<div class="step-col-link text-center">
												<a
													href="<?php echo ($learn_more == 'link') ? $link_url : $button_link; ?>"
													class="<?php echo ($learn_more == 'button') ? 'button' : ''; ?>"
												>
													<?php echo ($learn_more == 'link') ? $link_text : $button_text; ?>
												</a>
											</div>
										<?php endif; ?>
									</div>
								</div>


							<?php $col_number++; endwhile; ?>
						</div>
					<?php endif; ?>


					<?php
					// bottom
					$learn_more       = get_sub_field('learn_more');
					$link_text        = (get_sub_field('link_text')) ? get_sub_field('link_text') : 'Learn more';
					$link_url         = get_sub_field('link_url');
					$button_text      = (get_sub_field('button_text')) ? get_sub_field('button_text') : 'Learn more';
					$button_link      = get_sub_field('button_link');

					if ($learn_more) : ?>
						<div class="row step-bottom">
							<div class="columns text-center">
								<a
									href="<?php echo ($learn_more == 'link') ? $link_url : $button_link; ?>"
									class="<?php echo ($learn_more == 'button') ? 'button' : ''; ?>"
								>
									<?php echo ($learn_more == 'link') ? $link_text : $button_text; ?>
								</a>
							</div>
						</div>
					<?php endif; ?>


				</div>

			<?php endif;

        /* --------------------------------------------
			reviews
		-------------------------------------------- */
        elseif ( get_row_layout() == 'reviews' ) : ?>
			<div class="reviews-layout">
					<div class="row text-center">
							<h2><?php echo get_sub_field('title'); ?></h2>
							<?php if( get_sub_field('subheadline') != '' ) echo '<h3>' . get_sub_field('subheadline') . '</h3>'; ?>
					</div>
					<div class="row reviews">
									<?php if ( have_rows('reviews') ) :
											while ( have_rows('reviews') ) : the_row();
													echo '      <div class="columns large-4 medium-4 text-center">';
													echo '			<a href="'.get_sub_field('link_url').'" target="_blank">';
													echo '          <div class="score"><img class="lazyload" data-src="' . get_sub_field('score') . '" alt="Score" /></div>';
													echo '          <div class="company"><img class="lazyload"  data-src="' . get_sub_field('company_logo') . '" alt="Platform" /></div>';
													echo '          <div class="score-description">' . get_sub_field('score_description') . '</div>';
													echo '			</a>';
													echo '      </div>';
											endwhile;
									endif; ?>
					</div>
			</div>

			<?php 
		/* --------------------------------------------
			pricing
		-------------------------------------------- */
			elseif ( get_row_layout() == 'how_it_works' ) : ?>
				<div class="row how-it-works text-center">
						<h1><?php echo get_sub_field('title'); ?></h1>
						<a href="<?php echo get_sub_field('button_link'); ?>" class="button"><?php echo get_sub_field('button_text'); ?></a>
				</div>
				<?php elseif ( get_row_layout() == 'headline_only' ) : ?>
				<div class="headline-only text-center">
						<h1><?php echo get_sub_field('headline'); ?></h1>
				</div>

        <?php
		/* --------------------------------------------
			pricing
		-------------------------------------------- */
		 elseif ( get_row_layout() == 'flex_pricing' ) : ?>

			<?php if (!get_sub_field('hide_widget')) : ?>

				<?php $scroll_anchor = get_sub_field('scroll_anchor'); ?>

				<div class="pricing-section" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>

					<?php
					$sticky_header        = get_sub_field('sticky_header');
					// table
					if ( have_rows('columns') ) : ?>

 						<ul class="pricing-toggle">
							<li class="active" data-type="annual"><img alt="Save Tag" class="save-tag" src="/wp-content/uploads/2018/06/img-save.png">Annual</li>
							<li data-type="monthly">Monthly</li>
						</ul>

						<div class="pricing-table" id="<?php if (!($sticky_header)) : ?><?php echo "alternate-pricing-table"; ?><?php endif; ?>">
							<?php while ( have_rows('columns') ) : the_row();
								if (get_row_layout() == 'column') : ?>


									<?php
									$hide_column        = get_sub_field('hide_column');
									$add_top_tag        = get_sub_field('add_top_tag');
									$top_tag_text       = (get_sub_field('top_tag_text')) ? get_sub_field('top_tag_text') : 'Most popular plan';
									$pricing_plan_title = get_sub_field('pricing_plan_title');
									$annual_price       = get_sub_field('annual_price');
									$annual_meta        = get_sub_field('annual_meta');
									$monthly_price      = get_sub_field('monthly_price');
									$monthly_meta       = get_sub_field('monthly_meta');
									$subheadline        = get_sub_field('subheadline');
									$button_text        = (get_sub_field('button_text')) ? get_sub_field('button_text') : 'Get Started';
									// $utm_content     = get_sub_field('utm_content');
									$list_meta        = get_sub_field('list_meta');


									if (!$hide_column) : ?>
										<div class="pricing-table-col <?php echo ($add_top_tag) ? 'pricing-table-col-tagged' : ''; ?>">

											<?php
											// top tag
											if ($add_top_tag) : ?>
												<div class="pricing-top-tag">
													<span><?php echo $top_tag_text; ?></span>
												</div>
											<?php endif; ?>

											<div class="pricing-plan">
												<?php
												//Sticky Header Block
												if ($sticky_header) : ?>
													<!--  FIXED SCROLL FUNCTION  -->
													<script>
													window.addEventListener( 'load', function() {
														jQuery(window).scroll(function() {
															var scroll = jQuery(window).scrollTop();
// 															console.log(scroll);
															if (jQuery(window).width() > 640){
																if (scroll >= 328 && scroll <= 1145) {
																	jQuery(".pricing-col-title").addClass("stick-col-title");
																	jQuery(".sticky-meta").addClass("stick-top");
																}else {
																	jQuery(".pricing-col-title").removeClass("stick-col-title");
																	jQuery(".sticky-meta").removeClass("stick-top");
																}
															}
														});
													} );
													</script>
													<!-- -------------------------------- -->
												<?php endif; ?>
												<?php
												// column title
												if ($pricing_plan_title) : ?>
													<h3 class="pricing-col-title">
														<span><?php echo $pricing_plan_title; ?></span>
													</h3>
												<?php endif; ?>

												<div class="pricing-plan-body">
<?php if ($sticky_header) : ?><div class="sticky-meta"><?php endif; ?>
													<div class="pricing-price" annual="<?php echo $annual_price; ?>" monthly="<?php echo $monthly_price; ?>">
														<?php echo $annual_price; ?>
													</div>

													<div class="pricing-meta" annual="<?php echo $annual_meta; ?>" monthly="<?php echo $monthly_meta; ?>">
														<?php echo $annual_meta; ?>
													</div>
<?php if ($sticky_header) : ?> </div><?php endif; ?>
													<?php
													// subheadline
													if ($subheadline) : ?>
														<div class="pricing-subheadline">
															<?php echo $subheadline; ?>
														</div>
													<?php endif; ?>

													<!-- <a href="https://app.joinhomebase.com/onboarding/sign-up?utm_source=marketing%20site&utm_campaign=signups&utm_term=pricing_grid&utm_content=<?php //echo $utm_content; ?>" class="button">
														<?php //echo $button_text; ?>
													</a> -->

													<a href="https://app.joinhomebase.com/onboarding/sign-up" class="button">
														<?php echo $button_text; ?>
													</a>
<?php if ($list_meta) : ?><p class="list-meta"><?php echo $list_meta; ?></p><?php endif; ?>
													<?php
													// list
													if (have_rows('list')) : ?>
														<ul class="pricing-table-list">
															<?php while ( have_rows('list') ) : the_row(); ?>
																<li<?php echo (get_sub_field('add_divider_below')) ? ' class="divider-below"' : ''; ?>>
																	<?php the_sub_field('text'); ?>
																	<?php
																		$tooltip_headline	= get_sub_field('tooltip_headline');
																		$tooltip_description= get_sub_field('tooltip_description');
																		$tooltip_learn_more	= get_sub_field('tooltip_learn_more');
																		$tooltip_learn_more_link	= get_sub_field('tooltip_learn_more_link');
																		$tooltip_video	= get_sub_field('tooltip_video');
																		$tooltip_id	= get_sub_field('tooltip_id');
																	if (get_sub_field('add_tooltip')) : ?>
																		<a id="<?php echo $tooltip_id; ?>" href="#" class="qstn-icn"><img class="lazyload" data-src="/wp-content/uploads/2018/05/icn-questn.svg"></a>
																		<div id="popover-<?php echo $tooltip_id; ?>" class="pricing-tooltip">
																			<?php if ($tooltip_video) : ?>
																				<div class="row">
																					<div class="columns small-6 medium-6">
																						<h3 class="tooltip_headline"><?php echo $tooltip_headline; ?></h3>
																						<p class="tooltip_description"><?php echo $tooltip_description; ?></p>
																						<a href="<?php echo $tooltip_learn_more_link; ?>" class="tooltip_learnmore"><?php echo $tooltip_learn_more; ?></a>
																					</div>
																					<div class="columns small-6 medium-6 embed-container"><?php the_field($tooltip_video); ?></div>
																				</div>
																				<style>
																					.embed-container {
																						position: relative;
																						padding-bottom: 56.25%;
																						overflow: hidden;
																						max-width: 100%;
																						height: auto;
																					}

																					.embed-container iframe,
																					.embed-container object,
																					.embed-container embed {
																						position: absolute;
																						top: 0;
																						left: 0;
																						width: 100%;
																						height: 100%;
																					}
																				</style>
																			<?php endif; ?>

																			<?php if (!($tooltip_video)) : ?>
																				<div class="row">
																					<div class="columns small-12 medium-12">
																						<h3 class="tooltip_headline"><?php echo $tooltip_headline; ?></h3>
																						<p class="tooltip_description"><?php echo $tooltip_description; ?></p>
																						<a href="<?php echo $tooltip_learn_more_link; ?>" class="tooltip_learnmore"><?php echo $tooltip_learn_more; ?></a>
																						<a href="#" class="tooltip_close"><img class="lazyload" data-src="/wp-content/uploads/2018/06/icn-close.png"></a>
																					</div>
																				</div>
																			<?php endif; ?>
																		</div>
																		<script>
																			document.addEventListener( "DOMContentLoaded", function() {
																				var anchor_id = "<?php echo $tooltip_id; ?>";
																				var popover_id = "popover-"+"<?php echo $tooltip_id; ?>";
																				jQuery('#'+anchor_id).click(function() {
																					jQuery('#'+popover_id).show();
																				});
																				jQuery('.tooltip_close').click(function() {
																					jQuery('#'+popover_id).hide();
																				});
																			});
																		</script>
																	<?php endif; ?>
																</li>

															<?php endwhile; ?>
														</ul>
													<?php endif; ?>

												</div>

											</div>
										</div>
									<?php endif; ?>


								<?php endif;
							endwhile; ?>
						</div>
					<?php endif; ?>


					<?php
					// bottom
					$bottom_link_title = get_sub_field('bottom_link_title');
					$bottom_link_text = get_sub_field('bottom_link_text');
					$bottom_link_url  = get_sub_field('bottom_link_url');

					if ($bottom_link_text) : ?>
						<div class="pricing-bottom">
							<div class="row">
								<div class="columns text-center">
									<?php echo ($bottom_link_title) ? '<p>' . $bottom_link_title . '</p>' : ''; ?>
									<a href="<?php echo $bottom_link_url; ?>">
										<?php echo $bottom_link_text; ?><span>></span>
									</a>
								</div>
							</div>
						</div>
					<?php endif; ?>

				</div>

			<?php endif;


		/* --------------------------------------------
			icon list
		-------------------------------------------- */
		elseif ( get_row_layout() == 'flex_icon_list' ) : ?>


			<?php if (!get_sub_field('hide_widget')) : ?>

				<?php $scroll_anchor = get_sub_field('scroll_anchor'); ?>

				<div class="icon-list-section" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>

					<?php
					// top
					$headline_text    = get_sub_field('headline');
					$subheadline_text = get_sub_field('subheadline');
					$subheadline_link = get_sub_field('subheadline_link');

					if ($headline_text || $subheadline_text) : ?>

						<div class="row icon-list-top">
							<div class="columns text-center">
								<?php
								// headline
								if ($headline_text) : ?>
									<h2><?php echo $headline_text; ?></h2>
								<?php endif; ?>

								<?php
								// subheadline
								if ($subheadline_text) :
									$subheadline  = '<h3>';
									$subheadline .= ($subheadline_link) ? '<a href="' . $subheadline_link . '">' : '';
									$subheadline .= $subheadline_text;
									$subheadline .= ($subheadline_link) ? '<span>></span>' : '';
									$subheadline .= ($subheadline_link) ? '</a>' : '';
									$subheadline .= '</h3>';

									echo $subheadline;
								endif;
								?>
							</div>
						</div>

					<?php endif; ?>

					<?php
					// icons
					if (have_rows('icons')) : ?>
						<div class="row icon-list">
							<?php while ( have_rows('icons') ) : the_row(); ?>

								<?php
								$icon = get_sub_field('icon');
								$text = get_sub_field('text');
								?>

								<div class="columns icon-list-item">
									<?php
									// icon
									if ($icon) : ?>
										<div class="icon-list-item-icon">
											<div>
												<img alt="Feature Icon" class="lazyload" data-src="<?php echo $icon; ?>">
											</div>
										</div>
									<?php endif; ?>

									<?php
									// text
									if ($text) : ?>
										<div class="icon-list-item-text">
											<?php echo $text; ?>
										</div>
									<?php endif; ?>
								</div>

							<?php endwhile; ?>
						</div>
					<?php endif; ?>

					<?php
					// bottom
					$bottom_subheadline_text = get_sub_field('bottom_subheadline');
					$bottom_subheadline_link = get_sub_field('bottom_subheadline_link');

					if ($bottom_subheadline_text) : ?>

						<div class="row icon-list-top">
							<div class="columns text-center">
								<?php
								// bottom subheadline
								if ($bottom_subheadline_text) :
									$bottom_subheadline  = '<h3>';
									$bottom_subheadline .= ($bottom_subheadline_link) ? '<a href="' . $bottom_subheadline_link . '">' : '';
									$bottom_subheadline .= $bottom_subheadline_text;
									$bottom_subheadline .= ($bottom_subheadline_link) ? '<span>></span>' : '';
									$bottom_subheadline .= ($bottom_subheadline_link) ? '</a>' : '';
									$bottom_subheadline .= '</h3>';

									echo $bottom_subheadline;
								endif;
								?>
							</div>
						</div>

					<?php endif; ?>

				</div>

			<?php endif;


		/* --------------------------------------------
			zendesk categories
		-------------------------------------------- */
		elseif ( get_row_layout() == 'flex_zendesk_categories' ) : ?>


			<?php if (!get_sub_field('hide_widget')) : ?>

				<?php $scroll_anchor = get_sub_field('scroll_anchor'); ?>

				<div class="zendesk-cats-section" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>

					<?php
					// top
					$headline_text    = get_sub_field('headline');
					$subheadline_text = get_sub_field('subheadline');
					$subheadline_link = get_sub_field('subheadline_link');

					if ($headline_text || $subheadline_text) : ?>

						<div class="row zendesk-cats-top">
							<div class="columns text-center">
								<?php
								// headline
								if ($headline_text) : ?>
									<h2><?php echo $headline_text; ?></h2>
								<?php endif; ?>

								<?php
								// subheadline
								if ($subheadline_text) :
									$subheadline  = '<h3>';
									$subheadline .= ($subheadline_link) ? '<a href="' . $subheadline_link . '">' : '';
									$subheadline .= $subheadline_text;
									$subheadline .= ($subheadline_link) ? '<span>></span>' : '';
									$subheadline .= ($subheadline_link) ? '</a>' : '';
									$subheadline .= '</h3>';

									echo $subheadline;
								endif;
								?>
							</div>
						</div>

					<?php endif; ?>

					<?php
					// categories
					if (have_rows('categories')) : ?>
						<div class="row zendesk-cats">
							<?php while ( have_rows('categories') ) : the_row(); ?>

								<?php
								$image       = get_sub_field('image');
								$type        = get_sub_field('type');

								if ($type != 'custom') {
									$zendesk_cat = get_sub_field('zendesk_category');
									$url         = $zendesk_cat['value'];
									$name        = $zendesk_cat['label'];
								} else {
									$url         = get_sub_field('custom_link');
									$name        = get_sub_field('custom_title');
								}
								?>

								<div class="columns medium-3 small-6 zendesk-cat-col text-center">
									<a href="<?php echo $url; ?>" class="zendesk-cat" target="_blank">
										<div class="zendesk-cat-img">
											<img class="lazyload" data-src="<?php echo $image; ?>" alt="<?php echo $name; ?>">
										</div>
										<h4><?php echo $name; ?></h4>
										<span>View guides</span>
									</a>
								</div>

							<?php endwhile; ?>
						</div>
					<?php endif; ?>

					<?php
					// bottom
					$all_help_guides = get_sub_field('all_help_guides');
					if ($all_help_guides) : ?>
						<div class="row zendesk-cats-bottom">
							<div class="columns text-center">
								<a href="http://support.joinhomebase.com/hc/en-us" target="_blank">
									View all help guides
								</a>
							</div>
						</div>
					<?php endif; ?>

				</div>

			<?php endif;


		/* --------------------------------------------
			faq articles
		-------------------------------------------- */
		elseif ( get_row_layout() == 'flex_faq' ) : ?>


			<?php if (!get_sub_field('hide_widget')) : ?>

				<?php $scroll_anchor = get_sub_field('scroll_anchor'); ?>

				<div class="faq-section" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>

					<?php
					// top
					$headline_text    = get_sub_field('headline');
					$subheadline_text = get_sub_field('subheadline');
					$subheadline_link = get_sub_field('subheadline_link');

					if ($headline_text || $subheadline_text) : ?>

						<div class="row faq-section-top">
							<div class="columns text-center">
								<?php
								// headline
								if ($headline_text) : ?>
									<h2><?php echo $headline_text; ?></h2>
								<?php endif; ?>

								<?php
								// subheadline
								if ($subheadline_text) :
									$subheadline  = '<h3>';
									$subheadline .= ($subheadline_link) ? '<a href="' . $subheadline_link . '">' : '';
									$subheadline .= $subheadline_text;
									$subheadline .= ($subheadline_link) ? '<span>></span>' : '';
									$subheadline .= ($subheadline_link) ? '</a>' : '';
									$subheadline .= '</h3>';

									echo $subheadline;
								endif;
								?>
							</div>
						</div>

					<?php endif; ?>


					<div class="row faq-articles">
						<div class="columns faq-articles-preloader">
							<div>
								<img alt="Spinner Loading" src="/wp-admin/images/spinner.gif"/>
								Loading articles...
							</div>
						</div>
					</div>

				</div>

			<?php endif;


		/* --------------------------------------------
			resources
		-------------------------------------------- */
		elseif ( get_row_layout() == 'flex_resources_module' ) : ?>


			<?php if (!get_sub_field('hide_widget')) : ?>

				<?php $scroll_anchor = get_sub_field('scroll_anchor'); ?>

				<div class="resources-module" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>

					<?php
					// top
					$headline_text    = get_sub_field('headline');
					$subheadline_text = get_sub_field('subheadline');
					$subheadline_link = get_sub_field('subheadline_link');

					if ($headline_text || $subheadline_text) : ?>

						<div class="row resources-module-top">
							<div class="columns large-8 large-offset-2 text-center">
								<?php
								// headline
								if ($headline_text) : ?>
									<h2><?php echo $headline_text; ?></h2>
								<?php endif; ?>

								<?php
								// subheadline
								if ($subheadline_text) :
									$subheadline  = '<h3>';
									$subheadline .= ($subheadline_link) ? '<a href="' . $subheadline_link . '">' : '';
									$subheadline .= $subheadline_text;
									$subheadline .= ($subheadline_link) ? '<span>></span>' : '';
									$subheadline .= ($subheadline_link) ? '</a>' : '';
									$subheadline .= '</h3>';

									echo $subheadline;
								endif;
								?>
							</div>
						</div>

					<?php endif; ?>

					<div class="row resources-list">

						<?php
						$hr_resources_image = get_sub_field('hr_resources_image');
						$hr_resources_title = get_sub_field('hr_resources_title');
						$hr_resources_text  = get_sub_field('hr_resources_text');
						?>

						<div class="columns medium-6">
							<a class="resources-item" href="<?php echo get_category_link(71); ?>">
								<div
									class="resources-item-img"
									style="background-image: url(<?php echo $hr_resources_image; ?>); "
								></div>
								<div class="resources-item-text">
									<div>
										<?php if ($hr_resources_title) : ?>
											<h4><?php echo $hr_resources_title; ?></h4>
										<?php endif; ?>

										<?php if ($hr_resources_text) : ?>
											<span><?php echo $hr_resources_text; ?></span>
										<?php endif; ?>
									</div>
								</div>
							</a>
						</div>


						<?php
						// blog posts
						$arg = array(
							'post_type'      => 'post',
							'orderby'        => 'date',
							'order'          => 'DESC',
							'posts_per_page' => 3,
						);

						$the_query = new WP_Query( $arg );
						if ( $the_query->have_posts() ) : ?>
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<div class="columns medium-6">
									<a class="resources-item" href="<?php the_permalink(); ?>">
										<div
											class="resources-item-img"
											style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>); "
										></div>
										<div class="resources-item-text">
											<h4><?php the_title(); ?></h4>
										</div>
									</a>
								</div>
							<?php endwhile; ?>
						<?php endif; wp_reset_query(); ?>

					</div>

				</div>

			<?php endif;


		/* --------------------------------------------
			Blog module
		-------------------------------------------- */
		elseif ( get_row_layout() == 'flex_blog_module' ) : ?>

			<?php if (!get_sub_field('hide_widget')) : ?>

				<?php $scroll_anchor = get_sub_field('scroll_anchor'); ?>

				<div class="blog-module" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>

					<?php
					// top
					$banner_text    = get_sub_field('banner_text');
					$headline_text    = get_sub_field('headline');
					$subheadline_text = get_sub_field('subheadline');
					$subheadline_link = get_sub_field('subheadline_link');

					if ($banner_text) : ?>
						<div class="blog-banner text-center">
							<div class="row">
								<div class="columns medium-8 medium-offset-2">
									<h2><?php echo $banner_text; ?></h2>
								</div>
							</div>
						</div>
					<?php endif;

					if ($headline_text || $subheadline_text) : ?>

						<div class="row blog-module-top">
							<div class="columns text-center">
								<?php
								// headline
								if ($headline_text) : ?>
									<h2><?php echo $headline_text; ?></h2>
								<?php endif; ?>

								<?php
								// subheadline
								if ($subheadline_text) :
									$subheadline  = '<h3>';
									$subheadline .= ($subheadline_link) ? '<a href="' . $subheadline_link . '">' : '';
									$subheadline .= $subheadline_text;
									$subheadline .= ($subheadline_link) ? '<span>></span>' : '';
									$subheadline .= ($subheadline_link) ? '</a>' : '';
									$subheadline .= '</h3>';

									echo $subheadline;
								endif;
								?>
							</div>
						</div>

					<?php endif; ?>

					<div class="row blog-list">
						
						<?php
							$posts = get_sub_field('featured_posts');

							if( $posts ): ?>
										<?php foreach($posts as $post) : ?>
											<?php setup_postdata($post); ?>

											<div class="columns medium-4">
												<div class="pos-item">
													<div class="pos-img">
														<a href="<?php the_permalink(); ?>"><img class="lazyload" data-src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>"/></a>
													</div>
													<div class="pos-date">
														<strong><?php the_time( 'F jS, Y' ); ?></strong>
													</div>
													<div class="pos-title">
														<a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
													</div>
												</div>
											</div>

										<?php endforeach; ?>
								<?php wp_reset_postdata(); ?>
							<?php endif; ?>
					</div>

				</div>

			<?php endif;


		/* --------------------------------------------
			integrations tabs
		-------------------------------------------- */
		elseif ( get_row_layout() == 'flex_integrations_tabs' ) : ?>


			<?php if (!get_sub_field('hide_widget')) : ?>

				<?php $scroll_anchor = get_sub_field('scroll_anchor'); ?>

				<div class="integrations-tabs-section" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>

					<div class="row integrations-tabs">
						<?php
						$args = array(
							'taxonomy'   => 'integration-category',
							'hide_empty' => true,
							'fields'     => 'id=>name'
						);

						$terms = get_terms( $args );

						if (!empty($terms)) : ?>
							<ul>

								<?php foreach($terms as $id => $name) : ?>
									<li cat-id="<?php echo $id; ?>"><?php echo $name; ?></li>
								<?php endforeach; ?>
								<li cat-id="all">All Partners</li>
							</ul>
						<?php endif; ?>
					</div>

					<div class="row integrations-tab-title">
						<div class="columns text-center">
							<h2>All</h2>
						</div>
					</div>

					<?php
					$args = array(
						'post_type'      => 'integration',
						'orderby'        => 'menu_order',
						'posts_per_page' => -1
					);

					$the_query = new WP_Query($args);

					if ($the_query->have_posts()) : ?>
						<div class="row integrations-posts">
							<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

								<?php
								$int_tab_img   = get_field('int_tabs_img');
								$logo          = get_field('logo');
								$final_img     = ($int_tab_img) ? $int_tab_img : (($logo) ? $logo : '');
								$excerpt       = get_the_excerpt();
								$external_link = get_field('external_link');
								$cats          = implode(',', wp_get_post_terms(get_the_ID(), 'integration-category', array("fields" => "ids")));
								?>

								<div class="columns large-6 medium-6 active" cat-it="<?php echo $cats; ?>">
									<div class="integrations-post">
										<div class="integrations-post-img">
											<div>
												<img class="lazyload" data-src="<?php echo $final_img; ?>" alt="">
											</div>
										</div>
										<div class="integrations-post-content">
											<h3><?php the_title(); ?></h3>
											<?php echo ($excerpt) ? '<p>' . $excerpt . '</p>' : ''; ?>
											<?php if ($external_link) : ?>
												<a href="<?php echo $external_link; ?>" target="_blank">Learn more</a>
											<?php endif; ?>
										</div>
									</div>
								</div>

							<?php endwhile; ?>
						</div>
					<?php endif; wp_reset_query(); ?>

				</div>

			<?php endif;


		/* --------------------------------------------
			get in touch
		-------------------------------------------- */
		elseif ( get_row_layout() == 'flex_get_in_touch' ) : ?>


			<?php if (!get_sub_field('hide_widget')) : ?>

				<?php $scroll_anchor = get_sub_field('scroll_anchor'); ?>

				<div class="getintouch-section" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>

					<?php
					$image       = get_sub_field('image');
					$title       = get_sub_field('title');
					$content     = get_sub_field('content');
					$button      = get_sub_field('button');
					$button_text = get_sub_field('button_text');
					$button_link = get_sub_field('button_link');
					?>

					<div class="row">

						<?php if ($image) : ?>

							<div class="columns large-6 medium-4 getintouch-img">
								<div class="getintouch-img-table">
									<div class="getintouch-img-col">
										<img alt="Get Touch icon" class="lazyload" data-src="<?php echo $image; ?>">
									</div>
								</div>
							</div>

						<?php endif; ?>

						<div class="columns large-6 medium-8 getintouch-text <?php echo (!$image) ? 'large-offset-3 medium-offset-2' : ''; ?>">
							<h2><?php echo $title; ?></h2>
							<?php echo $content; ?>
							<?php if ($button) : ?>
								<div class="getintouch-bttn <?php echo (!$image) ? 'text-center' : ''; ?>">
									<a href="<?php echo $button_link; ?>">
										<?php echo $button_text; ?>
									</a>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>

			<?php endif;


		/* --------------------------------------------
			press list
		-------------------------------------------- */
		elseif ( get_row_layout() == 'flex_press_list' ) : ?>


			<?php if (!get_sub_field('hide_widget')) : ?>

				<?php $scroll_anchor = get_sub_field('scroll_anchor'); ?>

				<div class="integrations-tabs-section press-list-section" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>

					<?php
					$featured_article = get_sub_field('featured_article');
					$logo             = get_the_post_thumbnail_url($featured_article, 'full');
					$title            = get_the_title($featured_article);
					$description      = get_field('description', $featured_article);
					$press_link       = get_field('press_link', $featured_article);
					?>

					<?php if ($featured_article) : ?>
						<div class="row integrations-tab-title">
							<div class="columns text-center">
								<h2>Featured Article</h2>
							</div>
						</div>

						<div class="row">
							<div class="columns">
								<div class="row press-featured-post">
									<div class="columns medium-6 press-featured-img">
										<div>
											<img class="lazyload" alt="Article Company logo" data-src="<?php echo $logo; ?>">
										</div>
									</div>
									<div class="columns medium-6 press-featured-text">
										<h3><?php echo $title; ?></h3>
										<?php echo ($description) ? '<p>' . $description . '</p>' : ''; ?>
										<?php if ($press_link) : ?>
											<a href="<?php echo $press_link; ?>" target="_blank" rel="noopener">Learn more</a>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					<?php endif ?>

					<div class="row integrations-tab-title">
						<div class="columns text-center">
							<h2>Recent Articles</h2>
						</div>
					</div>

					<?php
					$args = array(
						'post_type'      => 'press_list',
						'orderby'        => 'menu_order',
						'posts_per_page' => 6
					);

					$the_query = new WP_Query($args);

					if ($the_query->have_posts()) : ?>
						<div class="row integrations-posts">
							<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

								<?php
								$logo        = get_the_post_thumbnail_url(get_the_ID(), 'full');
								$title       = get_the_title();
								$description = get_field('description');
								$press_link  = get_field('press_link');
								?>

								<div class="columns large-4 medium-6 active">
									<div class="integrations-post">
										<div class="integrations-post-img">
											<div>
												<img alt="Article Company Logo" class="lazyload" data-src="<?php echo $logo; ?>">
											</div>
										</div>
										<div class="integrations-post-content">
											<h3><?php echo $title; ?></h3>
											<?php echo ($description) ? '<p>' . $description . '</p>' : ''; ?>
											<?php if ($press_link) : ?>
												<a href="<?php echo $press_link; ?>" target="_blank" rel="noopener">Learn more</a>
											<?php endif; ?>
										</div>
									</div>
								</div>

							<?php endwhile; ?>
						</div>
					<?php endif; wp_reset_query(); ?>

					<div class="row press-load-more">
						<div class="columns text-center">
							<a
								href="#"
								data-paged="1"
								data-status="ready"
							>
								Read More Past Articles
							</a>
							<img alt="Spinner Loading" class="lazyload" data-src="<?php echo get_site_url(); ?>/wp-admin/images/spinner.gif"/>
						</div>
					</div>

				</div>

			<?php endif;


		/* --------------------------------------------
			feature by feature comparison
		-------------------------------------------- */
		elseif ( get_row_layout() == 'flex_feature_comparison' ) : ?>


			<?php if (!get_sub_field('hide_widget')) : ?>

				<?php
				$scroll_anchor            = get_sub_field('scroll_anchor');
				$title                    = get_sub_field('title');
				$left_column_logo         = get_sub_field('left_column_logo');
				$right_column_logo        = get_sub_field('right_column_logo');
				$homebase_annual_price    = get_sub_field('homebase_annual_price');
				$when_i_work_annual_price = get_sub_field('when_i_work_annual_price');
				?>

				<div class="by-feature-comparison" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
					<div class="row">
						<div class="columns">
							<h2><?php echo $title; ?></h2>

							<?php if (have_rows('table')) : ?>

								<table>
									<thead>
										<tr>
											<th></th>
											<th><img src="<?php echo $left_column_logo; ?>"/></th>
											<th><img src="<?php echo $right_column_logo; ?>"/></th>
										</tr>
									</thead>

									<tbody>

										<?php while ( have_rows('table') ) : the_row(); ?>

											<tr>
												<td><?php the_sub_field('feature'); ?></td>
												<td>
													<?php
													$left_column = get_sub_field('left_column');
													$left_column = ($left_column) ? '/img/feat-comparison-true.png' : '/img/feat-comparison-false.png';
													?>
													<img src="<?php echo get_stylesheet_directory_uri() . $left_column; ?>">
												</td>
												<td>
													<?php
													$right_column = get_sub_field('right_column');
													$right_column = ($right_column) ? '/img/feat-comparison-true.png' : '/img/feat-comparison-false.png';
													?>
													<img src="<?php echo get_stylesheet_directory_uri() . $right_column; ?>">
												</td>
											</tr>

										<?php endwhile; ?>

									</tbody>

									<tfoot>
										<tr>
											<td>Annual Price</td>
											<td>
												<p><?php the_sub_field('homebase_annual_price'); ?></p>
												(for <strong>30</strong> employees)
											</td>
											<td>
												<p><?php the_sub_field('when_i_work_annual_price'); ?></p>
												(for <strong>30</strong> employees)
											</td>
										</tr>
									</tfoot>
								</table>

							<?php endif; ?>

						</div>
					</div>
				</div>

			<?php endif;


		/* --------------------------------------------
			rate comparison
		-------------------------------------------- */
		elseif ( get_row_layout() == 'flex_rate_comparison' ) : ?>


			<?php if (!get_sub_field('hide_widget')) : ?>

				<?php $scroll_anchor = get_sub_field('scroll_anchor'); ?>

				<div class="rate-comparison" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
					<div class="row">
						<div class="columns medium-5 rate-compare-hb medium-offset-1">

							<?php
							$left_column_logo  = get_sub_field('left_column_logo');
							$right_column_logo = get_sub_field('right_column_logo');
							?>

							<p class="rate-compare-title">
								<img class="lazyload" data-src="<?php echo $left_column_logo; ?>"/>
							</p>
							<img class="lazyload" data-src="<?php the_sub_field('left_column_rate'); ?>">
							<?php if (have_rows('feature_list')) : ?>
								<ul>
									<?php while ( have_rows('feature_list') ) : the_row(); ?>

										<li>
											<?php the_sub_field('feature'); ?>
											<span><?php the_sub_field('left_column'); ?></span>
										</li>

									<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</div>

						<div class="columns medium-5">
							<p class="rate-compare-title">
								<img class="lazyload" data-src="<?php echo $right_column_logo; ?>"/>
							</p>
							<img class="lazyload" data-src="<?php the_sub_field('right_column_rate'); ?>">
							<?php if (have_rows('feature_list')) : ?>
								<ul>
									<?php while ( have_rows('feature_list') ) : the_row(); ?>

										<li>
											<?php the_sub_field('feature'); ?>
											<span><?php the_sub_field('right_column'); ?></span>
										</li>

									<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</div>

						<div class="columns rate-compare-src">
							Source: <?php the_sub_field('source'); ?>
						</div>
					</div>
				</div>

			<?php endif;


		/* --------------------------------------------
			intercom chat
		-------------------------------------------- */
		elseif ( get_row_layout() == 'flex_intercom_chat' ) : ?>

			<?php if (get_sub_field('test_mode')): ?>

				<?php if (is_user_logged_in()) : ?>

					<script>
					  window.intercomSettings = {
					    // app_id: "x9d3apy3"
					    app_id: "l1n3th4g"
					  };
					</script>
					<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/l1n3th4g';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>

				<?php endif; ?>

			<?php else: ?>

				<script>
				  window.intercomSettings = {
				    app_id: "l1n3th4g"
				  };
				</script>
				<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/l1n3th4g';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>

			<?php endif; ?>

			<?php


		/* --------------------------------------------
			simple content
		-------------------------------------------- */
		elseif ( get_row_layout() == 'flex_simple_content' ) : ?>

			<?php if (!get_sub_field('hide_widget')) :
					$headline						= get_sub_field('headline');
					$subheadline        = get_sub_field('subheadline');
					$scroll_anchor 			= get_sub_field('scroll_anchor');
			?>

				<div class="simple-content-section <?php echo ($extra_classes = get_sub_field('extra_css_classes')) ? $extra_classes : ''; ?>" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
					<div class="row header">
							<div class="columns text-center">
								<?php
								// headline
								if ($headline) : ?>
									<h1><?php echo $headline; ?></h1>
								<?php endif; ?>

								<?php
								// subheadline
								if ($subheadline) :
									$subheadline_text  = '<h3>';
									$subheadline_text .= ($subheadline_link) ? '<a href="' . $subheadline_link . '">' : '';
									$subheadline_text .= $subheadline;
									$subheadline_text .= ($subheadline_link) ? '<span>></span>' : '';
									$subheadline_text .= ($subheadline_link) ? '</a>' : '';
									$subheadline_text .= '</h3>';

									echo $subheadline_text;
								endif;
								?>
							</div>
					</div>
					<div class="row content">
						<div class="columns large-10 large-offset-1">
							<?php the_sub_field('content'); ?>
						</div>
					</div>
				</div>

			<?php endif;



		elseif ( get_row_layout() == 'fixed_top_button' ) : ?>
			<?php if (get_sub_field('show_button') == true) : ?>
				<div class="fixed-button">
					<a href="<?php echo get_sub_field('button_link'); ?>" class="button"><?php echo get_sub_field('button_text'); ?></a>
				</div>
			<?php endif;
		/* --------------------------------------------
			Email Form
		-------------------------------------------- */
		elseif ( get_row_layout() == 'flex_email_form' ) : ?>
			<?php if (!get_sub_field('hide_widget')) :
					$scroll_anchor			= get_sub_field('scroll_anchor');
					$form_title         = get_sub_field('form_title');
					$form_description   = get_sub_field('form_description');
					$first_name_field   = get_sub_field('first_name_field');
					$last_name_field    = get_sub_field('last_name_field');
					$state_field        = get_sub_field('state_field');
					$list_id    				= get_sub_field('list_id');
					$button_title 			= get_sub_field('button_title');
			?>
			<div class="email-form-section" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
				<div class="row">
					<div class="columns text-center">	
					<?php
						// form title
						if ($form_title) :
							echo '<h2>' . $form_title . '</h2>';
						endif;

						// form description
						if ($form_description) :
							echo '<h3>' . $form_description . '</h3>';
						endif;
					?>
					</div>
					
					<div class="columns">
							<div class="email-form-section send-email-form text-center">
									<form name="iterable_optin" action="//links.iterable.com/lists/publicAddSubscriberForm?publicIdString=<?php echo ($list_id) ? $list_id : ''; ?>" target="_blank" method="POST" class="email">
											<?php if ($first_name_field && $last_name_field) : ?>
												<div class="name_group">
													<input type="text" name="first_name" size="22" onfocus="if(this.value===this.defaultValue){this.value='';}" onblur="if(this.value===''){this.value=this.defaultValue;}" placeholder="Enter your first name">
													<input type="text" name="last_name" size="22" onfocus="if(this.value===this.defaultValue){this.value='';}" onblur="if(this.value===''){this.value=this.defaultValue;}" placeholder="Enter your last name">
												</div>
											<?php endif; ?>
											
											<div class="other_group">
											<input type="text" name="email" size="22" onfocus="if(this.value===this.defaultValue){this.value='';}" onblur="if(this.value===''){this.value=this.defaultValue;}" placeholder="Enter your email">
											
											<?php if ($state_field) : ?>
												<select name="location_state" onfocus="if(this.value===this.defaultValue){this.value='';}" onblur="if(this.value===''){this.value=this.defaultValue;}">
													<option hidden="" disabled="" selected="">Select a state</option>
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
											<?php endif; ?>
											
											<?php if (!($first_name_field && $last_name_field)) : ?>
											<input type="submit" value="<?php echo ($button_title) ? $button_title : '';?>">
											<?php endif; ?>
											</div>
											<?php if ($first_name_field && $last_name_field) : ?>
											<input type="submit" value="<?php echo ($button_title) ? $button_title : '';?>">
											<?php endif; ?>
									</form>
							</div>          
					</div>
				</div>
			</div>
			<?php endif;
		endif;
	endwhile;

else : ?>

	<div class="row">
		<div class="columns text-center">
			<br><br><br><br>No widgets were added.<br><br><br><br><br>
		</div>
	</div>

<?php endif; ?>


<?php get_footer(); ?>
