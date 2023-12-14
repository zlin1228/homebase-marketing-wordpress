<?php 


add_action ( 'wp_head', 'global_js_variables' );

function global_js_variables(){ ?>
  <script type="text/javascript">
    var ajaxurl = <?php echo json_encode( admin_url( "admin-ajax.php" ) ); ?>;
    var ajaxnonce = <?php echo json_encode( wp_create_nonce( "itr_ajax_nonce" ) ); ?>;
  </script><?php
}

add_action( 'wp_ajax_generate_pdf_schedule_maker', 'generate_pdf_schedule_maker' );
add_action( 'wp_ajax_nopriv_generate_pdf_schedule_maker', 'generate_pdf_schedule_maker' );

function generate_pdf_schedule_maker() {
    if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) { 
        $schedule_data = $_REQUEST['schedule_data'];
        $url = get_pdf_schedule_maker($schedule_data);
        echo $url;
        die();
    } else {		
		exit();
	}
}

/**
 * Generates the Schedule Maker PDF via AJAX
 * @return url PDF download url
 */
function get_pdf_schedule_maker($schedule_data) {
    
    //MPDF
    try {                

        $html =  file_get_contents(get_template_directory() . '/pdf/schedule-maker/schedule-maker.html');
        
        $html_schedule = get_schedule_html($schedule_data);

        $html = str_replace('[REPLACE_LOGO]', get_template_directory() . '/pdf/schedule-maker/img/logo.png', $html);
        $html = str_replace('[REPLACE_SCHEDULE]',$html_schedule, $html);

        $mpdf = new \Mpdf\Mpdf(['orientation' => 'L', 'mode' => 'utf-8','format' => 'A4-L','margin_header' => 0,
        'margin_footer' => 0, 'setAutoTopMargin'=>'stretch']);
        
        //$mpdf->debug = true;
        $mpdf->autoPageBreak = false;
        $mpdf->WriteHTML($html);
        
        $time = time();
        file_put_contents( $file_url = wp_get_upload_dir()['basedir'] . '/pdf/schedule-maker/your-schedule-' . $time. '.html', $html);
        
        //$output = $mpdf->Output(get_template_directory() .'/temp-pdf/mpdf test.pdf', \Mpdf\Output\Destination::DOWNLOAD);
        $output = $mpdf->Output('', \Mpdf\Output\Destination::STRING_RETURN);

        
        $file_path = wp_get_upload_dir()['basedir'] . '/pdf/schedule-maker/your-schedule-' . $time. '.pdf';
        $file_url = wp_get_upload_dir()['baseurl'] . '/pdf/schedule-maker/your-schedule-' . $time. '.pdf';
        file_put_contents($file_path, $output);
        return $file_url;           
        
    } catch (\Mpdf\MpdfException $e) { 
        echo 'Error: ' . $e->getMessage();
    }       
}

/**
 * Generates the html table content for schedule PDF 
 * @return json schedule info
 */
