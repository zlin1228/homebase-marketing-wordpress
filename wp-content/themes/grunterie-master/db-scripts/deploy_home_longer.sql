DELETE FROM `wp_postmeta` WHERE post_id = 8851;

SET AUTOCOMMIT = 0;
START TRANSACTION;


INSERT INTO `wp_postmeta` (`post_id`, `meta_key`, `meta_value`) VALUES
(8851, '_wp_page_template', 'templates/flexible-home.php'),
(8851, 'background_image', ''),
(8851, '_background_image', 'field_54e6c95354b44'),
(8851, 'h1_headline', ''),
(8851, '_h1_headline', 'field_54e6c96454b45'),
(8851, 'h2_headline', ''),
(8851, '_h2_headline', 'field_54e6c99754b46'),
(8851, 'button_text', ''),
(8851, '_button_text', 'field_54e6c9aa54b47'),
(8851, 'flexible_homepage_0_headline', 'You didn’t go into business to make employee schedules. We did.'),
(8851, '_flexible_homepage_0_headline', 'field_5d7656a83cba8'),
(8851, 'flexible_homepage_0_subheadline', 'Stay connected to your team with our free scheduling, timesheet, and hiring tools'),
(8851, '_flexible_homepage_0_subheadline', 'field_5d7656ae3cba9'),
(8851, 'flexible_homepage_0_bumper_text_button', 'Get Started'),
(8851, '_flexible_homepage_0_bumper_text_button', 'field_5d7656ff3cbaa'),
(8851, 'flexible_homepage_0_bullets_0_item_description', '<strong>FREE</strong> Employee Scheduling'),
(8851, '_flexible_homepage_0_bullets_0_item_description', 'field_5d7657393cbac'),
(8851, 'flexible_homepage_0_bullets_1_item_description', '<strong>FREE</strong> Timesheet Tools'),
(8851, '_flexible_homepage_0_bullets_1_item_description', 'field_5d7657393cbac'),
(8851, 'flexible_homepage_0_bullets_2_item_description', '<strong>FREE</strong> Mobile App'),
(8851, '_flexible_homepage_0_bullets_2_item_description', 'field_5d7657393cbac'),
(8851, 'flexible_homepage_0_bullets_3_item_description', '<strong>FREE</strong> Hiring Tools'),
(8851, '_flexible_homepage_0_bullets_3_item_description', 'field_5d7657393cbac'),
(8851, 'flexible_homepage_0_bullets', '4'),
(8851, '_flexible_homepage_0_bullets', 'field_5d76572e3cbab'),
(8851, 'flexible_homepage_0_bullets_footer', 'Join for free today.<br>No credit card required.'),
(8851, '_flexible_homepage_0_bullets_footer', 'field_5d76574f3cbad'),
(8851, 'flexible_homepage_1_flexible_slider_content_0_slide_css_class', 'slide-track-time'),
(8851, '_flexible_homepage_1_flexible_slider_content_0_slide_css_class', 'field_5d765af65c994'),
(8851, 'flexible_homepage', 'a:6:{i:0;s:17:\"intro_get_started\";i:1;s:24:\"content_left_image_right\";i:2;s:24:\"content_right_image_left\";i:3;s:24:\"content_left_image_right\";i:4;s:7:\"reviews\";i:5;s:12:\"how_it_works\";}'),
(8851, '_flexible_homepage', 'field_5d76565d3cba7'),
(8851, 'flexible_homepage_1_flexible_slider_content_1_slide_css_class', ''),
(8851, '_flexible_homepage_1_flexible_slider_content_1_slide_css_class', 'field_5d765a584ec37'),
(8851, '_dp_original', '8887'),
(8851, '_edit_lock', '1568139780:26'),
(8851, '_edit_last', '26'),
(8851, 'flexible_homepage_1_title', 'Build your employee schedules in minutes'),
(8851, '_flexible_homepage_1_title', 'field_5d77e1ef2a5d5'),
(8851, 'flexible_homepage_1_content', '<p class=\"thin purple\">Drag &amp; drop team scheduling</p>\r\nView the team schedule by role, time period, or employee and watch hours calculate automatically.\r\n<p class=\"thin purple\">Schedule your team from any browser or your mobile phone</p>\r\nPublish work changes anywhere from the scheduling app.\r\n<p class=\"thin purple\">Put your schedule on auto-pilot</p>\r\nEasily copy over last week´s shift schedule. Or use automatic scheduling, which takes into account your team´s availabilities and roles.'),
(8851, '_flexible_homepage_1_content', 'field_5d77e1ef2a5d7'),
(8851, 'flexible_homepage_1_image', '8888'),
(8851, '_flexible_homepage_1_image', 'field_5d77e1ef2a5d6'),
(8851, 'flexible_homepage_1_background_color', '#f6f7f7'),
(8851, '_flexible_homepage_1_background_color', 'field_5d77e1ef2a5d8'),
(8851, 'flexible_homepage_2_title', 'Track the time your employees work from any device'),
(8851, '_flexible_homepage_2_title', 'field_5d77e124344fb'),
(8851, 'flexible_homepage_2_image', '8905'),
(8851, '_flexible_homepage_2_image', 'field_5d77e152344fd'),
(8851, 'flexible_homepage_2_content', '<p class=\"thin purple\">Turn any browser, tabler or phone into a sophisticated time clock</p>\r\nSet up your timeclock and watch all of the data sync seamlessly in the cloud.\r\n<p class=\"thin purple\">Track paid breaks, unpaid breaks, and tips</p>\r\nStay compliant without any extra work.\r\n<p class=\"thin purple\">View your labor costs in real-time</p>\r\nSee your labor costs and labor cost % in real-time from your phone or computer.'),
(8851, '_flexible_homepage_2_content', 'field_5d77e141344fc'),
(8851, 'flexible_homepage_2_background_color', '#ffffff'),
(8851, '_flexible_homepage_2_background_color', 'field_5d77e15d344fe'),
(8851, 'flexible_homepage_3_title', 'Communicate with your team easier with our free app.'),
(8851, '_flexible_homepage_3_title', 'field_5d77e1ef2a5d5'),
(8851, 'flexible_homepage_3_content', '<p class=\"thin purple\">Easy app messaging for your busy team.</p>\r\nSet up groups or one-on-one messages with coworkers all within Homebase app.\r\n<p class=\"thin purple\">Put your information in one place.</p>\r\nUse the Manager Lock to Track information, and put events and notes right on the schedule.\r\n<p class=\"thin purple\">Put the employee schedule in your pocket.</p>\r\nView the schedule and make changes from your phone. Sync to your phone calendar automaticaally.\r\n'),
(8851, '_flexible_homepage_3_content', 'field_5d77e1ef2a5d7'),
(8851, 'flexible_homepage_3_image', '8889'),
(8851, '_flexible_homepage_3_image', 'field_5d77e1ef2a5d6'),
(8851, 'flexible_homepage_3_background_color', '#f6f7f7'),
(8851, '_flexible_homepage_3_background_color', 'field_5d77e1ef2a5d8'),
(8851, 'flexible_homepage_4_title', 'Over 100,000 businesses love Homebase.<br>Yours will too'),
(8851, '_flexible_homepage_4_title', 'field_5d76cdd937b46'),
(8851, 'flexible_homepage_4_reviews_0_score', '8898'),
(8851, '_flexible_homepage_4_reviews_0_score', 'field_5d76ce205588a'),
(8851, 'flexible_homepage_4_reviews_0_company_logo', '8904'),
(8851, '_flexible_homepage_4_reviews_0_company_logo', 'field_5d76ce3b5588b'),
(8851, 'flexible_homepage_4_reviews_0_score_description', '5-star rating on<br>Quickbooks Apps'),
(8851, '_flexible_homepage_4_reviews_0_score_description', 'field_5d76ce5a5588c'),
(8851, 'flexible_homepage_4_reviews_1_score', '8900'),
(8851, '_flexible_homepage_4_reviews_1_score', 'field_5d76ce205588a'),
(8851, 'flexible_homepage_4_reviews_1_company_logo', '8901'),
(8851, '_flexible_homepage_4_reviews_1_company_logo', 'field_5d76ce3b5588b'),
(8851, 'flexible_homepage_4_reviews_1_score_description', '4.8 of 5 star rating on<br>Apple App Store'),
(8851, '_flexible_homepage_4_reviews_1_score_description', 'field_5d76ce5a5588c'),
(8851, 'flexible_homepage_4_reviews_2_score', '8902'),
(8851, '_flexible_homepage_4_reviews_2_score', 'field_5d76ce205588a'),
(8851, 'flexible_homepage_4_reviews_2_company_logo', '8903'),
(8851, '_flexible_homepage_4_reviews_2_company_logo', 'field_5d76ce3b5588b'),
(8851, 'flexible_homepage_4_reviews_2_score_description', '4.5 of 5 star rating  on<br>Capterra'),
(8851, '_flexible_homepage_4_reviews_2_score_description', 'field_5d76ce5a5588c'),
(8851, 'flexible_homepage_4_reviews', '3'),
(8851, '_flexible_homepage_4_reviews', 'field_5d76cded37b47'),
(8851, 'flexible_homepage_5_title', 'Ready to learn more?'),
(8851, '_flexible_homepage_5_title', 'field_5d76cf225588e'),
(8851, 'flexible_homepage_5_button_text', 'See How It Works'),
(8851, '_flexible_homepage_5_button_text', 'field_5d76cf285588f'),
(8851, 'flexible_homepage_5_button_link', '/how-it-works/'),
(8851, '_flexible_homepage_5_button_link', 'field_5d76cf5355890');

COMMIT;