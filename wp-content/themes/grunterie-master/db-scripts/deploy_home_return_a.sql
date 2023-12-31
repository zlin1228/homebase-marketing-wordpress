
/*select 9591 as post_id, meta_key, meta_value from wp_postmeta where post_id = 9009*/
DELETE FROM `wp_postmeta` WHERE post_id = 9591;

SET AUTOCOMMIT = 0;
START TRANSACTION;


INSERT INTO `wp_postmeta` (`post_id`, `meta_key`, `meta_value`) VALUES
(9591, '_edit_lock', '1573747763:26'),
(9591, '_edit_last', '26'),
(9591, '_wp_page_template', 'templates/flexible-home.php'),
(9591, 'background_image', ''),
(9591, '_background_image', 'field_54e6c95354b44'),
(9591, 'h1_headline', ''),
(9591, '_h1_headline', 'field_54e6c96454b45'),
(9591, 'h2_headline', ''),
(9591, '_h2_headline', 'field_54e6c99754b46'),
(9591, 'button_text', ''),
(9591, '_button_text', 'field_54e6c9aa54b47'),
(9591, 'flexible_homepage', 'a:4:{i:0;s:11:\"hero_bubble\";i:1;s:13:\"flex_3_column\";i:2;s:12:\"how_it_works\";i:3;s:7:\"reviews\";}'),
(9591, '_flexible_homepage', 'field_5d76565d3cba7'),
(9591, 'flexible_homepage_0_bubble_bubble_ilustration', '9010'),
(9591, '_flexible_homepage_0_bubble_bubble_ilustration', 'field_5da9f19450c73'),
(9591, 'flexible_homepage_0_bubble_bubble_title', 'Hi there!'),
(9591, '_flexible_homepage_0_bubble_bubble_title', 'field_5da9f12250c6f'),
(9591, 'flexible_homepage_0_bubble_bubble_subtitle', 'Welcome back to Homebase.'),
(9591, '_flexible_homepage_0_bubble_bubble_subtitle', 'field_5da9f13250c70'),
(9591, 'flexible_homepage_0_bubble_bubble_description', 'Log in today to see what’s new.'),
(9591, '_flexible_homepage_0_bubble_bubble_description', 'field_5da9f13f50c71'),
(9591, 'flexible_homepage_0_bubble_bubble_button', 'a:3:{s:5:\"title\";s:7:\"Sign In\";s:3:\"url\";s:39:\"https://app.homebasestage.wpengine.com/\";s:6:\"target\";s:0:\"\";}'),
(9591, '_flexible_homepage_0_bubble_bubble_button', 'field_5da9f15150c72'),
(9591, 'flexible_homepage_0_bubble', ''),
(9591, '_flexible_homepage_0_bubble', 'field_5da9f11350c6e'),
(9591, 'flexible_homepage_0_bubble_image', '9011'),
(9591, '_flexible_homepage_0_bubble_image', 'field_5da9f1c550c74'),
(9591, 'flexible_homepage_1_hide_widget', '0'),
(9591, '_flexible_homepage_1_hide_widget', 'field_59034cf6a2f72'),
(9591, 'flexible_homepage_1_extra_css_classes', ''),
(9591, '_flexible_homepage_1_extra_css_classes', 'field_599d68ef2722f'),
(9591, 'flexible_homepage_1_add_border_to_top', '0'),
(9591, '_flexible_homepage_1_add_border_to_top', 'field_599d691027230'),
(9591, 'flexible_homepage_1_add_border_to_bottom', '0'),
(9591, '_flexible_homepage_1_add_border_to_bottom', 'field_591075b1cb2a3'),
(9591, 'flexible_homepage_1_scroll_anchor', ''),
(9591, '_flexible_homepage_1_scroll_anchor', 'field_591093717c6bc'),
(9591, 'flexible_homepage_1_top_picture', ''),
(9591, '_flexible_homepage_1_top_picture', 'field_59030fed0b7ce'),
(9591, 'flexible_homepage_1_top_picture_style', '1'),
(9591, '_flexible_homepage_1_top_picture_style', 'field_59032231e214e'),
(9591, 'flexible_homepage_1_top_picture_position', 'above_headline'),
(9591, '_flexible_homepage_1_top_picture_position', 'field_590311760b7d3'),
(9591, 'flexible_homepage_1_top_picture_link', ''),
(9591, '_flexible_homepage_1_top_picture_link', 'field_590311430b7d2'),
(9591, 'flexible_homepage_1_top_headline', 'How we can help your business'),
(9591, '_flexible_homepage_1_top_headline', 'field_59030ffd0b7cf'),
(9591, 'flexible_homepage_1_top_subheadline', ''),
(9591, '_flexible_homepage_1_top_subheadline', 'field_590310aa0b7d1'),
(9591, 'flexible_homepage_1_top_subheadline_link', ''),
(9591, '_flexible_homepage_1_top_subheadline_link', 'field_5903100a0b7d0'),
(9591, 'flexible_homepage_1_expand_row', '0'),
(9591, '_flexible_homepage_1_expand_row', 'field_59035026d587f'),
(9591, 'flexible_homepage_1_columns_0_picture', '3648'),
(9591, '_flexible_homepage_1_columns_0_picture', 'field_5903136f375f6'),
(9591, 'flexible_homepage_1_columns_0_text_alignment', 'center'),
(9591, '_flexible_homepage_1_columns_0_text_alignment', 'field_5903153237601'),
(9591, 'flexible_homepage_1_columns_0_headline', 'Scheduling Software'),
(9591, '_flexible_homepage_1_columns_0_headline', 'field_590313d5375f7'),
(9591, 'flexible_homepage_1_columns_0_headline_link', '/features/employee-scheduling-2'),
(9591, '_flexible_homepage_1_columns_0_headline_link', 'field_590313df375f8'),
(9591, 'flexible_homepage_1_columns_0_subheadline', 'Over $2.5B in Payroll Tracked'),
(9591, '_flexible_homepage_1_columns_0_subheadline', 'field_590313ed375f9'),
(9591, 'flexible_homepage_1_columns_0_subheadline_link', ''),
(9591, '_flexible_homepage_1_columns_0_subheadline_link', 'field_59031411375fa'),
(9591, 'flexible_homepage_1_columns_0_text', 'Build a schedule in minutes,  send to the team, and manage changes easily.'),
(9591, '_flexible_homepage_1_columns_0_text', 'field_59031437375fb'),
(9591, 'flexible_homepage_1_columns_0_learn_more', 'button'),
(9591, '_flexible_homepage_1_columns_0_learn_more', 'field_5903144a375fc'),
(9591, 'flexible_homepage_1_columns_0_button_text', ''),
(9591, '_flexible_homepage_1_columns_0_button_text', 'field_590314e9375ff'),
(9591, 'flexible_homepage_1_columns_0_button_link', '/features/employee-scheduling-2'),
(9591, '_flexible_homepage_1_columns_0_button_link', 'field_590314f437600'),
(9591, 'flexible_homepage_1_columns_1_picture', '3647'),
(9591, '_flexible_homepage_1_columns_1_picture', 'field_5903136f375f6'),
(9591, 'flexible_homepage_1_columns_1_text_alignment', 'center'),
(9591, '_flexible_homepage_1_columns_1_text_alignment', 'field_5903153237601'),
(9591, 'flexible_homepage_1_columns_1_headline', 'Time Clock'),
(9591, '_flexible_homepage_1_columns_1_headline', 'field_590313d5375f7'),
(9591, 'flexible_homepage_1_columns_1_headline_link', '/features/time-clock-2'),
(9591, '_flexible_homepage_1_columns_1_headline_link', 'field_590313df375f8'),
(9591, 'flexible_homepage_1_columns_1_subheadline', 'Over 50M shifts tracked'),
(9591, '_flexible_homepage_1_columns_1_subheadline', 'field_590313ed375f9'),
(9591, 'flexible_homepage_1_columns_1_subheadline_link', ''),
(9591, '_flexible_homepage_1_columns_1_subheadline_link', 'field_59031411375fa'),
(9591, 'flexible_homepage_1_columns_1_text', 'View your labor costs in real-time from any device.'),
(9591, '_flexible_homepage_1_columns_1_text', 'field_59031437375fb'),
(9591, 'flexible_homepage_1_columns_1_learn_more', 'button'),
(9591, '_flexible_homepage_1_columns_1_learn_more', 'field_5903144a375fc'),
(9591, 'flexible_homepage_1_columns_1_button_text', ''),
(9591, '_flexible_homepage_1_columns_1_button_text', 'field_590314e9375ff'),
(9591, 'flexible_homepage_1_columns_1_button_link', '/features/time-clock-2'),
(9591, '_flexible_homepage_1_columns_1_button_link', 'field_590314f437600'),
(9591, 'flexible_homepage_1_columns_2_picture', '3649'),
(9591, '_flexible_homepage_1_columns_2_picture', 'field_5903136f375f6'),
(9591, 'flexible_homepage_1_columns_2_text_alignment', 'center'),
(9591, '_flexible_homepage_1_columns_2_text_alignment', 'field_5903153237601'),
(9591, 'flexible_homepage_1_columns_2_headline', 'Team Communication'),
(9591, '_flexible_homepage_1_columns_2_headline', 'field_590313d5375f7'),
(9591, 'flexible_homepage_1_columns_2_headline_link', '/features/team-communication-2'),
(9591, '_flexible_homepage_1_columns_2_headline_link', 'field_590313df375f8'),
(9591, 'flexible_homepage_1_columns_2_subheadline', 'Over 72M messages sent'),
(9591, '_flexible_homepage_1_columns_2_subheadline', 'field_590313ed375f9'),
(9591, 'flexible_homepage_1_columns_2_subheadline_link', ''),
(9591, '_flexible_homepage_1_columns_2_subheadline_link', 'field_59031411375fa'),
(9591, 'flexible_homepage_1_columns_2_text', 'Communicate with the whole team instantly. Without texts or emails.'),
(9591, '_flexible_homepage_1_columns_2_text', 'field_59031437375fb'),
(9591, 'flexible_homepage_1_columns_2_learn_more', 'button'),
(9591, '_flexible_homepage_1_columns_2_learn_more', 'field_5903144a375fc'),
(9591, 'flexible_homepage_1_columns_2_button_text', ''),
(9591, '_flexible_homepage_1_columns_2_button_text', 'field_590314e9375ff'),
(9591, 'flexible_homepage_1_columns_2_button_link', '/features/team-communication-2'),
(9591, '_flexible_homepage_1_columns_2_button_link', 'field_590314f437600'),
(9591, 'flexible_homepage_1_columns_3_picture', '6607'),
(9591, '_flexible_homepage_1_columns_3_picture', 'field_5903136f375f6'),
(9591, 'flexible_homepage_1_columns_3_text_alignment', 'center'),
(9591, '_flexible_homepage_1_columns_3_text_alignment', 'field_5903153237601'),
(9591, 'flexible_homepage_1_columns_3_headline', 'Hiring'),
(9591, '_flexible_homepage_1_columns_3_headline', 'field_590313d5375f7'),
(9591, 'flexible_homepage_1_columns_3_headline_link', '/features/hiring-2'),
(9591, '_flexible_homepage_1_columns_3_headline_link', 'field_590313df375f8'),
(9591, 'flexible_homepage_1_columns_3_subheadline', 'Access 1M+ qualified candidates'),
(9591, '_flexible_homepage_1_columns_3_subheadline', 'field_590313ed375f9'),
(9591, 'flexible_homepage_1_columns_3_subheadline_link', ''),
(9591, '_flexible_homepage_1_columns_3_subheadline_link', 'field_59031411375fa'),
(9591, 'flexible_homepage_1_columns_3_text', 'Post to the top job boards and easily manage applicants all in one place.'),
(9591, '_flexible_homepage_1_columns_3_text', 'field_59031437375fb'),
(9591, 'flexible_homepage_1_columns_3_learn_more', 'button'),
(9591, '_flexible_homepage_1_columns_3_learn_more', 'field_5903144a375fc'),
(9591, 'flexible_homepage_1_columns_3_button_text', ''),
(9591, '_flexible_homepage_1_columns_3_button_text', 'field_590314e9375ff'),
(9591, 'flexible_homepage_1_columns_3_button_link', '/features/hiring-2'),
(9591, '_flexible_homepage_1_columns_3_button_link', 'field_590314f437600'),
(9591, 'flexible_homepage_1_columns', 'a:4:{i:0;s:6:\"column\";i:1;s:6:\"column\";i:2;s:6:\"column\";i:3;s:6:\"column\";}'),
(9591, '_flexible_homepage_1_columns', 'field_5903130a375f5'),
(9591, 'flexible_homepage_2_title', 'Ready to learn more?'),
(9591, '_flexible_homepage_2_title', 'field_5d76cf225588e'),
(9591, 'flexible_homepage_2_button_text', 'See How It Works'),
(9591, '_flexible_homepage_2_button_text', 'field_5d76cf285588f'),
(9591, 'flexible_homepage_2_button_link', '/how-it-works/'),
(9591, '_flexible_homepage_2_button_link', 'field_5d76cf5355890'),
(9591, 'flexible_homepage_3_title', 'Over 100,000 businesses love Homebase. <br>Yours will too.'),
(9591, '_flexible_homepage_3_title', 'field_5d76cdd937b46'),
(9591, 'flexible_homepage_3_reviews_0_score', '8855'),
(9591, '_flexible_homepage_3_reviews_0_score', 'field_5d76ce205588a'),
(9591, 'flexible_homepage_3_reviews_0_company_logo', '8856'),
(9591, '_flexible_homepage_3_reviews_0_company_logo', 'field_5d76ce3b5588b'),
(9591, 'flexible_homepage_3_reviews_0_score_description', '5-star rating on<br>Quickbooks Apps'),
(9591, '_flexible_homepage_3_reviews_0_score_description', 'field_5d76ce5a5588c'),
(9591, 'flexible_homepage_3_reviews_1_score', '8859'),
(9591, '_flexible_homepage_3_reviews_1_score', 'field_5d76ce205588a'),
(9591, 'flexible_homepage_3_reviews_1_company_logo', '8857'),
(9591, '_flexible_homepage_3_reviews_1_company_logo', 'field_5d76ce3b5588b'),
(9591, 'flexible_homepage_3_reviews_1_score_description', '4.8 of 5 star rating on<br>Apple App Store'),
(9591, '_flexible_homepage_3_reviews_1_score_description', 'field_5d76ce5a5588c'),
(9591, 'flexible_homepage_3_reviews_2_score', '8860'),
(9591, '_flexible_homepage_3_reviews_2_score', 'field_5d76ce205588a'),
(9591, 'flexible_homepage_3_reviews_2_company_logo', '8858'),
(9591, '_flexible_homepage_3_reviews_2_company_logo', 'field_5d76ce3b5588b'),
(9591, 'flexible_homepage_3_reviews_2_score_description', '4.5 of 5 star rating  on<br>Capterra'),
(9591, '_flexible_homepage_3_reviews_2_score_description', 'field_5d76ce5a5588c'),
(9591, 'flexible_homepage_3_reviews', '3'),
(9591, '_flexible_homepage_3_reviews', 'field_5d76cded37b47'),
(9591, 'ampforwp_custom_content_editor', ''),
(9591, 'ampforwp_custom_content_editor_checkbox', NULL),
(9591, 'wbounce_status', 'default'),
(9591, 'wbounce_template', 'default'),
(9591, 'wbounce_title', ''),
(9591, 'wbounce_text', ''),
(9591, 'wbounce_cta', ''),
(9591, 'wbounce_url', ''),
(9591, 'wbounce_override', ''),
(9591, 'ampforwp-amp-on-off', 'hide-amp'),
(9591, '_at_widget', '1');


COMMIT;