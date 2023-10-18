<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-03-05 12:56:30 --> Severity: Warning --> Division by zero /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/views/dashboard.php 237
ERROR - 2021-03-05 12:56:30 --> Severity: Warning --> Division by zero /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/views/dashboard.php 237
ERROR - 2021-03-05 12:56:35 --> Could not find the language line "_name"
ERROR - 2021-03-05 12:56:43 --> Query error: Unknown column 'savsoft_users.first_name' in 'where clause' - Invalid query: SELECT *
FROM `savsoft_result`
JOIN `savsoft_users` ON `savsoft_users`.`uid`=`savsoft_result`.`uid`
JOIN `savsoft_quiz` ON `savsoft_quiz`.`quid`=`savsoft_result`.`quid`
WHERE `savsoft_users`.`email` = 'poonam'
OR `savsoft_users`.`first_name` = 'poonam'
OR `savsoft_users`.`last_name` = 'poonam'
OR `savsoft_users`.`contact_no` = 'poonam'
OR `savsoft_result`.`rid` = 'poonam'
OR `savsoft_quiz`.`quiz_name` = 'poonam'
ORDER BY `rid` DESC
 LIMIT 30
ERROR - 2021-03-05 12:56:43 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/models/Result_model.php 46
ERROR - 2021-03-05 12:59:01 --> Could not find the language line "_name"
ERROR - 2021-03-05 12:59:04 --> Could not find the language line "_name"
ERROR - 2021-03-05 12:59:11 --> Could not find the language line "_name"
ERROR - 2021-03-05 12:59:49 --> Could not find the language line "_name"
ERROR - 2021-03-05 13:00:30 --> Severity: Warning --> Division by zero /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/views/dashboard.php 237
ERROR - 2021-03-05 13:00:39 --> Could not find the language line "_name"
ERROR - 2021-03-05 13:23:04 --> Could not find the language line "_name"
ERROR - 2021-03-05 13:23:24 --> Could not find the language line "_name"
ERROR - 2021-03-05 13:24:07 --> Could not find the language line "_name"
ERROR - 2021-03-05 13:24:11 --> Could not find the language line "_name"
ERROR - 2021-03-05 13:24:44 --> Could not find the language line "_name"
ERROR - 2021-03-05 13:24:50 --> Could not find the language line "_name"
ERROR - 2021-03-05 13:28:42 --> Could not find the language line "_name"
ERROR - 2021-03-05 13:28:57 --> Severity: Warning --> Division by zero /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/views/dashboard.php 237
ERROR - 2021-03-05 13:29:00 --> Could not find the language line "_name"
ERROR - 2021-03-05 13:29:19 --> Could not find the language line "_name"
ERROR - 2021-03-05 13:29:38 --> Severity: Warning --> Division by zero /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/views/dashboard.php 237
ERROR - 2021-03-05 13:29:43 --> Could not find the language line "_name"
ERROR - 2021-03-05 13:30:02 --> Could not find the language line "_name"
ERROR - 2021-03-05 13:30:14 --> Could not find the language line "_name"
ERROR - 2021-03-05 13:30:23 --> Severity: Warning --> Division by zero /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/views/dashboard.php 237
ERROR - 2021-03-05 13:31:54 --> Query error: Unknown column 'B.first_name' in 'field list' - Invalid query: 
		select A.*, B.first_name as requested_by_name, B.skype_id as requested_by_skype
		, C.first_name as appointed_to_name, C.skype_id as appointed_to_skype
		 from appointment_request as A
		JOIN savsoft_users as B on B.uid=A.request_by
		JOIN savsoft_users as C on C.uid=A.to_id
		 order by A.appointment_timing DESC
		limit 0,30
		
