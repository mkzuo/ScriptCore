<?php

require "library/path.php";
require "core_vars.php";
require "core_conf.php";

function module($module){
	require_once(DIR_CORE."/".$module.".php");
}
function library($library){
	require_once(DIR_LIBRARY."/".$library.".php");
}

?>