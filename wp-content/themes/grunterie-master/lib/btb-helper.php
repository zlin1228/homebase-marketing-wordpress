<?php
define('COVID_DS_PATH', WP_CONTENT_DIR . '/uploads/datasources/');
define('NATIONAL_BTB_FILE', 'rms_database_generator-msa_and_state_master.csv');

class Btb_data_obj {
	public $index_data_list;

	function __construct() {
		$index_data_file = fopen(COVID_DS_PATH . NATIONAL_BTB_FILE,"r");
		
		$data_header = fgetcsv($index_data_file);

		while(! feof($index_data_file)) {
			$data_row = fgetcsv($index_data_file);
			if( is_array($data_row) ) for( $i = 1; $i < count($data_row); $i++) $this->index_data_list[$data_row[0]][$data_header[$i]] = $data_row[$i];
		}

		fclose($index_data_file);

		$this->ini_shortcodes();
	}

	function show_me_what_you_got(){

		print_r($this->index_data_list);

	}

	function generate_output_attributes($arr){
		$output = '';
		foreach ($arr as $key => $value) $output .= $key . '="' . $value . '" ';
		return $output;
	}

	private function get_msa_list(){
		echo '<li>ah la chak me agya nopriv</li>';

	}

	function ini_shortcodes(){
		add_shortcode( 'btb_jhb', function( $atts ){
			if( !isset($atts['index'] )){
				$location = get_location_name( array( 'skip_convert_state_code' => true ) );

				if( $location == '' ) $atts['index'] = 'USA';
				else $atts['index'] = $location;
			}
			
			$value = $this->index_data_list[$atts['index']][$atts['field']];

			if( isset($atts['datachange']) && $atts['datachange'] == 'difference-from-1' ) $value = 1 + $value;

			if( isset($atts['return']) ){
				if( $atts['return'] == 'ratio-percentage' ) $value = $value * 100;
				elseif( $atts['return'] == 'ratio-percentage-pie' ) {
					$value = $value * 100;
					if( $value < 0 ){
						$colors = explode(',', $atts['negativecolor']);
						$value *= -1;
					}
					else $colors = explode(',', $atts['positivecolor']);

					$value =	'
								<svg width="100%" height="100%" viewBox="0 0 42 42" class="donut">
									<circle class="donut-hole" cx="21" cy="21" fill="#fff" r="15.91549430918954"></circle>
									<circle class="donut-ring" cx="21" cy="21" r="15.91549430918954" fill="transparent" stroke="#' . $colors[0] . '" stroke-width="5"></circle>
									<circle class="donut-segment" cx="21" cy="21" r="15.91549430918954" fill="transparent" stroke-dashoffset="25" stroke="#' . $colors[1] . '" stroke-width="5" stroke-dasharray="' . $value . ' ' . (100-$value) . '"></circle>
								</svg>
								';
				}
			}
			

			if( isset($atts['prefix']) ){
				if( $atts['prefix'] == 'pos-neg' ) $value = ( $value < 0 ? $value : ('+' . $value) );
				elseif( $atts['prefix'] == 'up-down' ) $value = ( $value < 0 ? 'down ' . ( -1 * $value) : 'up ' . $value );
				elseif( $atts['prefix'] == 'up-down-image' ){
					$value = '<img class="lazyload" data-src="' . get_template_directory_uri() . ( $value < 0 ? '/img/A2down.png' : '/img/A1up.png' ) . '" alt="">';
				}
			}

			return '<span class="btb_jhb_render" ' . $this->generate_output_attributes($atts) . '>' . $value . '</span>';
		} );
	}
}
// exit();