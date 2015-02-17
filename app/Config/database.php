<?php

if(Configure::read("debug") == 0){
	// live server
	class DATABASE_CONFIG {
		public $default = array(
			"datasource" => "Database/Mysql",
			"persistent" => false,
			"host" => "mysql.hookupcampus.com",
			"login" => "hookup_admin",
			"password" => "CQvbtsm6aZM4h5P",
			"database" => "hookup_campus",
			"prefix" => "",
			//"encoding" => "utf8",
			);
		}
}else{
	// dev server
	class DATABASE_CONFIG {
		public $default = array(
			"datasource" => "Database/Mysql",
			"persistent" => false,
			"host" => "mysql.hookupcampus.com",
			"login" => "hookup_admin",
			"password" => "CQvbtsm6aZM4h5P",
			"database" => "hookup_campus_dev",
			"prefix" => "",
			//"encoding" => "utf8",
			);
		}
}