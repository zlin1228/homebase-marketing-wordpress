<?php 

/*
 * Define Advanced Custom Fields for Homebase 
 */
function post_category_acf_fields() {

  acf_add_local_field_group(array(
    'key' => 'group_5f4f6bddbf6a9',
    'title' => 'Category custom fields',
    'fields' => array(
      array(
        'key' => 'field_5f4f6c23d5f39',
        'label' => 'Featured Post',
        'name' => 'featured_post',
        'type' => 'group',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'layout' => 'block',
        'sub_fields' => array(
          array(
            'key' => 'field_5f4f6c45d5f3a',
            'label' => 'Visibility',
            'name' => 'hide_widget',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '50',
              'class' => '',
              'id' => '',
            ),
            'message' => '',
            'default_value' => 0,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
          ),
          array(
            'key' => 'field_5f4f6c7ad5f3b',
            'label' => 'Post Type',
            'name' => 'post_type',
            'type' => 'radio',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '50',
              'class' => '',
              'id' => '',
            ),
            'choices' => array(
              'recent' => 'Latest',
              'popular' => 'Popular',
              'custom' => 'Custom',
            ),
            'allow_null' => 0,
            'other_choice' => 0,
            'default_value' => '',
            'layout' => 'horizontal',
            'return_format' => 'value',
            'save_other_choice' => 0,
          ),
          array(
            'key' => 'field_5f4f6cebd5f3c',
            'label' => 'Custom post',
            'name' => 'custom_post',
            'type' => 'relationship',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
              array(
                array(
                  'field' => 'field_5f4f6c7ad5f3b',
                  'operator' => '==',
                  'value' => 'custom',
                ),
              ),
            ),
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'post_type' => array(
              0 => 'post',
            ),
            'taxonomy' => '',
            'filters' => array(
              0 => 'search',
              1 => 'post_type',
              2 => 'taxonomy',
            ),
            'elements' => '',
            'min' => '',
            'max' => 1,
            'return_format' => '',
          ),
        ),
      ),
      array(
        'key' => 'field_5f4f6d51d5f3d',
        'label' => 'Post slider',
        'name' => 'post_slider',
        'type' => 'group',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'layout' => 'block',
        'sub_fields' => array(
          array(
            'key' => 'field_5f4f6d51d5f3e',
            'label' => 'Visibility',
            'name' => 'hide_widget',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '25',
              'class' => '',
              'id' => '',
            ),
            'message' => '',
            'default_value' => 0,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
          ),
          array(
            'key' => 'field_5f4f73682f0c6',
            'label' => 'Count',
            'name' => 'posts_count',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '25',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
          ),
          array(
            'key' => 'field_5f4f6d51d5f3f',
            'label' => 'Post Type',
            'name' => 'post_type',
            'type' => 'radio',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '50',
              'class' => '',
              'id' => '',
            ),
            'choices' => array(
              'recent' => 'Latest',
              'popular' => 'Popular',
              'custom' => 'Custom',
            ),
            'allow_null' => 0,
            'other_choice' => 0,
            'default_value' => '',
            'layout' => 'horizontal',
            'return_format' => 'value',
            'save_other_choice' => 0,
          ),
          array(
            'key' => 'field_5f4f6d51d5f40',
            'label' => 'Custom posts',
            'name' => 'custom_posts',
            'type' => 'relationship',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
              array(
                array(
                  'field' => 'field_5f4f6d51d5f3f',
                  'operator' => '==',
                  'value' => 'custom',
                ),
              ),
            ),
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'post_type' => array(
              0 => 'post',
            ),
            'taxonomy' => '',
            'filters' => array(
              0 => 'search',
              1 => 'post_type',
              2 => 'taxonomy',
            ),
            'elements' => '',
            'min' => 4,
            'max' => '',
            'return_format' => 'object',
          ),
        ),
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'taxonomy',
          'operator' => '==',
          'value' => 'category',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
  ));
}

if ( function_exists('acf_add_local_field_group') ) add_action('acf/init', 'post_category_acf_fields');  