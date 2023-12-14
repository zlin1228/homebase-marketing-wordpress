<?php get_header(); ?>
<section class="banner short single integration-banner" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>);"> 
	<div id="overlay"></div>
	<div class="row overlay-content">
		<div class="small-12 medium-8 medium-centered columns">
			<?php //reverie_entry_meta(); ?>
			<h1><?php the_title(); ?></h1>
			<p class="category"><?php the_category(', ') ?></p>
			<p class="post-author"><?php the_author(); ?></p>

			<br>

			<form action="https://app.joinhomebase.com/onboarding/sign-up?fullname=$_GET['fullname']&email=$_GET['email']" 
				  id="home-signup-form" 
				  method="GET" 
				  class="home-form"
			>
				<input class="homeform" 
					   type="email" 
					   name="email" 
					   placeholder="Email address"
				/>
				<input type="submit" 
					   id="create-account" 
					   name="Submit" 
					   class="primary-cta buttonsbn" 
					   value="Start now for free"
				/>
			</form>
		</div>
	</div>
</section>

<div class="container" role="document">
	<div class="row">
		<div class="small-11 small-centered large-8 columns" id="content" role="main">

			<?php /* Start loop */ ?>
			<?php while (have_posts()) : the_post(); ?>

				<div class="entry-content">
					<?php the_content(); ?>
				</div>

				<div class="blog-post-author">
					<?php
					$post_author_id = $post->post_author;
					$author_photo   = get_field('acf_user_photo', 'user_' . $post_author_id);
					$auhtor_descr   = get_the_author_meta('description');
					?>
					<div>
						<?php if ($author_photo) : ?>
							<img src="<?php echo $author_photo; ?>" alt="">
						<?php endif; ?>
						<div class="blog-post-author-text <?php echo ($author_photo) ? 'blog-post-author-text-with-photo' : ''; ?>">
							<strong><?php the_author(); ?></strong>
							<?php echo ($auhtor_descr) ? $auhtor_descr : ''; ?>
						</div>
					</div>
				</div>

				<div class="post-nav">
					<span class="prev"><?php previous_post_link('%link', '< Previous Post'); ?></span>
					<span class="next"><?php next_post_link('%link', 'Next Post >'); ?></span>
				</div>

				<?php comments_template(); ?>
			<?php endwhile; // End the loop ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>