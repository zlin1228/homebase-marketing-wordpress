<?php
/*
Template Name: Subscribe - MT192
*/
get_header(); ?>

<main id="primary" class="site-main" role="document">

<?php
if(have_rows('flexible_content')):
	while(have_rows('flexible_content')): the_row();    

	/* --------------------------------------------
      Header
    -------------------------------------------- */
	if ( get_row_layout() == 'header_settings' ): ?>

		<?php if (!get_sub_field('hide_widget')) : ?>
			<?php 
			$headline 		= get_sub_field('headline');
			$subheadline 	= get_sub_field('subheadline');
			$form_link 		= get_sub_field('form_link');
			$button_text 	= get_sub_field('button_text');
			?>
			<div class="section section-header">
				<div class="container">
		            <div class="row">
		                <div class="col col-12">
							<div class="col-inner">
								<?php if($headline): ?>
								<h1><?php echo $headline; ?></h1>
								<?php endif; ?>
								<?php if($subheadline):	?>
								<p><?php echo $subheadline; ?></p>
								<?php endif; ?>
								<form name="subscribe-header" 
									action="<?php echo $form_link; ?>"
									method="POST"
									class="email-signup-form"
								>
									<input class="subscribe-country" type="hidden" name="country">
									<input class="subscribe-source-url" type="hidden" name="source_url">
									<div class="form-item input">
										<input class="homeform"
											aria-label="email address"
											type="email"
											name="email"
											placeholder="Email address"
										/>
									</div>
									<div class="form-item">
										<button type="submit"
											aria-label="submit"
											id="create-account"
											name="Submit"
											class="primary"
										><?php if($button_text) : echo $button_text; else : echo "Subscribe"; endif; ?></button>
									</div>
								</form> 
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>	
		

	<?php
    /* --------------------------------------------
      Post grid widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_post_grid' ) : ?>

      	<?php if (!get_sub_field('hide_widget')) : ?>

	        <?php
	        $headline                    = get_sub_field('headline');
	        $custom_posts                = get_sub_field('custom_posts');
	        ?>

	    <div class="section section-post-grid">
				<div class="container">
					<div class="row">
						<div class="col col-12">
							<div class="col-inner">
								<?php if($headline) : ?>
									<h3><?php echo $headline; ?></h3>
								<?php endif; ?>
								<?php if($custom_posts): ?>							
									<ul class="post-grid">
										<?php foreach($custom_posts as $custom_post): 
												$post = $custom_post['custom_post'];
												setup_postdata($post); ?>
											<li class="post-item"> 
												<?php get_template_part('template-parts/article', 'thumb'); ?>
											</li> 
										<?php endforeach; 
										wp_reset_postdata(); 
										?>
									</ul>								
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
	    </div>
      	<?php endif; ?>
    
	
	<?php
	/* --------------------------------------------
	  Customer quote section
	-------------------------------------------- */
	elseif ( get_row_layout() == 'customer_quote' ) : ?>

		<?php if (!get_sub_field('hide_widget')) : ?>

			<?php
			$quoteTexts = get_sub_field('quote_texts');
			$name = get_sub_field('name');
			$position = get_sub_field('position');
			?>

			<div class="section section-customer-quote">
				<div class="container">
					<div class="row">
						<div class="col col-12 quote-arrow">
							<div class="col-inner">
								<?php if($quoteTexts): ?>
								<h4><?php echo $quoteTexts; ?></h4>
								<?php endif; ?>
								<?php if($name): ?>
								<h5><?php echo $name; ?></h5>
								<?php endif; ?>
								<?php if($position): ?>
								<h6><?php echo $position; ?></h6>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
	
	
	<?php
	/* --------------------------------------------
      Subscribe CTA
    -------------------------------------------- */
	elseif ( get_row_layout() == 'subscribe_line' ): ?>
		<?php if (!get_sub_field('hide_widget')) : ?>
			<?php  
			$sectionTitle = get_sub_field('section_title');
			$form_link 		= get_sub_field('form_link');
			$button_text 	= get_sub_field('button_text');
			?>
			<div class="section section-subscribe-cta">
				<div class="container">
					<div class="row">
						<div class="col col-12 col-lg-6">
							<div class="col-inner">
								<?php
									if($sectionTitle):
								?>
								<h3><?php echo $sectionTitle; ?></h3>
								<?php
									endif;
								?>
							</div>
						</div>
						<div class="col col-12 col-lg-6">
							<div class="col-inner">
								<form name="subscribe-cta" 
									action="<?php echo $form_link; ?>"
									method="POST"
									class="email-signup-form"
								>
									<input class="subscribe-country" type="hidden" name="country">
									<input class="subscribe-source-url" type="hidden" name="source_url">
									<div class="form-item input">
										<input class="homeform"
											aria-label="email address"
											type="email"
											name="email"
											placeholder="Email address"
										/>
									</div>
									<div class="form-item">
										<button type="submit"
											aria-label="submit"
											id="create-account"
											name="Submit"
											class="primary"
										><?php if($button_text) : echo $button_text; else : echo "Subscribe"; endif; ?></button>
									</div>
								</form> 
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>	
	
	<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>

</main>

<?php get_footer(); ?>