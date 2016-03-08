<?php
	include_once ('function.php');
	Connect();
?>

<?php
if(!isset($_SESSION))
    {
        session_start();
    }
if($_REQUEST)
	{
		$sel = "select * from login";
		$res = mysql_query($sel);

		  while($data = mysql_fetch_array($res))
		  {
					echo"<form action='index.php?id=3' method='POST'>";
			echo"<fieldset class='form'>";
				echo"<fieldset class='info'>";
					echo"<label for='name'>Логин</label>";
					echo"<p class='input'>";
						echo"<input  name='login' id='login' value=".$data['login'].">";
					echo"</p>";
					echo"<label for='password'>Пароль</label>";
					echo"<p class='input'>";
						echo"<input  name='pass' id='password' value=".$data['pass'].">";
					echo"</p>"; 
				echo"</fieldset>";
				echo"<fieldset class='login'>";
					echo"<label for='name'>Имя</label>";
					echo"<p class='input'>";
						echo"<input name='name' id='name' value=".$data['name'].">";
					echo"</p>";
					echo"<label for='surname'>Фамилия</label>";
					echo"<p class='input'>";
						echo"<input name='fname' id='surname' value=".$data['fname'].">";
					echo"</p>";
					echo"<label for='city'>Дата рождения</label>";
					echo"<p class='input'>";
						echo"<input name='date' id='city' placeholder='гггг-мм-дд' pattern='[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])' value=".$data['date_'].">";
						echo"<span class='ok'>&#10003;</span>";
						echo"<span class='nook'>&#10005;</span>";
					echo"</p>";
					echo"<label for='city'>Моб. телефон</label>";
					echo"<p class='input'>";
						echo"<input name='tel' id='city' placeholder='(___)-_______' pattern='([0-9]{3}\)[0-9]{3}-[0-9]{2}-[0-9]{2}' value=".$data['tel'].">";
						echo"<span class='ok'>&#10003;</span>";
						echo"<span class='nook'>&#10005;</span>";
					echo"</p>";
					echo"<label for='email'>Эл. почта</label>";
					echo"<p class='input'>";
						echo"<input type='email' name='email' id='email' pattern='^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$' value=".$data['email'].">";
						echo"<span class='ok'>&#10003;</span>";
						echo"<span class='nook'>&#10005;</span>";
					echo"</p>";
				echo"</fieldset>";
			echo"</fieldset>";
		echo"<input type='submit' name='register' value='Сохранить'/>";
		echo"<input type='submit' name='del' value='Удалить'/>";
echo"</form>";
		  } 
	}
?>

<?php 
	if(isset($_POST['register']))
	{
		$sql="update login set login='$login', pass='$pass', name='$name', fname='$fname', date_='$date', tel='$tel', email='$email'";
		$res=mysql_query($sql);
	}
	if(isset($_POST['del']))
	{
		$sql="delete from login limit 1";
		$res=mysql_query($sql);
	}
?>