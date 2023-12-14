<?php 

/*
 * Define Advanced Custom Fields for Homebase 
 */
function flexible_post_mt41_acf_fields() {

  acf_add_local_field_group(array(
    'key' => 'group_5f1888cb50077',
    'title' => 'Option: Post Content - MT41',
    'fields' => array(
      array(
        'key' => 'field_5f189317e3f39',
        'label' => 'Visibility of Share post widget',
        'name' => 'hide_share',
        'type' => 'true_false',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '33.3',
          'class' => '',
          'id' => '',
        ),
        'message' => 'Hide share post widget',
        'default_value' => 0,
        'ui' => 0,
        'ui_on_text' => '',
        'ui_off_text' => '',
      ),
      array(
        'key' => 'field_5f189389e3f3a',
        'label' => 'Visibility of author info widget',
        'name' => 'hide_author_box',
        'type' => 'true_false',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '33.3',
          'class' => '',
          'id' => '',
        ),
        'message' => 'Hide author info box',
        'default_value' => 0,
        'ui' => 0,
        'ui_on_text' => '',
        'ui_off_text' => '',
      ),
      array(
        'key' => 'field_5f189400e3f3b',
        'label' => 'Visibility of notice widget',
        'name' => 'show_notice',
        'type' => 'true_false',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '33.3',
          'class' => '',
          'id' => '',
        ),
        'message' => 'Show notice',
        'default_value' => 0,
        'ui' => 0,
        'ui_on_text' => '',
        'ui_off_text' => '',
      ),
      array(
        'key' => 'field_5f189462e3f3c',
        'label' => 'Notice text',
        'name' => 'notice_text',
        'type' => 'textarea',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_5f189400e3f3b',
              'operator' => '==',
              'value' => '1',
            ),
          ),
        ),
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'maxlength' => '',
        'rows' => 3,
        'new_lines' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'post',
        ),
      ),
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'engineering-blog',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'acf_after_title',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
  ));
  
  
}

if ( function_exists('acf_add_local_field_group') ) add_action('acf/init', 'flexible_post_mt41_acf_fields');  