ERROR - 2021-03-05 13:31:54 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/models/Appointment_model.php 27
ERROR - 2021-03-05 13:31:55 --> Query error: Unknown column 'B.first_name' in 'field list' - Invalid query: 
		select A.*, B.first_name as requested_by_name, B.skype_id as requested_by_skype
		, C.first_name as appointed_to_name, C.skype_id as appointed_to_skype
		 from appointment_request as A
		JOIN savsoft_users as B on B.uid=A.request_by
		JOIN savsoft_users as C on C.uid=A.to_id
		 order by A.appointment_timing DESC
		limit 0,30
		
ERROR - 2021-03-05 13:31:55 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/models/Appointment_model.php 27
ERROR - 2021-03-05 13:31:58 --> Query error: Unknown column 'B.first_name' in 'field list' - Invalid query: 
		select A.*, B.first_name as requested_by_name, B.skype_id as requested_by_skype
		, C.first_name as appointed_to_name, C.skype_id as appointed_to_skype
		 from appointment_request as A
		JOIN savsoft_users as B on B.uid=A.request_by
		JOIN savsoft_users as C on C.uid=A.to_id
		 order by A.appointment_timing DESC
		limit 0,30
		
ERROR - 2021-03-05 13:31:58 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/models/Appointment_model.php 27
ERROR - 2021-03-05 13:35:38 --> Query error: Unknown column 'B.first_name' in 'field list' - Invalid query: 
		select A.*, B.first_name as requested_by_name, B.skype_id as requested_by_skype
		, C.first_name as appointed_to_name, C.skype_id as appointed_to_skype
		 from appointment_request as A
		JOIN savsoft_users as B on B.uid=A.request_by
		JOIN savsoft_users as C on C.uid=A.to_id
		 order by A.appointment_timing DESC
		limit 0,30
		
