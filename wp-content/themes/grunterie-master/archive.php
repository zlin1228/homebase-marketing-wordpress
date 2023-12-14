<?php get_header(); ?>

	<!-- Start the main container -->
<div class="container" role="document">
	<div class="row">
		<div class="small-12 medium-9 medium-centered columns">
			<!-- Row for main content area -->
			<div id="content" role="main">
				<div class="blog-header">

					<h1><?php single_cat_title( '', true ); ?></h1>
				</div>

				<ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-4">
			
					<?php if ( have_posts() ) : ?>
					
						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'content', get_post_format() ); ?>
						<?php endwhile; ?>
						
						<?php else : ?>
							<?php get_template_part( 'content', 'none' ); ?>
						
					<?php endif; // end have_posts() check ?>
				</ul>

			</div>
		</div>
	</div>
</div>

<section class="pagination">
	<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php if ( function_exists('reverie_pagination') ) { reverie_pagination(); } else if ( is_paged() ) { ?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
			</nav>
	<?php } ?>
</section>
		
<?php get_footer(); ?>