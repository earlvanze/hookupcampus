<?php
$files = glob("img/bg/*.*");
$rand_index = array_rand($files);
$bg_filename = $this->Html->url("/" . $files[$rand_index]);
?>

<div id="bg_div" style="background-image: url(<?= $bg_filename ?>)"></div>