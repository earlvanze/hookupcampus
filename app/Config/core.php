<?php

Configure::write("debug", 2);

Configure::write("Error", array(
	"handler" => "ErrorHandler::handleError",
	"level" => E_ALL & ~E_DEPRECATED,
	"trace" => true
));

Configure::write("Exception", array(
	"handler" => "ErrorHandler::handleException",
	"renderer" => "ExceptionRenderer",
	"log" => true
));

Configure::write("App.encoding", "UTF-8");


Configure::write("Session", array(
	"defaults" => "php"
));

Configure::write("Security.salt", "zGq8genNtwnFBEUtnCRZdcPLbZYDnuMXbd6rsueW1CBCiv7F9YEmbu7mt50RANPM0Wesqtps625pyd5HbL5mfdKIjLAUxqGymV1NprgwtmW2z2KLNQ823SMmCngbOYKb");

Configure::write("Security.cipherSeed", "00212303348909558458138687861761883024458259215050874743430607896298634469490996074558892963642361135572521610228773653859124351");

Configure::write("Acl.classname", "DbAcl");
Configure::write("Acl.database", "default");

$engine = "File";

$duration = "+999 days";
if (Configure::read("debug") > 0) {
	$duration = "+10 seconds";
}

$prefix = "myapp_";

Cache::config("_cake_core_", array(
	"engine" => $engine,
	"prefix" => $prefix . "cake_core_",
	"path" => CACHE . "persistent" . DS,
	"serialize" => ($engine === "File"),
	"duration" => $duration
));

Cache::config("_cake_model_", array(
	"engine" => $engine,
	"prefix" => $prefix . "cake_model_",
	"path" => CACHE . "models" . DS,
	"serialize" => ($engine === "File"),
	"duration" => $duration
));