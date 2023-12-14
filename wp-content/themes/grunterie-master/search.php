<?
/* Template Name: Search Results */

$search_refer = $_GET["post_type"];
if ($search_refer == 'support') { load_template(TEMPLATEPATH . '/support-searchresults.php'); }
else if ($search_refer == 'cs-articles') { load_template(TEMPLATEPATH . '/cs-articles-searchresults.php'); }
else { load_template(TEMPLATEPATH . '/search-standard.php'); };