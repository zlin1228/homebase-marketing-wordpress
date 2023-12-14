<?php
/*
Template Name: Subscribe Success - MT192
*/
get_header(); ?>

<main id="primary" class="site-main" role="document">

<?php
if(have_rows('flexible_content')):
	while(have_rows('flexible_content')): the_row();    
?> 
	<?php
		/*
			SUCCESS HERO
		*/
		if(get_row_layout() == 'subscribe_success_hero'):
			$image = get_sub_field('hero_image');
			$headline = get_sub_field('headline');
			$subheadline = get_sub_field('subheadline');
	?>
	<div class="successHero">
		<div class="container">
            <div class="row">
                <div class="col col-12">
					<div class="col-inner">
						<?php
							if($image):
						?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
						<?php
							endif;
						?>
						<?php
							if($headline):
						?>
						<h1><?php echo $headline; ?></h1>
						<?php
							endif;
						?>
						<?php
							if($subheadline):
						?>
						<p><?php echo $subheadline; ?></p>
						<?php
							endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		endif;
	?>
	<?php
		/*
			QUICK LINKS
		*/
		if(get_row_layout() == 'quick_links'):
			$headline = get_sub_field('headline');
			$subheadline = get_sub_field('subheadline');
			$links = get_sub_field('link_blocks');
	?>
	<div class="quickLinks">
		<div class="container">
            <div class="row">
                <div class="col col-12">
					<div class="col-inner">
						<?php
							if($headline):
						?>
						<h2><?php echo $headline; ?></h2>
						<?php
							endif;
						?>
						<?php
							if($subheadline):
						?>
						<p><?php echo $subheadline; ?></p>
						<?php
							endif;
						?>
						<?php
							if($links):
						?>
							<div class="links">
							<?php
								foreach($links as $link):
									$block_icon = $link['block_icon'];
									$block_text = $link['text'];
									$block_link = $link['link'];
							?>
								<a target="_blank" href="<?php echo $block_link['url']; ?>">
									<?php
										if($block_icon):
									?>
									<img src="<?php echo $block_icon['url']; ?>" alt="<?php echo $block_icon['title']; ?>">
									<?php
										endif;
									?>
									<?php
										if($block_text):
									?>
									<p><?php echo $block_text; ?></p>
									<?php
										endif;
									?>
									<?php
										if($block_link):
									?>
									<h5><?php echo $block_link['title']; ?></h5>
									<?php
										endif;
									?>
								</a>
							<?php
								endforeach;
							?>
							</div>
						<?php
							endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		endif;
	?>
<?php 
	endwhile;
endif;
?>

</main>

<?php get_footer(); ?>