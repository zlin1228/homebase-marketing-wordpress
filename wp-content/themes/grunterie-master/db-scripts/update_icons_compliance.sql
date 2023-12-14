
/** Check all icons by column */
/*select * from wp_postmeta 
WHERE post_id in (select post_id 
                  from wp_postmeta where meta_key = '_wp_page_template' 
                  	and meta_value = 'page-state-compliance.php')
      and meta_key = 'two_columns_first_column';*/


--First icon
UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = REPLACE(meta_value,'<a href="https://homebasestage.wpengine.com/wp-content/uploads/2020/01/alert-1.png"><img class="alignnone" src="https://homebasestage.wpengine.com/wp-content/uploads/2020/01/alert-1.png" /></a>','<img class="alignnone" src="https://joinhomebase.com/wp-content/uploads/2020/02/alert-1.png" />') 
WHERE meta_key = 'two_columns_first_column';


--Second icon

UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = REPLACE(meta_value,'<a href="https://homebasestage.wpengine.com/wp-content/uploads/2020/01/alert.png"><img class="alignnone" src="https://homebasestage.wpengine.com/wp-content/uploads/2020/01/alert.png" /></a>','<img class="alignnone" src="https://joinhomebase.com/wp-content/uploads/2020/02/alert.png" />') 
WHERE meta_key = 'two_columns_second_column';


--Remember icon


UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = REPLACE(meta_value,'<a href="https://homebasestage.wpengine.com/wp-content/uploads/2020/01/icon.png"><img class="alignnone" src="https://homebasestage.wpengine.com/wp-content/uploads/2020/01/icon.png" /></a>','<img class="alignnone" src="https://joinhomebase.com/wp-content/uploads/2020/02/remember-alert.png" />') 
WHERE meta_key = 'additional_resources_remember';


/** 
    Red Icon NEW 11198 / OLD 9260 
    Green Icon NEW 11197 / OLD 9259
**/
/*
Check max icons level
select * from wp_postmeta 
WHERE post_id in (select post_id 
                  from wp_postmeta where meta_key = '_wp_page_template' 
                  	and meta_value = 'page-state-compliance.php') 
      and meta_key = 'leave_requirements_15_icon'*/
UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = 11198
WHERE meta_key = 'leave_requirements_0_icon' AND meta_value = 9260;

UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = 11197
WHERE meta_key = 'leave_requirements_0_icon' AND meta_value = 9259;

UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = 11198
WHERE meta_key = 'leave_requirements_1_icon' AND meta_value = 9260;

UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = 11197
WHERE meta_key = 'leave_requirements_1_icon' AND meta_value = 9259;

UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = 11198
WHERE meta_key = 'leave_requirements_2_icon' AND meta_value = 9260;

UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = 11197
WHERE meta_key = 'leave_requirements_2_icon' AND meta_value = 9259;

UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = 11198
WHERE meta_key = 'leave_requirements_3_icon' AND meta_value = 9260;

UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = 11197
WHERE meta_key = 'leave_requirements_3_icon' AND meta_value = 9259;

UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = 11198
WHERE meta_key = 'leave_requirements_4_icon' AND meta_value = 9260;

UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = 11197
WHERE meta_key = 'leave_requirements_4_icon' AND meta_value = 9259;

UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = 11198
WHERE meta_key = 'leave_requirements_5_icon' AND meta_value = 9260;

UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = 11197
WHERE meta_key = 'leave_requirements_5_icon' AND meta_value = 9259;

UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = 11198
WHERE meta_key = 'leave_requirements_6_icon' AND meta_value = 9260;

UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = 11197
WHERE meta_key = 'leave_requirements_6_icon' AND meta_value = 9259;

UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = 11198
WHERE meta_key = 'leave_requirements_7_icon' AND meta_value = 9260;

UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = 11197
WHERE meta_key = 'leave_requirements_7_icon' AND meta_value = 9259;

UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = 11198
WHERE meta_key = 'leave_requirements_8_icon' AND meta_value = 9260;

UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = 11197
WHERE meta_key = 'leave_requirements_8_icon' AND meta_value = 9259;

UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = 11198
WHERE meta_key = 'leave_requirements_9_icon' AND meta_value = 9260;

UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = 11197
WHERE meta_key = 'leave_requirements_9_icon' AND meta_value = 9259;

UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = 11198
WHERE meta_key = 'leave_requirements_10_icon' AND meta_value = 9260;

UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = 11197
WHERE meta_key = 'leave_requirements_10_icon' AND meta_value = 9259;

UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = 11198
WHERE meta_key = 'leave_requirements_11_icon' AND meta_value = 9260;

UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = 11197
WHERE meta_key = 'leave_requirements_11_icon' AND meta_value = 9259;

UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = 11198
WHERE meta_key = 'leave_requirements_12_icon' AND meta_value = 9260;

UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = 11197
WHERE meta_key = 'leave_requirements_12_icon' AND meta_value = 9259;

UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = 11198
WHERE meta_key = 'leave_requirements_13_icon' AND meta_value = 9260;

UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = 11197
WHERE meta_key = 'leave_requirements_13_icon' AND meta_value = 9259;

UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = 11198
WHERE meta_key = 'leave_requirements_14_icon' AND meta_value = 9260;

UPDATE `wp_postmeta` a
	INNER JOIN (
		select post_id from wp_postmeta WHERE meta_key = '_wp_page_template' and meta_value = 'page-state-compliance.php'
	) b ON a.post_id = b.post_id
SET meta_value = 11197
WHERE meta_key = 'leave_requirements_14_icon' AND meta_value = 9259;
