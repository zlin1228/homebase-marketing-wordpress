<?php
/**
 *Template Name: page template
 
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Homebase
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container-narrow">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</div>
	</main><!-- #main -->

  	<script>
	    var question = $('.question');
	    var answer = $('.answer');
	    var mainEntity = [];
	    
	    var type = "@type";
	    
	    for (var i = 0; i < question.length; i++) {
	    	var faqObj = {};
	    	faqObj[type] = "Question";
		    faqObj.name = question[i].innerText;
		    faqObj.acceptedAnswer = {"@type": "Answer","text": answer[i].innerHTML};
		    mainEntity.push(faqObj);
	    }

	    var schema = {
	        "@context": "http://www.schema.org",
	        "@type": "FAQpage",
	        "mainEntity": mainEntity
	    }

	    var script = document.createElement('script');
	    script.type = "application/ld+json";
	    script.text = JSON.stringify(schema);

	    document.querySelector('body').appendChild(script);
	</script>

<?php
get_footer();
