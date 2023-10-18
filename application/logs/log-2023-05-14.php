<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-05-14 15:35:12 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\testify\application\views\login.php 191
ERROR - 2023-05-14 15:35:12 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\testify\application\views\login.php 204
ERROR - 2023-05-14 15:35:22 --> Severity: Warning --> Division by zero C:\xampp\htdocs\testify\application\views\dashboard.php 276
ERROR - 2023-05-14 15:35:30 --> Could not find the language line "_name"
ERROR - 2023-05-14 16:00:09 --> Could not find the language line "_name"
ERROR - 2023-05-14 16:04:11 --> Severity: Warning --> Division by zero C:\xampp\htdocs\testify\application\views\dashboard.php 276
ERROR - 2023-05-14 16:14:30 --> Query error: Undeclared variable: notification - Invalid query: 
		select A.*, B.full_name as requested_by_name, B.skype_id as requested_by_skype
		, C.full_name as appointed_to_name, C.skype_id as appointed_to_skype
		 from appointment_request as A
		JOIN savsoft_users as B on B.uid=A.request_by
		JOIN savsoft_users as C on C.uid=A.to_id
		 order by A.appointment_timing DESC
		limit notification,30
		
ERROR - 2023-05-14 16:14:30 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\testify\application\models\Appointment_model.php 27
ERROR - 2023-05-14 16:14:44 --> Query error: Undeclared variable: notification - Invalid query: 
		select A.*, B.full_name as requested_by_name, B.skype_id as requested_by_skype
		, C.full_name as appointed_to_name, C.skype_id as appointed_to_skype
		 from appointment_request as A
		JOIN savsoft_users as B on B.uid=A.request_by
		JOIN savsoft_users as C on C.uid=A.to_id
		 order by A.appointment_timing DESC
		limit notification,30
		
ERROR - 2023-05-14 16:14:44 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\testify\application\models\Appointment_model.php 27
ERROR - 2023-05-14 16:14:53 --> Query error: Undeclared variable: notification - Invalid query: 
		select A.*, B.full_name as requested_by_name, B.skype_id as requested_by_skype
		, C.full_name as appointed_to_name, C.skype_id as appointed_to_skype
		 from appointment_request as A
		JOIN savsoft_users as B on B.uid=A.request_by
		JOIN savsoft_users as C on C.uid=A.to_id
		 order by A.appointment_timing DESC
		limit notification,30
		
ERROR - 2023-05-14 16:14:53 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\testify\application\models\Appointment_model.php 27
ERROR - 2023-05-14 16:15:49 --> Could not find the language line "_name"
ERROR - 2023-05-14 16:16:23 --> Query error: Undeclared variable: appointment - Invalid query: 
		select A.*, B.full_name as requested_by_name, B.skype_id as requested_by_skype
		, C.full_name as appointed_to_name, C.skype_id as appointed_to_skype
		 from appointment_request as A
		JOIN savsoft_users as B on B.uid=A.request_by
		JOIN savsoft_users as C on C.uid=A.to_id
		 order by A.appointment_timing DESC
		limit appointment,30
		
ERROR - 2023-05-14 16:16:23 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\testify\application\models\Appointment_model.php 27
ERROR - 2023-05-14 16:39:49 --> Could not find the language line "_name"
ERROR - 2023-05-14 16:40:15 --> Query error: Undeclared variable: notification - Invalid query: 
		select A.*, B.full_name as requested_by_name, B.skype_id as requested_by_skype
		, C.full_name as appointed_to_name, C.skype_id as appointed_to_skype
		 from appointment_request as A
		JOIN savsoft_users as B on B.uid=A.request_by
		JOIN savsoft_users as C on C.uid=A.to_id
		 order by A.appointment_timing DESC
		limit notification,30
		
