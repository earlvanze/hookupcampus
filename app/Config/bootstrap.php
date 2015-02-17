<?php
Cache::config("default", array("engine" => "File"));

Configure::write("Dispatcher.filters", array(
	"AssetDispatcher",
	"CacheDispatcher"
));

App::uses("CakeLog", "Log");

CakePlugin::load("LessCompiler");
CakePlugin::load("BoostCake");
CakePlugin::load("DebugKit");


CakeLog::config("debug", array(
	"engine" => "File",
	"types" => array("notice", "info", "debug"),
	"file" => "debug",
));
CakeLog::config("error", array(
	"engine" => "File",
	"types" => array("warning", "error", "critical", "alert", "emergency"),
	"file" => "error",
));
