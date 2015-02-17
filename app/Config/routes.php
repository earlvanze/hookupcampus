<?php

Router::connect("/", array("controller" => "pages", "action" => "display", "home"));
Router::connect("/login", array("controller" => "users", "action" => "login"));


Router::connect("/pages/*", array("controller" => "pages", "action" => "display"));

CakePlugin::routes();
require CAKE . "Config" . DS . "routes.php";

?>