ERROR - 2021-03-05 13:35:38 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/models/Appointment_model.php 27
ERROR - 2021-03-05 13:41:57 --> Could not find the language line "_name"
ERROR - 2021-03-05 13:45:29 --> Could not find the language line "_name"
ERROR - 2021-03-05 13:45:34 --> Could not find the language line "_name"
ERROR - 2021-03-05 13:45:54 --> Could not find the language line "_name"
ERROR - 2021-03-05 13:46:00 --> Could not find the language line "_name"
ERROR - 2021-03-05 13:46:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/models/Quiz_model.php 893
ERROR - 2021-03-05 13:48:36 --> Could not find the language line "hello"
ERROR - 2021-03-05 13:48:36 --> Could not find the language line "user_id"
ERROR - 2021-03-05 13:48:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/views/view_result.php 356
ERROR - 2021-03-05 13:48:36 --> Could not find the language line "first_name"
ERROR - 2021-03-05 13:49:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/models/User_model.php 637
ERROR - 2021-03-05 13:49:27 --> Could not find the language line "tehsil"
ERROR - 2021-03-05 13:49:27 --> Could not find the language line "tehsil"
ERROR - 2021-03-05 13:51:51 --> Severity: Warning --> Division by zero /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/views/dashboard.php 237
ERROR - 2021-03-05 13:52:53 --> Could not find the language line "_name"
ERROR - 2021-03-05 13:53:00 --> Could not find the language line "_name"
ERROR - 2021-03-05 13:53:12 --> Could not find the language line "_name"
ERROR - 2021-03-05 13:53:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/models/Quiz_model.php 893
ERROR - 2021-03-05 13:56:44 --> Severity: Warning --> Division by zero /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/views/dashboard.php 237
ERROR - 2021-03-05 14:10:53 --> Could not find the language line "tehsil"
ERROR - 2021-03-05 14:10:53 --> Could not find the language line "tehsil"
ERROR - 2021-03-05 14:11:07 --> Severity: Warning --> Division by zero /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/views/dashboard.php 237
ERROR - 2021-03-05 14:11:23 --> Severity: Warning --> Division by zero /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/views/dashboard.php 237
ERROR - 2021-03-05 14:13:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/models/User_model.php 637
ERROR - 2021-03-05 14:13:51 --> Could not find the language line "hello"
ERROR - 2021-03-05 14:13:51 --> Could not find the language line "user_id"
ERROR - 2021-03-05 14:13:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/views/view_result.php 356
ERROR - 2021-03-05 14:13:51 --> Could not find the language line "first_name"
ERROR - 2021-03-05 14:14:25 --> Could not find the language line "tehsil"
ERROR - 2021-03-05 14:14:25 --> Could not find the language line "tehsil"
ERROR - 2021-03-05 14:15:33 --> Could not find the language line "tehsil"
ERROR - 2021-03-05 14:15:33 --> Could not find the language line "tehsil"
ERROR - 2021-03-05 14:16:23 --> Could not find the language line "tehsil"
ERROR - 2021-03-05 14:16:23 --> Could not find the language line "tehsil"
ERROR - 2021-03-05 14:16:43 --> Could not find the language line "_name"
ERROR - 2021-03-05 14:16:52 --> Could not find the language line "_name"
ERROR - 2021-03-05 14:17:43 --> Could not find the language line "_name"
ERROR - 2021-03-05 14:19:25 --> Could not find the language line "tehsil"
ERROR - 2021-03-05 14:19:25 --> Could not find the language line "tehsil"
ERROR - 2021-03-05 14:23:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/models/Quiz_model.php 893
ERROR - 2021-03-05 14:25:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/models/Quiz_model.php 893
ERROR - 2021-03-05 14:25:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/models/Quiz_model.php 893
ERROR - 2021-03-05 14:25:43 --> Severity: Warning --> Division by zero /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/views/dashboard.php 237
ERROR - 2021-03-05 14:26:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/models/Quiz_model.php 893
ERROR - 2021-03-05 14:28:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/models/Quiz_model.php 893
ERROR - 2021-03-05 14:30:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/models/Quiz_model.php 893
ERROR - 2021-03-05 14:31:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/models/Quiz_model.php 893
ERROR - 2021-03-05 14:43:42 --> Could not find the language line "hello"
ERROR - 2021-03-05 14:43:42 --> Could not find the language line "user_id"
ERROR - 2021-03-05 14:43:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/views/view_result.php 356
ERROR - 2021-03-05 14:43:42 --> Could not find the language line "first_name"
ERROR - 2021-03-05 09:24:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/helpers/xlsimport/SpreadsheetReader_XLS.php 133
ERROR - 2021-03-05 09:24:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/helpers/xlsimport/SpreadsheetReader_XLS.php 133
ERROR - 2021-03-05 15:01:54 --> Severity: Warning --> Division by zero /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/views/dashboard.php 237
ERROR - 2021-03-05 15:01:59 --> Could not find the language line "_name"
ERROR - 2021-03-05 15:02:06 --> Could not find the language line "_name"
ERROR - 2021-03-05 15:02:10 --> Could not find the language line "_name"
ERROR - 2021-03-05 15:02:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/models/Quiz_model.php 893
ERROR - 2021-03-05 19:11:11 --> Could not find the language line "_name"
ERROR - 2021-03-05 19:13:12 --> Severity: Warning --> Division by zero /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/views/dashboard.php 237
ERROR - 2021-03-05 19:13:13 --> Severity: Warning --> Division by zero /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/views/dashboard.php 237
ERROR - 2021-03-05 19:14:14 --> Could not find the language line "_name"
ERROR - 2021-03-05 19:14:19 --> Could not find the language line "_name"
ERROR - 2021-03-05 19:14:34 --> Could not find the language line "_name"
ERROR - 2021-03-05 19:14:40 --> Could not find the language line "_name"
ERROR - 2021-03-05 19:14:46 --> Could not find the language line "_name"
ERROR - 2021-03-05 19:15:09 --> Could not find the language line "_name"
ERROR - 2021-03-05 19:15:23 --> Could not find the language line "_name"
ERROR - 2021-03-05 19:15:44 --> Could not find the language line "_name"
ERROR - 2021-03-05 19:15:51 --> Could not find the language line "_name"
ERROR - 2021-03-05 19:16:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/vol13_1/epizy.com/epiz_27851751/target40.cf/htdocs/application/models/Quiz_model.php 893