function get_schedule_html($schedule) {
    $html = '';

    $days = array('1' => 'Monday', 
                  '2'=>'Tuesday',
                  '3'=>'Wednesday',
                  '4'=>'Thursday',
                  '5'=>'Friday',
                  '6'=>'Saturday',
                  '7'=>'Sunday');

    $html_days = array();    
    
    if( is_array($schedule)) {

        //Initialize the array of html row for each day
        foreach($days as $day_num => $day_name) {
            $html_days[$day_name] = '';
        }

        //Sort array by day field (number 1= Monday .. 7 Sunday)
        $order_by = "day";
        usort($schedule, function ($a, $b)
        {
            if (intval($a['day']) == intval($b['day'])) {
                return 0;
            }
            return (intval($a['day']) < intval($b['day'])) ? -1 : 1;           
        });

    
        foreach($days as $day_num => $day_name) {
            $last_to = 10;
            foreach($schedule as $shift) {
                if($shift['day'] == $day_num) {
                    $from = intval($shift['from']);
                    $to = intval($shift['to']);
                    $duration =  $to - $from; 



                    /*
                    $same_line = false;
                    if($from >= $last_to && ($last_to + $duration <= 10)) {
                        $class_same_line = 'same-line';
                        $class_from_hour = "h". (10 - $last_to - $duration + 2); //+2 because separation if different to offset or hour 
                    } else {
                        $class_same_line = 'new-line';
                        $class_from_hour = "h". $shift['from']; 
                    }*/
                    $class_same_line = '';
                    //From
                    $class_from_hour = "h". $shift['from']; 
                    //Duration class
                    $class_duration = "w". $duration;
                    //Role 
                    $role = strlen($shift['role'])?'('.$shift['role'].')':'';
                    //Join all clases
                    $shift_clases = $class_duration .' ' . $class_from_hour . ' ' .$class_same_line;
                    preg_match_all('/\b(\w)/', $shift['name'],  $initials_arr);
                    $initials = 'NN';
                    if(is_array($initials_arr)) {
                        if(count($initials_arr) && count($initials_arr[0]) >=1) 
                            $initials = $initials_arr[0][0] . $initials_arr[0][1];
                        else
                            $initials = $initials_arr[0][0];
                    }

                    $last_to = $to;                    
                    
                    $html_days[$day_name].= '<div class="shift ' . $shift_clases .' "><div class="initials">' . $initials .'</div><div class="name ' . $shift['color'] . '">' . $shift['name'] . ' ' . $role  . ' </div></div>';                    
                }
            }
        }
    
        foreach($days as $day_num => $day_name) {
            $html.= '<div class="div-table-row">';
            $html.= '    <div class="div-table-col fixed left">'. $day_name .'</div>';
            $html.= '         <div class="shift-container">';
            $html.= $html_days[$day_name];
            $html.= '         </div>';
            $html.= '      </div>';
            $html.= '</div>';

        }    
    }
    
    return $html;
}
add_filter( 'ninja_forms_submit_data', function( $form_data ){
  
    
    if( ( $form_data ) ) {
        if( $form_data['settings']['key'] == 'schedule_maker') { // Schedule maker
            $schedule_data = null;
            $schedule_url = '';

            //Generate PDF
            foreach($form_data[ 'fields' ] as $field) {
                if($field['key'] == 'schedule_data') {
                    $schedule_data = json_decode($field['value'], true);
                    $schedule_url = get_pdf_schedule_maker($schedule_data);
                    break;
                }
            }

            //Set url
            foreach($form_data[ 'fields' ] as $field) {
                if($field['key'] == 'schedule_pdf_url') {
                    $schedule_url_field = $field['id'];
                    break;
                }
            }
            $form_data[ 'fields' ][$schedule_url_field][ 'value' ] = $schedule_url;
        }
    }
    
      // If no errors, return the $form_data.
    return $form_data;

});

// btb ajax module to fetch all msa, cities, zip codes and stuff
add_action( 'wp_ajax_nopriv_msa_list', 'get_msa_list_for_btb');
add_action( 'wp_ajax_msa_list', 'get_msa_list_for_btb');
function get_msa_list_for_btb(){

    global $wpdb;
    if( is_numeric($_POST['txt']) && strlen($_POST['txt']) > 2 ){
        $rows = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}btb_msa_zip_index WHERE zip LIKE '%" . $_POST['txt'] . "%' or state LIKE '%" . $_POST['txt'] . "%' or msa LIKE '%" . $_POST['txt'] . "%'", ARRAY_A );

        $output = '';
        // print_r($rows);
        foreach ($rows as $row) {
            $val = $row['msa'];
            if( $val == '' ) $val = $row['state'];

            $output .= '<li style="cursor:pointer" value="/reopen-business-coronavirus/details/' . $val . '">' . ( $val == $row['state'] ? '' : $row['msa'] . ', ') . $row['state'] . ' ' . $row['zip'] . '</li>';
        }
    }
    elseif( strlen($_POST['txt']) == 2 && !is_null( get_state_name( strtoupper($_POST['txt']) ) ) ) $output .= '<li style="cursor:pointer" value="/reopen-business-coronavirus/details/' . strtoupper($_POST['txt']) . '">' . get_state_name( strtoupper($_POST['txt']) ) . '</li>';
    else{
        $midrow = array();
        $rows = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}btb_msa_zip_index WHERE msa LIKE '%" . $_POST['txt'] . "%'", ARRAY_A );
        foreach ($rows as $row) $midrow[ $row['msa'] ] = $row['state']; 

        foreach ($midrow as $msa => $state) $output .= '<li style="cursor:pointer" value="/reopen-business-coronavirus/details/' . $msa . '">' . $msa . ', ' . $state . '</li>';
    }
    
    // echo '<li>ah la chak me fer agya</li>';
    die( $output );
}