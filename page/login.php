<?php
	include_once ('function.php');
	Connect();
	session_start();

	$_SESSION['login']=$name;
	
	if(isset($_POST['login']))
	{
	$name=mysql_real_escape_string($_POST['name']);
	$pass=mysql_real_escape_string($_POST['pass']);

	if(empty($name) || empty($pass))
		echo"Ok";
	else
	{
		$sql="SELECT count(*) FROM Login WHERE (login='$name' AND pass='$pass')";
		$res=mysql_query($sql);
		$row=mysql_fetch_array($res);

		if($row[0] > 0)
			echo("<script>location.href='http://localhost/Rez/index.php?id=1'</script>"); 
		else
			echo"Логин не зарегистрирован. Пройдите регистрацию";
	}
}
?>