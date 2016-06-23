<?php

function normalpath($path){
	$newpath = preg_replace('/\\\+|\/{2,}/', '/', $path);
	if (substr($newpath, strlen($newpath) - 1) == '/')
		$newpath = substr($newpath, 0, strlen($newpath) - 1);
	return $newpath;
}

?>