ERROR - 2023-05-14 16:40:15 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\testify\application\models\Appointment_model.php 27
ERROR - 2023-05-14 16:42:27 --> Could not find the language line "_name"
ERROR - 2023-05-14 16:42:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\testify\application\views\login.php 191
ERROR - 2023-05-14 16:42:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\testify\application\views\login.php 204
ERROR - 2023-05-14 16:42:36 --> Severity: Warning --> Division by zero C:\xampp\htdocs\testify\application\views\dashboard.php 276
ERROR - 2023-05-14 16:43:37 --> Could not find the language line "_name"
ERROR - 2023-05-14 16:43:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\testify\application\views\view_result.php 793
ERROR - 2023-05-14 16:43:39 --> Could not find the language line "first_name"
ERROR - 2023-05-14 16:43:48 --> Could not find the language line "_name"
ERROR - 2023-05-14 16:43:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\testify\application\views\view_result.php 793
ERROR - 2023-05-14 16:43:50 --> Could not find the language line "first_name"
ERROR - 2023-05-14 16:43:53 --> Could not find the language line "_name"
ERROR - 2023-05-14 16:43:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\testify\application\views\view_result.php 793
ERROR - 2023-05-14 16:43:55 --> Could not find the language line "first_name"
ERROR - 2023-05-14 16:43:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') order by FIELD(savsoft_options.qid,)' at line 1 - Invalid query: select * from savsoft_options where qid in () order by FIELD(savsoft_options.qid,)
ERROR - 2023-05-14 16:43:57 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\testify\application\models\Quiz_model.php 317
ERROR - 2023-05-14 16:44:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') order by FIELD(savsoft_options.qid,)' at line 1 - Invalid query: select * from savsoft_options where qid in () order by FIELD(savsoft_options.qid,)
ERROR - 2023-05-14 16:44:16 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\testify\application\models\Quiz_model.php 317
ERROR - 2023-05-14 16:44:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\testify\application\views\view_result.php 793
ERROR - 2023-05-14 16:44:18 --> Could not find the language line "first_name"
ERROR - 2023-05-14 16:44:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\testify\application\views\view_result.php 793
ERROR - 2023-05-14 16:44:21 --> Could not find the language line "first_name"
ERROR - 2023-05-14 16:44:23 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\testify\application\views\login.php 191
ERROR - 2023-05-14 16:44:23 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\testify\application\views\login.php 204
ERROR - 2023-05-14 16:44:29 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\testify\application\views\login.php 191
ERROR - 2023-05-14 16:44:29 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\testify\application\views\login.php 204
ERROR - 2023-05-14 16:44:34 --> Severity: Warning --> Division by zero C:\xampp\htdocs\testify\application\views\dashboard.php 276
ERROR - 2023-05-14 16:44:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\testify\application\views\login.php 191
ERROR - 2023-05-14 16:44:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\testify\application\views\login.php 204
ERROR - 2023-05-14 16:44:44 --> Severity: Warning --> Division by zero C:\xampp\htdocs\testify\application\views\dashboard.php 276
ERROR - 2023-05-14 16:52:01 --> Severity: error --> Exception: Too few arguments to function User2::view_user(), 0 passed in C:\xampp\htdocs\testify\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\testify\application\controllers\User2.php 33
ERROR - 2023-05-14 16:54:18 --> Could not find the language line "_name"
ERROR - 2023-05-14 16:55:26 --> Could not find the language line "_name"
ERROR - 2023-05-14 16:55:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\testify\application\views\view_result.php 793
ERROR - 2023-05-14 16:55:28 --> Could not find the language line "first_name"
ERROR - 2023-05-14 16:55:53 --> Could not find the language line "_name"
ERROR - 2023-05-14 16:56:00 --> Could not find the language line "_name"
ERROR - 2023-05-14 16:56:03 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\testify\application\models\Quiz_model.php 893
ERROR - 2023-05-14 16:56:14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\testify\application\models\Quiz_model.php 893
ERROR - 2023-05-14 17:03:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\testify\application\views\view_result.php 793
ERROR - 2023-05-14 17:03:00 --> Could not find the language line "first_name"
ERROR - 2023-05-14 17:04:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\testify\application\views\view_result.php 793
ERROR - 2023-05-14 17:04:13 --> Could not find the language line "first_name"
ERROR - 2023-05-14 17:05:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\testify\application\views\view_result.php 794
ERROR - 2023-05-14 17:05:17 --> Could not find the language line "first_name"
ERROR - 2023-05-14 17:05:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\testify\application\views\view_result.php 794
ERROR - 2023-05-14 17:05:19 --> Could not find the language line "first_name"
ERROR - 2023-05-14 17:05:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\testify\application\views\view_result.php 794
ERROR - 2023-05-14 17:05:44 --> Could not find the language line "first_name"
ERROR - 2023-05-14 17:06:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\testify\application\views\view_result.php 794
ERROR - 2023-05-14 17:06:35 --> Could not find the language line "first_name"
ERROR - 2023-05-14 17:07:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\testify\application\views\view_result.php 794
ERROR - 2023-05-14 17:07:38 --> Could not find the language line "first_name"
ERROR - 2023-05-14 17:13:17 --> Severity: error --> Exception: syntax error, unexpected '<' C:\xampp\htdocs\testify\application\views\view_result.php 1451
ERROR - 2023-05-14 17:13:21 --> Severity: error --> Exception: syntax error, unexpected '<' C:\xampp\htdocs\testify\application\views\view_result.php 1451
ERROR - 2023-05-14 17:13:22 --> Severity: error --> Exception: syntax error, unexpected '<' C:\xampp\htdocs\testify\application\views\view_result.php 1451
ERROR - 2023-05-14 17:13:28 --> Could not find the language line "_name"
ERROR - 2023-05-14 17:13:30 --> Severity: error --> Exception: syntax error, unexpected '<' C:\xampp\htdocs\testify\application\views\view_result.php 1451
ERROR - 2023-05-14 17:13:37 --> Severity: error --> Exception: syntax error, unexpected '<' C:\xampp\htdocs\testify\application\views\view_result.php 1451
ERROR - 2023-05-14 17:14:12 --> Severity: error --> Exception: syntax error, unexpected '>' C:\xampp\htdocs\testify\application\views\view_result.php 1486
ERROR - 2023-05-14 17:14:13 --> Could not find the language line "_name"
ERROR - 2023-05-14 17:14:15 --> Severity: error --> Exception: syntax error, unexpected '>' C:\xampp\htdocs\testify\application\views\view_result.php 1486
ERROR - 2023-05-14 17:15:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\testify\application\views\view_result.php 794
ERROR - 2023-05-14 17:15:08 --> Could not find the language line "first_name"
ERROR - 2023-05-14 17:19:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\testify\application\views\view_result.php 794
ERROR - 2023-05-14 17:19:53 --> Could not find the language line "first_name"
ERROR - 2023-05-14 17:22:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\testify\application\views\view_result.php 794
ERROR - 2023-05-14 17:22:58 --> Could not find the language line "first_name"
ERROR - 2023-05-14 17:23:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\testify\application\views\view_result.php 794
ERROR - 2023-05-14 17:23:29 --> Could not find the language line "first_name"
ERROR - 2023-05-14 17:24:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\testify\application\views\view_result.php 794
ERROR - 2023-05-14 17:24:53 --> Could not find the language line "first_name"
ERROR - 2023-05-14 17:26:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\testify\application\views\view_result.php 794
ERROR - 2023-05-14 17:26:21 --> Could not find the language line "first_name"
ERROR - 2023-05-14 17:28:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\testify\application\views\view_result.php 794
ERROR - 2023-05-14 17:28:58 --> Could not find the language line "first_name"
ERROR - 2023-05-14 17:33:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\testify\application\views\view_result.php 794
ERROR - 2023-05-14 17:33:45 --> Could not find the language line "first_name"
ERROR - 2023-05-14 17:36:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\testify\application\views\view_result.php 794
ERROR - 2023-05-14 17:36:44 --> Could not find the language line "first_name"
ERROR - 2023-05-14 17:37:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\testify\application\views\view_result.php 794
ERROR - 2023-05-14 17:37:42 --> Could not find the language line "first_name"
ERROR - 2023-05-14 17:42:49 --> Severity: error --> Exception: syntax error, unexpected end of file C:\xampp\htdocs\testify\application\views\view_result.php 1824
ERROR - 2023-05-14 17:42:50 --> Severity: error --> Exception: syntax error, unexpected end of file C:\xampp\htdocs\testify\application\views\view_result.php 1824
ERROR - 2023-05-14 17:42:52 --> Could not find the language line "_name"
ERROR - 2023-05-14 17:42:54 --> Severity: error --> Exception: syntax error, unexpected end of file C:\xampp\htdocs\testify\application\views\view_result.php 1824
ERROR - 2023-05-14 17:43:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\testify\application\views\view_result.php 794
ERROR - 2023-05-14 17:43:30 --> Could not find the language line "first_name"
ERROR - 2023-05-14 17:44:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\testify\application\views\view_result.php 794
ERROR - 2023-05-14 17:44:14 --> Could not find the language line "first_name"
ERROR - 2023-05-14 17:44:19 --> Could not find the language line "_name"
ERROR - 2023-05-14 17:44:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\testify\application\views\view_result.php 794
ERROR - 2023-05-14 17:44:20 --> Could not find the language line "first_name"
ERROR - 2023-05-14 17:47:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\testify\application\views\view_result.php 794
ERROR - 2023-05-14 17:47:20 --> Could not find the language line "first_name"
ERROR - 2023-05-14 17:48:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\testify\application\views\view_result.php 794
ERROR - 2023-05-14 17:48:31 --> Could not find the language line "first_name"
