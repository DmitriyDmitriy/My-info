<?php
function show_header($title, $bgcolor){
	echo '<html><head><title>'.$title.'</title><link rel="stylesheet" type="text/css" href="Style/css.css"/></head> <body bgcolor="'.$bgcolor.'">';
	echo'<div class = "header">'.'<h1>'.$title.'</h1>'.'</div>';
}

$host='localhost';
$user='root';
$pass='02051988';
$dbname='pavust';

function Connect()
{
	global $host, $user, $pass, $dbname;
	$link=mysql_connect($host, $user, $pass) or die("Неудалось подключится к базе");
	mysql_select_db($dbname) or die('Неудалось подключится к базе');
	mysql_query("set names 'utf8'");
}
?>