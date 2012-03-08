<?php
define('ROOT', '', true);
define('PAGES', ROOT . 'pages/', true);
define('LIB', ROOT . 'lib/', true);
define('SMARTY', ROOT . 'smarty/', true);

define('URI', '/active', true);
define('SCRIPTS', 'scripts/', true);
define('EXERCISER', 'http://localhost/exerciser/', true);
define('NOT_FOUND', 'not_found.html', true);

define('HOST', 'localhost', true);
define('DATABASE', 'memsb-active_zxq_active', true);
define('USERNAME', '677637_user', true);
define('PASSWORD', '677637_password', true);

$pages = array(
		'test' => 'Test_page',
		'homepage' => 'Home_page',
		'index' => 'Home_page',
		'' => 'Home_page',
		'activities' => 'Activities_page',
		'links' => 'Links_page',
		'contact' => 'Contact_page',
		'about' => 'About_page',
		'login' => 'Login_page',
		'logout' => 'Logout_page',
		'register' => 'Register_page',
		'recovery' => 'Recovery_page',
		'workouts' => 'Workouts_page',
		'workout' => 'Workout_page',
		'delete_workout' => 'Workout_Delete_page',
		'profile' => 'Profile_page',
		'profile_email' => 'Profile_Email_page',
		'profile_password' => 'Profile_Password_page',
		'delete_profile' => 'Profile_Delete_page',
		'users' => 'Users_page',
		'calendar' => 'Calendar_page',
		'graph' => 'Graph_page'
		);

?>
