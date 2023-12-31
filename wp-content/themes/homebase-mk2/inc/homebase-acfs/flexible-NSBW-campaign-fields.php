<?php 

/*
 * Define Advanced Custom Fields for Homebase 
 */
function flexible_NSBW_campaign_acf_fields() {

  if ( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
      'key' => 'group_644aafc58089c',
      'title' => 'Template: Flexible - NSBW Campaign',
      'fields' => array(
        array(
          'key' => 'field_644aafc7c17c8',
          'label' => 'Flexible Content',
          'name' => 'flexible_content',
          'aria-label' => '',
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
            'layout_644ab047ba21b' => array(
              'key' => 'layout_644ab047ba21b',
              'name' => 'hero_section',
              'label' => 'Hero Section',
              'display' => 'block',
              'sub_fields' => array(
                array(
                  'key' => 'field_644ab9197f1d5',
                  'label' => 'Class',
                  'name' => 'hero_section_class',
                  'aria-label' => '',
                  'type' => 'text',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'maxlength' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                ),
                array(
                  'key' => 'field_644ab9347f1d7',
                  'label' => 'ID',
                  'name' => 'hero_section_id',
                  'aria-label' => '',
                  'type' => 'text',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'maxlength' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                ),
                array(
                  'key' => 'field_644ab084c59d7',
                  'label' => 'Hero Sub Title',
                  'name' => 'hero_sub_title',
                  'aria-label' => '',
                  'type' => 'text',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '33.33',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'maxlength' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                ),
                array(
                  'key' => 'field_644ab06ac59d6',
                  'label' => 'Hero Title',
                  'name' => 'hero_title',
                  'aria-label' => '',
                  'type' => 'text',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '33.33',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'maxlength' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                ),
                array(
                  'key' => 'field_644ab097c59d8',
                  'label' => 'Hero Text',
                  'name' => 'hero_text',
                  'aria-label' => '',
                  'type' => 'wysiwyg',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '33.33',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'tabs' => 'all',
                  'toolbar' => 'full',
                  'media_upload' => 0,
                  'delay' => 0,
                ),
                array(
                  'key' => 'field_644ab0a4c59d9',
                  'label' => 'Hero Right Image',
                  'name' => 'hero_right_image',
                  'aria-label' => '',
                  'type' => 'image',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'return_format' => 'url',
                  'library' => 'all',
                  'min_width' => '',
                  'min_height' => '',
                  'min_size' => '',
                  'max_width' => '',
                  'max_height' => '',
                  'max_size' => '',
                  'mime_types' => '',
                  'preview_size' => 'medium',
                ),
              ),
              'min' => '',
              'max' => '',
            ),
            'layout_644ab112a3e4e' => array(
              'key' => 'layout_644ab112a3e4e',
              'name' => 'two_col_section',
              'label' => 'Two Col Section',
              'display' => 'block',
              'sub_fields' => array(
                array(
                  'key' => 'field_644ab95c7f1d8',
                  'label' => 'Class',
                  'name' => 'two_col_section_class',
                  'aria-label' => '',
                  'type' => 'text',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'maxlength' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                ),
                array(
                  'key' => 'field_644ab9727f1d9',
                  'label' => 'ID',
                  'name' => 'two_col_section_id',
                  'aria-label' => '',
                  'type' => 'text',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'maxlength' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                ),
                array(
                  'key' => 'field_644ab161a3e50',
                  'label' => 'Section Main Title',
                  'name' => 'section_main_title',
                  'aria-label' => '',
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
                  'maxlength' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                ),
                array(
                  'key' => 'field_644ab276a3e54',
                  'label' => 'Left Column Content',
                  'name' => 'left_column_content',
                  'aria-label' => '',
                  'type' => 'wysiwyg',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'tabs' => 'all',
                  'toolbar' => 'full',
                  'media_upload' => 1,
                  'delay' => 0,
                ),
                array(
                  'key' => 'field_644ab29aa3e55',
                  'label' => 'Right Column Content',
                  'name' => 'right_column_content',
                  'aria-label' => '',
                  'type' => 'wysiwyg',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '50',
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
            'layout_644ab2e981245' => array(
              'key' => 'layout_644ab2e981245',
              'name' => 'flexible_col_section',
              'label' => 'Flexible Col Section',
              'display' => 'block',
              'sub_fields' => array(
                array(
                  'key' => 'field_644ab9877f1da',
                  'label' => 'Class',
                  'name' => 'flexible_col_section_class',
                  'aria-label' => '',
                  'type' => 'text',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'maxlength' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                ),
                array(
                  'key' => 'field_644ab9997f1db',
                  'label' => 'ID',
                  'name' => 'flexible_col_section_id',
                  'aria-label' => '',
                  'type' => 'text',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'maxlength' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                ),
                array(
                  'key' => 'field_644ab33681247',
                  'label' => 'Title',
                  'name' => 'flexible_col_section_title',
                  'aria-label' => '',
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
                  'maxlength' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                ),
                array(
                  'key' => 'field_644ab35e81248',
                  'label' => 'Sub Title',
                  'name' => 'flexible_col_section_sub_title',
                  'aria-label' => '',
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
                array(
                  'key' => 'field_644ab36a81249',
                  'label' => 'Columns',
                  'name' => 'flexible_col_section_columns',
                  'aria-label' => '',
                  'type' => 'repeater',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'layout' => 'table',
                  'min' => 0,
                  'max' => 0,
                  'collapsed' => '',
                  'button_label' => 'Add Row',
                  'rows_per_page' => 20,
                  'sub_fields' => array(
                    array(
                      'key' => 'field_644ab3838124a',
                      'label' => 'Image',
                      'name' => 'flexible_col_section_image',
                      'aria-label' => '',
                      'type' => 'image',
                      'instructions' => '',
                      'required' => 0,
                      'conditional_logic' => 0,
                      'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                      ),
                      'return_format' => 'url',
                      'library' => 'all',
                      'min_width' => '',
                      'min_height' => '',
                      'min_size' => '',
                      'max_width' => '',
                      'max_height' => '',
                      'max_size' => '',
                      'mime_types' => '',
                      'preview_size' => 'medium',
                      'parent_repeater' => 'field_644ab36a81249',
                    ),
                    array(
                      'key' => 'field_644ab3bb8124b',
                      'label' => 'Text',
                      'name' => 'flexible_col_section_column_text',
                      'aria-label' => '',
                      'type' => 'wysiwyg',
                      'instructions' => '',
                      'required' => 0,
                      'conditional_logic' => 0,
                      'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                      ),
                      'default_value' => '',
                      'tabs' => 'all',
                      'toolbar' => 'full',
                      'media_upload' => 0,
                      'delay' => 0,
                      'parent_repeater' => 'field_644ab36a81249',
                    ),
                  ),
                ),
              ),
              'min' => '',
              'max' => '',
            ),
            'layout_644ab451921e9' => array(
              'key' => 'layout_644ab451921e9',
              'name' => 'homebase_cta_banner',
              'label' => 'HomeBase CTA Banner',
              'display' => 'block',
              'sub_fields' => array(
                array(
                  'key' => 'field_644ab9ab7f1dc',
                  'label' => 'Class',
                  'name' => 'homebase_cta_banner_class',
                  'aria-label' => '',
                  'type' => 'text',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'maxlength' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                ),
                array(
                  'key' => 'field_644ab9c07f1dd',
                  'label' => 'ID',
                  'name' => 'homebase_cta_banner_id',
                  'aria-label' => '',
                  'type' => 'text',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'maxlength' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                ),
                array(
                  'key' => 'field_644ab459921eb',
                  'label' => 'Title',
                  'name' => 'homebase_cta_banner_title',
                  'aria-label' => '',
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
                  'maxlength' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                ),
                array(
                  'key' => 'field_644ab475921ec',
                  'label' => 'Inline Check List',
                  'name' => 'homebase_cta_banner_inline_check_list',
                  'aria-label' => '',
                  'type' => 'repeater',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'layout' => 'table',
                  'min' => 0,
                  'max' => 0,
                  'collapsed' => '',
                  'button_label' => 'Add Row',
                  'rows_per_page' => 20,
                  'sub_fields' => array(
                    array(
                      'key' => 'field_644ab493921ee',
                      'label' => 'Check List Text',
                      'name' => 'homebase_cta_banner_check_list_text',
                      'aria-label' => '',
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
                      'maxlength' => '',
                      'placeholder' => '',
                      'prepend' => '',
                      'append' => '',
                      'parent_repeater' => 'field_644ab475921ec',
                    ),
                  ),
                ),
                array(
                  'key' => 'field_644ab48f921ed',
                  'label' => 'Promo Code',
                  'name' => 'homebase_cta_banner_promo_code',
                  'aria-label' => '',
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
                  'maxlength' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                ),
                array(
                  'key' => 'field_644ab4e9921ef',
                  'label' => 'Text After Promo Code',
                  'name' => 'homebase_cta_banner_text_after_promo_code',
                  'aria-label' => '',
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
                array(
                  'key' => 'field_644ab503921f0',
                  'label' => 'CTA Button',
                  'name' => 'homebase_cta_banner_cta_button',
                  'aria-label' => '',
                  'type' => 'link',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'return_format' => 'array',
                ),
              ),
              'min' => '',
              'max' => '',
            ),
            'layout_644ab6b27f1c1' => array(
              'key' => 'layout_644ab6b27f1c1',
              'name' => 'flexible_single_col_title_only',
              'label' => 'Flexible Single Col Title Only',
              'display' => 'block',
              'sub_fields' => array(
                array(
                  'key' => 'field_644ab9da7f1de',
                  'label' => 'Class',
                  'name' => 'flexible_single_col_title_only_class',
                  'aria-label' => '',
                  'type' => 'text',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'maxlength' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                ),
                array(
                  'key' => 'field_644ab9ed7f1df',
                  'label' => 'ID',
                  'name' => 'flexible_single_col_title_only_id',
                  'aria-label' => '',
                  'type' => 'text',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'maxlength' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                ),
                array(
                  'key' => 'field_644ab6c97f1c3',
                  'label' => 'Title',
                  'name' => 'flexible_single_col_title_only_title',
                  'aria-label' => '',
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
                  'maxlength' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                ),
                array(
                  'key' => 'field_644ab6e17f1c4',
                  'label' => 'Text',
                  'name' => 'flexible_single_col_title_only_text',
                  'aria-label' => '',
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
            'layout_644ab7017f1c5' => array(
              'key' => 'layout_644ab7017f1c5',
              'name' => 'two_col_progressbar',
              'label' => 'Two Col ProgressBar',
              'display' => 'block',
              'sub_fields' => array(
                array(
                  'key' => 'field_644ab9fc7f1e0',
                  'label' => 'Class',
                  'name' => 'two_col_progressbar_class',
                  'aria-label' => '',
                  'type' => 'text',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'maxlength' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                ),
                array(
                  'key' => 'field_644aba137f1e1',
                  'label' => 'ID',
                  'name' => 'two_col_progressbar_id',
                  'aria-label' => '',
                  'type' => 'text',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'maxlength' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                ),
                array(
                  'key' => 'field_644ab76c7f1c7',
                  'label' => 'Image 1',
                  'name' => 'two_col_progressbar_image_1',
                  'aria-label' => '',
                  'type' => 'image',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                  ),
                  'return_format' => 'url',
                  'library' => 'all',
                  'min_width' => '',
                  'min_height' => '',
                  'min_size' => '',
                  'max_width' => '',
                  'max_height' => '',
                  'max_size' => '',
                  'mime_types' => '',
                  'preview_size' => 'medium',
                ),
                array(
                  'key' => 'field_644ab7c87f1c8',
                  'label' => 'Text 1',
                  'name' => 'two_col_progressbar_text_1',
                  'aria-label' => '',
                  'type' => 'text',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'maxlength' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                ),
                array(
                  'key' => 'field_644ab7e27f1c9',
                  'label' => 'Image 2',
                  'name' => 'two_col_progressbar_image_2',
                  'aria-label' => '',
                  'type' => 'image',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                  ),
                  'return_format' => 'url',
                  'library' => 'all',
                  'min_width' => '',
                  'min_height' => '',
                  'min_size' => '',
                  'max_width' => '',
                  'max_height' => '',
                  'max_size' => '',
                  'mime_types' => '',
                  'preview_size' => 'medium',
                ),
                array(
                  'key' => 'field_644ab7fd7f1ca',
                  'label' => 'Text 2',
                  'name' => 'two_col_progressbar_text_2',
                  'aria-label' => '',
                  'type' => 'text',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'maxlength' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                ),
              ),
              'min' => '',
              'max' => '',
            ),
            'layout_644ab8537f1cb' => array(
              'key' => 'layout_644ab8537f1cb',
              'name' => 'flexible_image_columns',
              'label' => 'Flexible Image Columns',
              'display' => 'block',
              'sub_fields' => array(
                array(
                  'key' => 'field_644aba277f1e2',
                  'label' => 'Class',
                  'name' => 'flexible_image_columns_class',
                  'aria-label' => '',
                  'type' => 'text',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'maxlength' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                ),
                array(
                  'key' => 'field_644aba3b7f1e3',
                  'label' => 'ID',
                  'name' => 'flexible_image_columns_id',
                  'aria-label' => '',
                  'type' => 'text',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'maxlength' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                ),
                array(
                  'key' => 'field_644ab85e7f1cd',
                  'label' => 'Image Columns',
                  'name' => 'flexible_image_columns_image_columns',
                  'aria-label' => '',
                  'type' => 'repeater',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'layout' => 'table',
                  'min' => 0,
                  'max' => 0,
                  'collapsed' => '',
                  'button_label' => 'Add Row',
                  'rows_per_page' => 20,
                  'sub_fields' => array(
                    array(
                      'key' => 'field_644ab8857f1ce',
                      'label' => 'Column Image',
                      'name' => 'column_image',
                      'aria-label' => '',
                      'type' => 'image',
                      'instructions' => '',
                      'required' => 0,
                      'conditional_logic' => 0,
                      'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                      ),
                      'return_format' => 'url',
                      'library' => 'all',
                      'min_width' => '',
                      'min_height' => '',
                      'min_size' => '',
                      'max_width' => '',
                      'max_height' => '',
                      'max_size' => '',
                      'mime_types' => '',
                      'preview_size' => 'medium',
                      'parent_repeater' => 'field_644ab85e7f1cd',
                    ),
                    array(
                      'key' => 'field_644ab8a57f1cf',
                      'label' => 'Column Text',
                      'name' => 'flexible_image_columns_column_text',
                      'aria-label' => '',
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
                      'parent_repeater' => 'field_644ab85e7f1cd',
                    ),
                  ),
                ),
              ),
              'min' => '',
              'max' => '',
            ),
            'layout_644ab8c97f1d0' => array(
              'key' => 'layout_644ab8c97f1d0',
              'name' => 'download_report',
              'label' => 'Download Report',
              'display' => 'block',
              'sub_fields' => array(
                array(
                  'key' => 'field_644aba4f7f1e4',
                  'label' => 'Class',
                  'name' => 'download_report_class',
                  'aria-label' => '',
                  'type' => 'text',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'maxlength' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                ),
                array(
                  'key' => 'field_644aba697f1e5',
                  'label' => 'ID',
                  'name' => 'download_report_id',
                  'aria-label' => '',
                  'type' => 'text',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'maxlength' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                ),
                array(
                  'key' => 'field_644ab8d57f1d2',
                  'label' => 'Title',
                  'name' => 'download_report_title',
                  'aria-label' => '',
                  'type' => 'text',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '33.33',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'maxlength' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                ),
                array(
                  'key' => 'field_644ab8ed7f1d3',
                  'label' => 'Sub Title',
                  'name' => 'download_report_sub_title',
                  'aria-label' => '',
                  'type' => 'text',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '33.33',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'maxlength' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                ),
                array(
                  'key' => 'field_644ab8fb7f1d4',
                  'label' => 'CTA Button',
                  'name' => 'download_report_cta_button',
                  'aria-label' => '',
                  'type' => 'link',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '33.33',
                    'class' => '',
                    'id' => '',
                  ),
                  'return_format' => 'array',
                ),
              ),
              'min' => '',
              'max' => '',
            ),
          ),
          'min' => '',
          'max' => '',
          'button_label' => 'Add Row',
        ),
      ),
      'location' => array(
        array(
          array(
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'templates/flexible-NSBW-campaign.php',
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
      'show_in_rest' => 0,
    ));

  endif;


  
}

if ( function_exists('acf_add_local_field_group') ) add_action('acf/init', 'flexible_NSBW_campaign_acf_fields');  