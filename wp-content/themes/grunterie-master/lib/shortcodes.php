<?php
add_shortcode('hbqs', 'hbqs_func');
function  hbqs_func( $atts ){
	return ( isset( $_GET[ $atts['key'] ] ) ? $_GET[ $atts['key'] ] . ' ' : '' );
}

//[hbif condition="notempty" qskey="fname"]Welcome! Your friend <span style="color:#04a2bd;text-transform:capitalize">[hbqs key="fname"][hbqs key="lname"]</span>invites you  to use homebase[/hbif][hbif condition="empty" qskey="fname"]You're invited to use free employee  scheduling  and time clocks[/hbif]
add_shortcode('hbif', 'hbif_func');
function hbif_func( $atts, $content ){
	if( $atts['condition'] == 'empty' && ( isset($_GET[ $atts['qskey'] ]) && $_GET[ $atts['qskey'] ] != '' ) ) return;
	if( $atts['condition'] == 'notempty' && ( !isset($_GET[ $atts['qskey'] ]) || $_GET[ $atts['qskey'] ] == '' ) ) return;

	return do_shortcode( $content );
}

add_shortcode( 'hb_get_covid_sheets', 'covid_sheets_func' );
function covid_sheets_func( $atts, $jscript ){
	/*if( !is_user_logged_in() ){
		$ref = stripos($_SERVER['HTTP_REFERER'], $atts['referrer']);
		if( ( $ref != 0 || !is_int($ref) ) ){
			wp_redirect( $atts['referrer'] );
			exit();
		}
	}*/
	
	$jscript = str_replace("&#8216;", "'", 	$jscript);
	$jscript = str_replace("&#8217;", "'", 	$jscript);
	$extrastuff = "<script>function hbcustomscript(){ " . $jscript . " }</script><style>" . $atts['style'] . " </style></body>";

	$output = file_get_contents($atts['src']);
	$replacements = array(
								'<link rel="shortcut icon" href="//ssl.gstatic.com/docs/spreadsheets/favicon3.ico">' => '',
								"href='/" => "href='https://docs.google.com/",
								"src='/" => "src='https://docs.google.com/",
								'<body' => '<body onload="hbcustomscript();"',
								'</body>' => $extrastuff,
								"push('/" => "push('https://docs.google.com/",
								"rightanglehtmlchar" => ">"
							);
	foreach ($replacements as $old => $new) $output = str_replace($old, $new, $output);
	
	return $output;
}