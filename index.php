<?php 

require "require.php";

echo DIR_CORE."<br>";
echo DIR_ROOT."<br>";
module("conexion");
library("path");
$con = CONEXION::CONNECT();
/*import("conexion");
import("web");

WEB::GETMETA();




require CONF::THEMEPATH()."/index.php";*/


?>