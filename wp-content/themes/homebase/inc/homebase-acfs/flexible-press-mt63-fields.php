<?php 

/*
 * Define Advanced Custom Fields for Homebase 
 */
function flexible_press_mt63_acf_fields() {

  acf_add_local_field_group(array(
    'key' => 'group_5f3ac906ad898',
    'title' => 'Template: Press',
    'fields' => array(
      array(
        'key' => 'field_5f3acac1863bf',
        'label' => 'Flexible Content',
        'name' => 'flexible_content',
        'type' => 'flexible_content',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'layouts' => array(
          'layout_5f3acad303c3f' => array(
            'key' => 'layout_5f3acad303c3f',
            'name' => 'flex_hero',
            'label' => 'Hero',
            'display' => 'block',
            'sub_fields' => array(
              array(
                'key' => 'field_5f3acafb863c0',
                'label' => 'Visibility',
                'name' => 'hide_widget',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'message' => 'Hide widget',
                'default_value' => 0,
                'ui' => 0,
                'ui_on_text' => '',
                'ui_off_text' => '',
              ),
              array(
                'key' => 'field_5f3acb17863c1',
                'label' => 'Headline',
                'name' => 'headline',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '',
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
                'key' => 'field_5f3acb41863c2',
                'label' => 'Subheadline',
                'name' => 'subheadline',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '',
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
                'key' => 'field_5f3acb49863c3',
                'label' => 'Content',
                'name' => 'content',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
                'delay' => 0,
              ),
            ),
            'min' => '',
            'max' => '',
          ),
          'layout_5f3acbd6863c4' => array(
            'key' => 'layout_5f3acbd6863c4',
            'name' => 'flex_post_slider',
            'label' => 'Post slider',
            'display' => 'block',
            'sub_fields' => array(
              array(
                'key' => 'field_5f3acbd6863c5',
                'label' => 'Visibility',
                'name' => 'hide_widget',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '100',
                  'class' => '',
                  'id' => '',
                ),
                'message' => 'Hide widget',
                'default_value' => 0,
                'ui' => 0,
                'ui_on_text' => '',
                'ui_off_text' => '',
              ),
              array(
                'key' => 'field_5f3acbd6863c6',
                'label' => 'Headline',
                'name' => 'headline',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '',
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
                'key' => 'field_5f43d7cfce4bb',
                'label' => 'Slides',
                'name' => 'slides',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'collapsed' => '',
                'min' => 4,
                'max' => 0,
                'layout' => 'block',
                'button_label' => 'Add slide',
                'sub_fields' => array(
                  array(
                    'key' => 'field_5f43d7f2ce4bc',
                    'label' => 'Category',
                    'name' => 'category',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                      'width' => '40',
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
                    'key' => 'field_5f43df9104940',
                    'label' => 'Category Link',
                    'name' => 'category_url',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                      'width' => '40',
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
                    'key' => 'field_5f43df9104941',
                    'label' => 'Open in new tab',
                    'name' => 'c_open_in_new_tab',
                    'type' => 'true_false',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                      'width' => '20',
                      'class' => '',
                      'id' => '',
                    ),
                    'message' => '',
                    'default_value' => 1,
                    'ui' => 0,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                  ),
                  array(
                    'key' => 'field_5f43d8fdce4bd',
                    'label' => 'Date',
                    'name' => 'date',
                    'type' => 'date_picker',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                      'width' => '25',
                      'class' => '',
                      'id' => '',
                    ),
                    'display_format' => 'm/j/Y',
                    'return_format' => 'F j, Y',
                    'first_day' => 1,
                  ),
                  array(
                    'key' => 'field_5f43d966ce4be',
                    'label' => 'Title',
                    'name' => 'title',
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
                    'key' => 'field_5f43d980ce4bf',
                    'label' => 'Description',
                    'name' => 'description',
                    'type' => 'textarea',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                      'width' => '50',
                      'class' => '',
                      'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'maxlength' => '',
                    'rows' => 4,
                    'new_lines' => '',
                  ),
                  array(
                    'key' => 'field_5f43d99dce4c0',
                    'label' => 'Link Text',
                    'name' => 'link_text',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                      'width' => '40',
                      'class' => '',
                      'id' => '',
                    ),
                    'default_value' => 'Read article',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                  ),
                  array(
                    'key' => 'field_5f43d9b1ce4c1',
                    'label' => 'Link URL',
                    'name' => 'link_url',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                      'width' => '40',
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
                    'key' => 'field_5f43d9b1ce4c2',
                    'label' => 'Open in new tab',
                    'name' => 'l_open_in_new_tab',
                    'type' => 'true_false',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                      'width' => '20',
                      'class' => '',
                      'id' => '',
                    ),
                    'message' => '',
                    'default_value' => 1,
                    'ui' => 0,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                  ),
                ),
              ),
            ),
            'min' => '',
            'max' => '',
          ),
          'layout_5f3acfa2863ca' => array(
            'key' => 'layout_5f3acfa2863ca',
            'name' => 'flex_press_logos',
            'label' => 'Press Logos',
            'display' => 'block',
            'sub_fields' => array(
              array(
                'key' => 'field_5f3acfa2863cb',
                'label' => 'Visibility',
                'name' => 'hide_widget',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'message' => 'Hide widget',
                'default_value' => 0,
                'ui' => 0,
                'ui_on_text' => '',
                'ui_off_text' => '',
              ),
              array(
                'key' => 'field_5f3acfe2863ce',
                'label' => 'Logos',
                'name' => 'logos',
                'type' => 'gallery',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'medium',
                'insert' => 'append',
                'library' => 'all',
                'min' => '',
                'max' => '',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
              ),
            ),
            'min' => '',
            'max' => '',
          ),
          'layout_5f3ad4d7863cf' => array(
            'key' => 'layout_5f3ad4d7863cf',
            'name' => 'flex_2_columns',
            'label' => '2 Columns Widget',
            'display' => 'block',
            'sub_fields' => array(
              array(
                'key' => 'field_5f3ad503863d0',
                'label' => 'Visibility',
                'name' => 'hide_widget',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'message' => 'Hide widget',
                'default_value' => 0,
                'ui' => 0,
                'ui_on_text' => '',
                'ui_off_text' => '',
              ),
              array(
                'key' => 'field_5f3ad5a9863d2',
                'label' => 'Left',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
              ),
              array(
                'key' => 'field_5f3ad5b6863d3',
                'label' => 'Headline',
                'name' => 'headline',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '',
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
                'key' => 'field_5f3ad5c6863d4',
                'label' => 'Subheadline',
                'name' => 'subheadline',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '',
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
                'key' => 'field_5f3ad5f1863d5',
                'label' => 'Right',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
              ),
              array(
                'key' => 'field_5f3ad602863d6',
                'label' => 'Blocks',
                'name' => 'blocks',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'block',
                'button_label' => '',
                'sub_fields' => array(
                  array(
                    'key' => 'field_5f3ad67b863d7',
                    'label' => 'Icon',
                    'name' => 'icon',
                    'type' => 'image',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                      'width' => '20',
                      'class' => '',
                      'id' => '',
                    ),
                    'return_format' => 'array',
                    'preview_size' => 'thumbnail',
                    'library' => 'all',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                  ),
                  array(
                    'key' => 'field_5f3ad6c6863d8',
                    'label' => 'Block Headline',
                    'name' => 'block_headline',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                      'width' => '40',
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
                    'key' => 'field_5f3ad6e8863d9',
                    'label' => 'Block Description',
                    'name' => 'block_description',
                    'type' => 'textarea',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                      'width' => '40',
                      'class' => '',
                      'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'maxlength' => '',
                    'rows' => 3,
                    'new_lines' => '',
                  ),
                  array(
                    'key' => 'field_5f3ad6fc863da',
                    'label' => 'Link Text',
                    'name' => 'link_text',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                      'width' => '40',
                      'class' => '',
                      'id' => '',
                    ),
                    'default_value' => 'View more',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                  ),
                  array(
                    'key' => 'field_5f3ad71f863db',
                    'label' => 'Link Url',
                    'name' => 'link_url',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                      'width' => '40',
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
                    'key' => 'field_5f3ad734863dc',
                    'label' => 'Open in new tab',
                    'name' => 'open_in_new_tab',
                    'type' => 'true_false',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                      'width' => '20',
                      'class' => '',
                      'id' => '',
                    ),
                    'message' => '',
                    'default_value' => 0,
                    'ui' => 0,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                  ),
                ),
              ),
            ),
            'min' => '',
            'max' => '',
          ),
          'layout_5f3ad7fd863dd' => array(
            'key' => 'layout_5f3ad7fd863dd',
            'name' => 'flex_footer_intro',
            'label' => 'Footer Intro Widget',
            'display' => 'block',
            'sub_fields' => array(
              array(
                'key' => 'field_5f3ad813863de',
                'label' => 'Visibility',
                'name' => 'hide_widget',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'message' => 'Hide widget',
                'default_value' => 0,
                'ui' => 0,
                'ui_on_text' => '',
                'ui_off_text' => '',
              ),
              array(
                'key' => 'field_5f3ad83d863df',
                'label' => 'Homebase Logo',
                'name' => 'homebase_logo',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
              ),
              array(
                'key' => 'field_5f3ad87a863e0',
                'label' => 'Content',
                'name' => 'content',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
                'delay' => 0,
              ),
            ),
            'min' => '',
            'max' => '',
          ),
          'layout_5f3ad896863e2' => array(
            'key' => 'layout_5f3ad896863e2',
            'name' => 'flex_footer_link',
            'label' => 'Footer Link Widget',
            'display' => 'block',
            'sub_fields' => array(
              array(
                'key' => 'field_5f3ad896863e3',
                'label' => 'Visibility',
                'name' => 'hide_widget',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '33.3',
                  'class' => '',
                  'id' => '',
                ),
                'message' => 'Hide widget',
                'default_value' => 0,
                'ui' => 0,
                'ui_on_text' => '',
                'ui_off_text' => '',
              ),
              array(
                'key' => 'field_5f3ad915863e6',
                'label' => 'Add Button',
                'name' => 'add_button',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '33.3',
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
                'key' => 'field_5f3ad976863e7',
                'label' => 'Add Content',
                'name' => 'add_content',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '33.3',
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
                'key' => 'field_5f3ad9cf863e8',
                'label' => 'Button Text',
                'name' => 'button_text',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                  array(
                    array(
                      'field' => 'field_5f3ad915863e6',
                      'operator' => '==',
                      'value' => '1',
                    ),
                  ),
                ),
                'wrapper' => array(
                  'width' => '40',
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
                'key' => 'field_5f3ad9e1863e9',
                'label' => 'Button Link',
                'name' => 'button_link',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                  array(
                    array(
                      'field' => 'field_5f3ad915863e6',
                      'operator' => '==',
                      'value' => '1',
                    ),
                  ),
                ),
                'wrapper' => array(
                  'width' => '40',
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
                'key' => 'field_5f3ad9fc863ea',
                'label' => 'Open in new tab',
                'name' => 'open_in_new_tab',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                  array(
                    array(
                      'field' => 'field_5f3ad915863e6',
                      'operator' => '==',
                      'value' => '1',
                    ),
                  ),
                ),
                'wrapper' => array(
                  'width' => '20',
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
                'key' => 'field_5f3ada16863eb',
                'label' => 'Content',
                'name' => 'content',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                  array(
                    array(
                      'field' => 'field_5f3ad976863e7',
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
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
                'delay' => 0,
              ),
            ),
            'min' => '',
            'max' => '',
          ),
        ),
        'button_label' => 'Add Row',
        'min' => '',
        'max' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'templates/flexible-press-mt63.php',
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

if ( function_exists('acf_add_local_field_group') ) add_action('acf/init', 'flexible_press_mt63_acf_fields');  