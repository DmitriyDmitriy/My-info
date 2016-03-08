<?php
	function connect()
	{
		$host = "localhost"; 
		$user = "root";
		$pass = "02051988";
		$dbname = "pavust";
		$link = mysql_connect($host, $user, $pass);
		$err = mysql_errno(); 
		if ($err)
		{
			echo $err;
		}
		mysql_select_db($dbname) or die ('Cannot connect to database');
		mysql_query('set names "utf8"');
	}
	connect();

	$c2 = "create table Login
			(
			id integer not null auto_increment,
			login varchar(30) not null,
			pass varchar(10) not null,
			name varchar(30) not null,
			fname varchar(32) not null,
			email varchar(40) not null,
			date varchar(10) not null,
			tel varchar(15) not null,
			primary key(id)
			) default charset=utf8";
	


	mysql_query($c2);
	$err = mysql_errno();
	if($err)
		echo $err;
?>