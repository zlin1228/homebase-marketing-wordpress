
/*select 10219 as post_id, meta_key, meta_value from wp_postmeta where post_id = 9040*/
DELETE FROM `wp_postmeta` WHERE post_id = 10219;

SET AUTOCOMMIT = 0;
START TRANSACTION;


INSERT INTO `wp_postmeta` (`post_id`, `meta_key`, `meta_value`) VALUES
(10219, 'ampforwp_custom_content_editor_checkbox', NULL),
(10219, 'ampforwp_custom_content_editor_checkbox', NULL),
(10219, 'ampforwp_custom_content_editor_checkbox', NULL),
(10219, '_wp_page_template', 'templates/flexible-content.php'),
(10219, 'flexible_content_new_modules', ''),
(10219, '_flexible_content_new_modules', 'field_5d66e589c35de'),
(10219, 'flexible_content_0_hide_widget', '0'),
(10219, '_flexible_content_0_hide_widget', 'field_590b97ac52e57'),
(10219, 'flexible_content_0_scroll_anchor', ''),
(10219, '_flexible_content_0_scroll_anchor', 'field_5910952d311b2'),
(10219, 'flexible_content_1_hide_widget', '0'),
(10219, '_flexible_content_1_hide_widget', 'field_58ff5e437bcec'),
(10219, 'flexible_content_1_custom_css_classes', ''),
(10219, '_flexible_content_1_custom_css_classes', 'field_5b0ff19c6571c'),
(10219, 'flexible_content_1_hero_style', 'without-picture'),
(10219, '_flexible_content_1_hero_style', 'field_58ff5d6e7bceb'),
(10219, 'flexible_content_1_text_size', 'small'),
(10219, '_flexible_content_1_text_size', 'field_58ff67cdf67de'),
(10219, 'flexible_content_1_headline', '<strong>Free Scheduling Software</strong><br>Create your schedule in minutes and immediately share it with your team.'),
(10219, '_flexible_content_1_headline', 'field_58ff634b9cc43'),
(10219, 'flexible_content_1_subheadline', ''),
(10219, '_flexible_content_1_subheadline', 'field_58ff6790f67dd'),
(10219, 'flexible_content_1_second_subheadline', ''),
(10219, '_flexible_content_1_second_subheadline', 'field_5b0682196bffb'),
(10219, 'flexible_content_1_email_sign_up_form', '0'),
(10219, '_flexible_content_1_email_sign_up_form', 'field_58ff63e09cc45'),
(10219, 'flexible_content_1_button', '0'),
(10219, '_flexible_content_1_button', 'field_58ff649f9cc47'),
(10219, 'flexible_content_1_additional_text', ''),
(10219, '_flexible_content_1_additional_text', 'field_5968f6779ad00'),
(10219, 'flexible_content_1_add_quote', '0'),
(10219, '_flexible_content_1_add_quote', 'field_593140b27fc0d'),
(10219, 'flexible_content_1_scroll_anchor', ''),
(10219, '_flexible_content_1_scroll_anchor', 'field_5910901b8e806'),
(10219, 'flexible_content_2_hide_widget', '0'),
(10219, '_flexible_content_2_hide_widget', 'field_590ba5568a887'),
(10219, 'flexible_content_2_borders', '0'),
(10219, '_flexible_content_2_borders', 'field_590e13b99b6b9'),
(10219, 'flexible_content_2_scroll_anchor', ''),
(10219, '_flexible_content_2_scroll_anchor', 'field_591093357c6bb'),
(10219, 'flexible_content_2_reverse', '0'),
(10219, '_flexible_content_2_reverse', 'field_5dadc41986a5e'),
(10219, 'flexible_content_2_headline', ''),
(10219, '_flexible_content_2_headline', 'field_590ba74ca7ba6'),
(10219, 'flexible_content_2_subheadline', ''),
(10219, '_flexible_content_2_subheadline', 'field_590ba754a7ba7'),
(10219, 'flexible_content_2_subheadline_link', ''),
(10219, '_flexible_content_2_subheadline_link', 'field_590ba763a7ba8'),
(10219, 'flexible_content_2_text', '<ul class=\"tick\">\r\n 	<li>Build your schedule online to forecast your labor costs and prevent overtime</li>\r\n 	<li>Get peace of mind that your team always has their up-to-date schedule</li>\r\n 	<li>Make changes on the fly, on your phone, wherever you are</li>\r\n</ul>'),
(10219, '_flexible_content_2_text', 'field_590ba778a7ba9'),
(10219, 'flexible_content_2_add_custom_list', '0'),
(10219, '_flexible_content_2_add_custom_list', 'field_590e13ef9b6ba'),
(10219, 'flexible_content_2_learn_more', 'button'),
(10219, '_flexible_content_2_learn_more', 'field_590ba872a7bae'),
(10219, 'flexible_content_2_image', '9064'),
(10219, '_flexible_content_2_image', 'field_590ba91ca7bb0'),
(10219, 'flexible_content_2_image_link', ''),
(10219, '_flexible_content_2_image_link', 'field_5ad0e41737341'),
(10219, 'flexible_content_2_add_image_credit', '0'),
(10219, '_flexible_content_2_add_image_credit', 'field_590e14c19b6be'),
(10219, 'flexible_content', 'a:8:{i:0;s:21:\"flex_features_sub_nav\";i:1;s:9:\"flex_hero\";i:2;s:13:\"flex_2_column\";i:3;s:13:\"flex_2_column\";i:4;s:13:\"flex_2_column\";i:5;s:21:\"flex_pos_integrations\";i:6;s:13:\"flex_3_column\";i:7;s:26:\"frequently_asked_questions\";}'),
(10219, '_flexible_content', 'field_58ff59387bcea'),
(10219, 'remove_top_nav', '0'),
(10219, '_remove_top_nav', 'field_591acfaed1ed0'),
(10219, 'landing_page_mode', '0'),
(10219, '_landing_page_mode', 'field_592e99fde4462'),
(10219, 'ampforwp_custom_content_editor', ''),
(10219, 'wbounce_status', 'default'),
(10219, 'wbounce_template', 'default'),
(10219, 'wbounce_title', ''),
(10219, 'wbounce_text', ''),
(10219, 'wbounce_cta', ''),
(10219, 'wbounce_url', ''),
(10219, 'wbounce_override', ''),
(10219, 'ampforwp-amp-on-off', 'hide-amp'),
(10219, '_at_widget', '1'),
(10219, 'flexible_content_3_hide_widget', '0'),
(10219, '_flexible_content_3_hide_widget', 'field_590ba5568a887'),
(10219, 'flexible_content_3_borders', '0'),
(10219, '_flexible_content_3_borders', 'field_590e13b99b6b9'),
(10219, 'flexible_content_3_scroll_anchor', ''),
(10219, '_flexible_content_3_scroll_anchor', 'field_591093357c6bb'),
(10219, 'flexible_content_3_reverse', '1'),
(10219, '_flexible_content_3_reverse', 'field_5dadc41986a5e'),
(10219, 'flexible_content_3_headline', '<strong>Reduce no-shows and employee scheduling errors with our employee schedule maker</strong>'),
(10219, '_flexible_content_3_headline', 'field_590ba74ca7ba6'),
(10219, 'flexible_content_3_subheadline', ''),
(10219, '_flexible_content_3_subheadline', 'field_590ba754a7ba7'),
(10219, 'flexible_content_3_subheadline_link', ''),
(10219, '_flexible_content_3_subheadline_link', 'field_590ba763a7ba8'),
(10219, 'flexible_content_3_text', '<h3>Make schedule changes so your team always has the up-to-date shift schedule. Enable your team to update their availability or request shift trades before being notified for approval. Homebase will automatically update the work schedule and highlight conflicts.</h3>\r\n<ul class=\"tick\">\r\n 	<li>Send to employees via text, email, and the free mobile app\r\nand confirm they received it</li>\r\n 	<li>Track time-off and availability changes</li>\r\n 	<li>Manage shift trades &amp; covers without phone calls</li>\r\n</ul>'),
(10219, '_flexible_content_3_text', 'field_590ba778a7ba9'),
(10219, 'flexible_content_3_add_custom_list', '0'),
(10219, '_flexible_content_3_add_custom_list', 'field_590e13ef9b6ba'),
(10219, 'flexible_content_3_learn_more', 'button'),
(10219, '_flexible_content_3_learn_more', 'field_590ba872a7bae'),
(10219, 'flexible_content_3_image', '9065'),
(10219, '_flexible_content_3_image', 'field_590ba91ca7bb0'),
(10219, 'flexible_content_3_image_link', ''),
(10219, '_flexible_content_3_image_link', 'field_5ad0e41737341'),
(10219, 'flexible_content_3_add_image_credit', '0'),
(10219, '_flexible_content_3_add_image_credit', 'field_590e14c19b6be'),
(10219, 'flexible_content_3_button_text', 'Get Started'),
(10219, '_flexible_content_3_button_text', 'field_590ba819a7bac'),
(10219, 'flexible_content_3_button_link', 'https://app.joinhomebase.com/onboarding/sign_up'),
(10219, '_flexible_content_3_button_link', 'field_590ba828a7bad'),
(10219, 'flexible_content_4_hide_widget', '0'),
(10219, '_flexible_content_4_hide_widget', 'field_590ba5568a887'),
(10219, 'flexible_content_4_borders', '0'),
(10219, '_flexible_content_4_borders', 'field_590e13b99b6b9'),
(10219, 'flexible_content_4_scroll_anchor', ''),
(10219, '_flexible_content_4_scroll_anchor', 'field_591093357c6bb'),
(10219, 'flexible_content_4_reverse', '0'),
(10219, '_flexible_content_4_reverse', 'field_5dadc41986a5e'),
(10219, 'flexible_content_4_headline', '<strong>Manage your labor costs easily</strong>'),
(10219, '_flexible_content_4_headline', 'field_590ba74ca7ba6'),
(10219, 'flexible_content_4_subheadline', ''),
(10219, '_flexible_content_4_subheadline', 'field_590ba754a7ba7'),
(10219, 'flexible_content_4_subheadline_link', ''),
(10219, '_flexible_content_4_subheadline_link', 'field_590ba763a7ba8'),
(10219, 'flexible_content_4_text', '<h3>Get better visibility into your labor costs. Homebase will total hours and overtime and even subtract break times. Input your sales data to make sure you’re hitting budget targets. Connect your POS and Homebase will forecast your sales automatically.</h3>\r\n<ul class=\"tick\">\r\n 	<li>Forecast your labor costs as you schedule shifts</li>\r\n 	<li>See the weather and your sales forecast right on the schedule</li>\r\n 	<li>Auto-scheduling software builds the schedule for you</li>\r\n</ul>'),
(10219, '_flexible_content_4_text', 'field_590ba778a7ba9'),
(10219, 'flexible_content_4_add_custom_list', '0'),
(10219, '_flexible_content_4_add_custom_list', 'field_590e13ef9b6ba'),
(10219, 'flexible_content_4_learn_more', '0'),
(10219, '_flexible_content_4_learn_more', 'field_590ba872a7bae'),
(10219, 'flexible_content_4_image', '9066'),
(10219, '_flexible_content_4_image', 'field_590ba91ca7bb0'),
(10219, 'flexible_content_4_image_link', ''),
(10219, '_flexible_content_4_image_link', 'field_5ad0e41737341'),
(10219, 'flexible_content_4_add_image_credit', '0'),
(10219, '_flexible_content_4_add_image_credit', 'field_590e14c19b6be'),
(10219, 'flexible_content_5_hide_widget', '0'),
(10219, '_flexible_content_5_hide_widget', 'field_590c5d38810e1'),
(10219, 'flexible_content_5_headline', 'Build smarter schedules and labor forecasts by integrating your sales data automatically from these leading POS companies'),
(10219, '_flexible_content_5_headline', 'field_590c5d16810de'),
(10219, 'flexible_content_5_subheadline', ''),
(10219, '_flexible_content_5_subheadline', 'field_590c5d22810df'),
(10219, 'flexible_content_5_subheadline_link', ''),
(10219, '_flexible_content_5_subheadline_link', 'field_590c5d2c810e0'),
(10219, 'flexible_content_5_list_type', 'featured'),
(10219, '_flexible_content_5_list_type', 'field_5915c2e7167c7'),
(10219, 'flexible_content_5_featured_posts', 'a:8:{i:0;s:4:\"3843\";i:1;s:4:\"3841\";i:2;s:4:\"4544\";i:3;s:4:\"3842\";i:4;s:4:\"7093\";i:5;s:4:\"3839\";i:6;s:4:\"3838\";i:7;s:4:\"3828\";}'),
(10219, '_flexible_content_5_featured_posts', 'field_5915c307167c8'),
(10219, 'flexible_content_5_scroll_anchor', ''),
(10219, '_flexible_content_5_scroll_anchor', 'field_591095b7311b5'),
(10219, 'flexible_content_5_many_more_text', '<a href=\" https://joinhomebase.com/partners/\" class=\"link\">See all integrations</a>'),
(10219, '_flexible_content_5_many_more_text', 'field_5b0b7bbf888d3'),
(10219, 'flexible_content_6_hide_widget', '0'),
(10219, '_flexible_content_6_hide_widget', 'field_59034cf6a2f72'),
(10219, 'flexible_content_6_extra_css_classes', ''),
(10219, '_flexible_content_6_extra_css_classes', 'field_599d68ef2722f'),
(10219, 'flexible_content_6_add_border_to_top', '1'),
(10219, '_flexible_content_6_add_border_to_top', 'field_599d691027230'),
(10219, 'flexible_content_6_add_border_to_bottom', '1'),
(10219, '_flexible_content_6_add_border_to_bottom', 'field_591075b1cb2a3'),
(10219, 'flexible_content_6_scroll_anchor', ''),
(10219, '_flexible_content_6_scroll_anchor', 'field_591093717c6bc'),
(10219, 'flexible_content_6_top_picture', ''),
(10219, '_flexible_content_6_top_picture', 'field_59030fed0b7ce'),
(10219, 'flexible_content_6_top_picture_style', '1'),
(10219, '_flexible_content_6_top_picture_style', 'field_59032231e214e'),
(10219, 'flexible_content_6_top_picture_position', 'above_headline'),
(10219, '_flexible_content_6_top_picture_position', 'field_590311760b7d3'),
(10219, 'flexible_content_6_top_picture_link', ''),
(10219, '_flexible_content_6_top_picture_link', 'field_590311430b7d2'),
(10219, 'flexible_content_6_top_headline', 'Over 100,000 businesses love Homebase. <br> <strong>Yours will too.</strong>'),
(10219, '_flexible_content_6_top_headline', 'field_59030ffd0b7cf'),
(10219, 'flexible_content_6_top_subheadline', ''),
(10219, '_flexible_content_6_top_subheadline', 'field_590310aa0b7d1'),
(10219, 'flexible_content_6_top_subheadline_link', ''),
(10219, '_flexible_content_6_top_subheadline_link', 'field_5903100a0b7d0'),
(10219, 'flexible_content_6_expand_row', '0'),
(10219, '_flexible_content_6_expand_row', 'field_59035026d587f'),
(10219, 'flexible_content_6_columns_0_picture', ''),
(10219, '_flexible_content_6_columns_0_picture', 'field_5903136f375f6'),
(10219, 'flexible_content_6_columns_0_text_alignment', 'center'),
(10219, '_flexible_content_6_columns_0_text_alignment', 'field_5903153237601'),
(10219, 'flexible_content_6_columns_0_headline', ''),
(10219, '_flexible_content_6_columns_0_headline', 'field_590313d5375f7'),
(10219, 'flexible_content_6_columns_0_headline_link', ''),
(10219, '_flexible_content_6_columns_0_headline_link', 'field_590313df375f8'),
(10219, 'flexible_content_6_columns_0_subheadline', ''),
(10219, '_flexible_content_6_columns_0_subheadline', 'field_590313ed375f9'),
(10219, 'flexible_content_6_columns_0_subheadline_link', ''),
(10219, '_flexible_content_6_columns_0_subheadline_link', 'field_59031411375fa'),
(10219, 'flexible_content_6_columns_0_text', '<img class=\"alignnone\" src=\"https://joinhomebase.com/wp-content/uploads/2019/09/score_02.png\" />\r\n\r\n<img class=\"alignnone\" src=\"https://joinhomebase.com/wp-content/uploads/2019/09/logo_quickbooks.png\" />\r\n\r\n5-star rating on\r\nQuickbooks Apps'),
(10219, '_flexible_content_6_columns_0_text', 'field_59031437375fb'),
(10219, 'flexible_content_6_columns_0_learn_more', '0'),
(10219, '_flexible_content_6_columns_0_learn_more', 'field_5903144a375fc'),
(10219, 'flexible_content_6_columns_1_picture', ''),
(10219, '_flexible_content_6_columns_1_picture', 'field_5903136f375f6'),
(10219, 'flexible_content_6_columns_1_text_alignment', 'center'),
(10219, '_flexible_content_6_columns_1_text_alignment', 'field_5903153237601'),
(10219, 'flexible_content_6_columns_1_headline', ''),
(10219, '_flexible_content_6_columns_1_headline', 'field_590313d5375f7'),
(10219, 'flexible_content_6_columns_1_headline_link', ''),
(10219, '_flexible_content_6_columns_1_headline_link', 'field_590313df375f8'),
(10219, 'flexible_content_6_columns_1_subheadline', ''),
(10219, '_flexible_content_6_columns_1_subheadline', 'field_590313ed375f9'),
(10219, 'flexible_content_6_columns_1_subheadline_link', ''),
(10219, '_flexible_content_6_columns_1_subheadline_link', 'field_59031411375fa'),
(10219, 'flexible_content_6_columns_1_text', '<img class=\"alignnone\" src=\"https://joinhomebase.com/wp-content/uploads/2019/09/score_01.png\" />\r\n\r\n<img class=\"alignnone\" src=\"https://joinhomebase.com/wp-content/uploads/2019/09/appstore.png\" />\r\n\r\n4.8 of 5 star rating\r\non Apple App Store'),
(10219, '_flexible_content_6_columns_1_text', 'field_59031437375fb'),
(10219, 'flexible_content_6_columns_1_learn_more', '0'),
(10219, '_flexible_content_6_columns_1_learn_more', 'field_5903144a375fc'),
(10219, 'flexible_content_6_columns_2_picture', ''),
(10219, '_flexible_content_6_columns_2_picture', 'field_5903136f375f6'),
(10219, 'flexible_content_6_columns_2_text_alignment', 'center'),
(10219, '_flexible_content_6_columns_2_text_alignment', 'field_5903153237601'),
(10219, 'flexible_content_6_columns_2_headline', ''),
(10219, '_flexible_content_6_columns_2_headline', 'field_590313d5375f7'),
(10219, 'flexible_content_6_columns_2_headline_link', ''),
(10219, '_flexible_content_6_columns_2_headline_link', 'field_590313df375f8'),
(10219, 'flexible_content_6_columns_2_subheadline', ''),
(10219, '_flexible_content_6_columns_2_subheadline', 'field_590313ed375f9'),
(10219, 'flexible_content_6_columns_2_subheadline_link', ''),
(10219, '_flexible_content_6_columns_2_subheadline_link', 'field_59031411375fa'),
(10219, 'flexible_content_6_columns_2_text', '<img class=\"alignnone\" src=\"https://joinhomebase.com/wp-content/uploads/2019/09/score_03.png\" />\r\n\r\n<img class=\"alignnone\" src=\"https://joinhomebase.com/wp-content/uploads/2019/09/logo_capterra.png\" />\r\n\r\n4.5 of 5 star rating\r\non Capterra'),
(10219, '_flexible_content_6_columns_2_text', 'field_59031437375fb'),
(10219, 'flexible_content_6_columns_2_learn_more', '0'),
(10219, '_flexible_content_6_columns_2_learn_more', 'field_5903144a375fc'),
(10219, 'flexible_content_6_columns', 'a:3:{i:0;s:6:\"column\";i:1;s:6:\"column\";i:2;s:6:\"column\";}'),
(10219, '_flexible_content_6_columns', 'field_5903130a375f5'),
(10219, 'flexible_content_6_learn_button_button', 'a:3:{s:5:\"title\";s:11:\"Get Started\";s:3:\"url\";s:53:\"https://app.homebasestage.wpengine.com/onboarding/new\";s:6:\"target\";s:0:\"\";}'),
(10219, '_flexible_content_6_learn_button_button', 'field_5db710104541a'),
(10219, 'flexible_content_7_learn_button_button', ''),
(10219, '_flexible_content_7_learn_button_button', 'field_5db710104541a'),
(10219, 'flexible_content_6_learn_more_button', 'a:3:{s:5:\"title\";s:11:\"Get Started\";s:3:\"url\";s:47:\"https://app.joinhomebase.com/onboarding/sign_up\";s:6:\"target\";s:0:\"\";}'),
(10219, '_flexible_content_6_learn_more_button', 'field_5db710104541a'),
(10219, 'flexible_content_7_headline', 'Frequently Asked Questions About Scheduling Software '),
(10219, '_flexible_content_7_headline', 'field_5db05a8ca90e6'),
(10219, 'flexible_content_7_faq_0_question', 'What is scheduling software?'),
(10219, '_flexible_content_7_faq_0_question', 'field_5db055c404075'),
(10219, 'flexible_content_7_faq_0_response', 'Scheduling software automates the process of scheduling a resource. Homebase helps you schedule your team. If your business takes appointments, there are other scheduling software apps that allow your clients to book time with your employees, for services like haircuts or spa appointments.'),
(10219, '_flexible_content_7_faq_0_response', 'field_5db055dd04076'),
(10219, 'flexible_content_7_faq_1_question', 'What is employee scheduling software?'),
(10219, '_flexible_content_7_faq_1_question', 'field_5db055c404075'),
(10219, 'flexible_content_7_faq_1_response', 'Employee scheduling software makes it easy to schedule your team. With scheduling software like Homebase, you’ll be able to schedule your employees in minutes, and they’ll get notified as soon as the schedule is published, wherever they are. If something comes up, they can use the free mobile app to trade shifts with manager approval.\r\n\r\nHomebase scheduling software can even schedule for you. With auto-scheduling, available on a paid plan, scheduling software will take into account your business hours, employee roles, seniority and more to build a schedule for you in just one click. (Of course, you’ll be able to approve the schedule before sharing it with your team.)'),
(10219, '_flexible_content_7_faq_1_response', 'field_5db055dd04076'),
(10219, 'flexible_content_7_faq_2_question', 'What is a scheduling system?'),
(10219, '_flexible_content_7_faq_2_question', 'field_5db055c404075'),
(10219, 'flexible_content_7_faq_2_response', 'A scheduling system is any method used to schedule employee shifts for your business. However, the most efficient system used today instead of the old-fashioned methods are software programs or apps dedicated to scheduling, such as Homebase.'),
(10219, '_flexible_content_7_faq_2_response', 'field_5db055dd04076'),
(10219, 'flexible_content_7_faq_3_question', 'What is shift planning software?'),
(10219, '_flexible_content_7_faq_3_question', 'field_5db055c404075'),
(10219, 'flexible_content_7_faq_3_response', 'Shift planning software programs like Homebase help you manage your schedule and build it within minutes from any device, helping you save hours every week. With Homebase, you can manage schedule changes and ensure that your team has up-to-date schedules. Employees can also request shift trades or update their availability on Homebase. You will then be notified for approval and Homebase will automatically update the schedule and highlight conflicts.'),
(10219, '_flexible_content_7_faq_3_response', 'field_5db055dd04076'),
(10219, 'flexible_content_7_faq_4_question', 'What is the best software for scheduling?'),
(10219, '_flexible_content_7_faq_4_question', 'field_5db055c404075'),
(10219, 'flexible_content_7_faq_4_response', 'The best scheduling software is the one that saves you the most time, and helps you save on labor costs too. With Homebase, you’ll save hours every week thanks to our automated scheduling that allows your to build your schedule in minutes. The drag &amp; drop team scheduling lets you view the team schedule by role, time period, or employee and you can watch hours calculate automatically, schedule your team from any browser on your mobile device, and publish work changes anytime, anywhere.\r\n\r\nHomebase also gives you better visibility into your labor costs. Our software will total hours and overtime and subtract break times. You can also use our tool to input your sales data and ensure your budget targets are on track, forecast your labor costs, and even see the weather and your sales forecast right on the schedule.'),
(10219, '_flexible_content_7_faq_4_response', 'field_5db055dd04076'),
(10219, 'flexible_content_7_faq_5_question', 'What is a job scheduling tool?'),
(10219, '_flexible_content_7_faq_5_question', 'field_5db055c404075'),
(10219, 'flexible_content_7_faq_5_response', 'A good job scheduling tool such as Homebase will provide everything you need to manage your employee schedules, such as managing your employees, shift swapping, and even exporting to payroll with the top companies.\r\n\r\nOur free plan has features such as a manager’s log and enhanced reporting to make sure your work life is as easy as possible.'),
(10219, '_flexible_content_7_faq_5_response', 'field_5db055dd04076'),
(10219, 'flexible_content_7_faq_6_question', 'Which is the best scheduling app?'),
(10219, '_flexible_content_7_faq_6_question', 'field_5db055c404075'),
(10219, 'flexible_content_7_faq_6_response', 'Homebase is the best scheduling app thanks to all of the great features we provide to more than 100,000 businesses who trust us to help make their work easier. But don’t take it from us, take it from the thousands of <a href=\"https://apps.apple.com/us/app/homebase-employee-scheduling/id871544379\">five-star reviews</a> from valued customers.'),
(10219, '_flexible_content_7_faq_6_response', 'field_5db055dd04076'),
(10219, 'flexible_content_7_faq_7_question', 'What would you recommend for best time tracking tools?'),
(10219, '_flexible_content_7_faq_7_question', 'field_5db055c404075'),
(10219, 'flexible_content_7_faq_7_response', 'After you’ve scheduled your team, you’ll need to track their time worked so you can pay them accurately. Homebase offers integrated time tracking tools: a secure <a href=\"https://joinhomebase.com/features/time-clock\">time clock</a> and an easy-to-use <a href=\"https://joinhomebase.com/features/timesheets\">timesheet</a> that integrates with popular payroll providers for easy export.'),
(10219, '_flexible_content_7_faq_7_response', 'field_5db055dd04076'),
(10219, 'flexible_content_7_faq_8_question', 'Do you recommend an employee scheduling software that will support scheduling by month, rather than by week?'),
(10219, '_flexible_content_7_faq_8_question', 'field_5db055c404075'),
(10219, 'flexible_content_7_faq_8_response', 'Creating and publishing a work schedule on Homebase only takes a few minutes, and if you keep the same schedule week to week, you can easily copy it over or even schedule weeks in advance. As you’re making the schedule, you’ll be able to see your whole team’s availabilities, along with sales and weather projections, so you can stay in control of your labor costs. You can also add shift notes as you schedule, with helpful reminders for your team.'),
(10219, '_flexible_content_7_faq_8_response', 'field_5db055dd04076'),
(10219, 'flexible_content_7_faq_9_question', 'What’s the best scheduling app for a small business?'),
(10219, '_flexible_content_7_faq_9_question', 'field_5db055c404075'),
(10219, 'flexible_content_7_faq_9_response', 'Your scheduling app should help you run your small business in an efficient and easy way, and Homebase does just that. We help you build your schedule quickly, reduce no-shows and employee scheduling errors, and you can send schedule changes to your employees through text, email, and the free mobile app to confirm they received it.'),
(10219, '_flexible_content_7_faq_9_response', 'field_5db055dd04076'),
(10219, 'flexible_content_7_faq_10_question', 'Would giving them a physical copy be the most efficient and timely method?'),
(10219, '_flexible_content_7_faq_10_question', 'field_5db055c404075'),
(10219, 'flexible_content_7_faq_10_response', 'With Homebase, you’ll get easy, fast, and free work scheduling software. Compared to printed employee schedules, you’ll save hours every week on employee management. An online schedule maker like Homebase is a critical part of your workforce management software solution, and it’ll make shift scheduling and payroll a breeze.\r\n\r\nYour team will love an employee scheduling app like Homebase too, with scheduling updates sent to their phones as soon as they’re published, and an easy way for them (and you) to track time off. Using Homebase for free employee scheduling is a win-win: your team will love the flexibility, and your managers will save hours on team scheduling.'),
(10219, '_flexible_content_7_faq_10_response', 'field_5db055dd04076'),
(10219, 'flexible_content_7_faq_11_question', 'Any suggestions for scheduling software that includes a way to receive personal requests from users?'),
(10219, '_flexible_content_7_faq_11_question', 'field_5db055c404075'),
(10219, 'flexible_content_7_faq_11_response', 'With the free Homebase mobile app, your team will be able to update their future work availabilities, estimate their earnings, request time off, and even trade shifts (with manager approval). They will also get notified instantly when you publish a new schedule. If they don’t have an Android or iOS phone, you can still send them text message reminders on the essentials plan and above.'),
(10219, '_flexible_content_7_faq_11_response', 'field_5db055dd04076'),
(10219, 'flexible_content_7_faq_12_question', 'How many people do you schedule?'),
(10219, '_flexible_content_7_faq_12_question', 'field_5db055c404075'),
(10219, 'flexible_content_7_faq_12_response', 'With Homebase’s efficient process, you can schedule as many employees as you need on your shift to ensure a successful business day. With our app, all of your team information is in one place and your employees can manage their work life by checking their schedule, trading shifts, messaging others and even estimating their pay.'),
(10219, '_flexible_content_7_faq_12_response', 'field_5db055dd04076'),
(10219, 'flexible_content_7_faq_13_question', 'What is the best way to monitor employees during a shift?'),
(10219, '_flexible_content_7_faq_13_question', 'field_5db055c404075'),
(10219, 'flexible_content_7_faq_13_response', 'Use our employee time clock to start tracking time and turn any browser, tablet or phone into a sophisticated time clock. All you have to do is set it up and you’ll see all of your data sync seamlessly in the cloud. You’ll be able to track paid and unpaid breaks, tips, and you can stay compliant without any of the hard work.'),
(10219, '_flexible_content_7_faq_13_response', 'field_5db055dd04076'),
(10219, 'flexible_content_7_faq', '14'),
(10219, '_flexible_content_7_faq', 'field_5db055b604074'),
(10219, 'flexible_content_5_extra_class', 'four-columns'),
(10219, '_flexible_content_5_extra_class', 'field_5db7218da5975'),
(10219, '_dp_original', '9038'),
(10219, '_edit_lock', '1574878251:26'),
(10219, '_edit_last', '26'),
(10219, 'flexible_content_2_button_text', 'Build your schedule'),
(10219, '_flexible_content_2_button_text', 'field_590ba819a7bac'),
(10219, 'flexible_content_2_button_link', 'https://app.joinhomebase.com/onboarding/sign_up'),
(10219, '_flexible_content_2_button_link', 'field_590ba828a7bad');


COMMIT;