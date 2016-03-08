<?php
	include_once ('function.php');
	Connect();
?>
<form action="index.php?id=4" method="POST">
			<fieldset class="form">
				<fieldset class="info">
					<label for="name">Логин</label>
					<p class="input">
						<input name="login" id="name" pattern="^[А-Яа-яA-Za-z0-9]+$" required value="">
						<span class="ok">&#10003;</span>
						<span class="nook">&#10005;</span>
					</p>
					<label for="password">Пароль</label>
					<p class="input">
						<input type="password" name="pass" id="password" pattern="[А-Яа-яA-Za-z0-9]{6,16}" required value="">
						<span class="ok">&#10003;</span>
						<span class="nook">&#10005;</span>
					</p> 
				</fieldset>
				<fieldset class="login">
					<label for="name">Имя</label>
					<p class="input">
						<input name="name" id="name" pattern="^[А-Яа-я]+$" required value="">
						<span class="ok">&#10003;</span>
						<span class="nook">&#10005;</span>
					</p>
					<label for="surname">Фамилия</label>
					<p class="input">
						<input name="fname" id="surname" pattern="^[А-Яа-я]+$" required value="">
						<span class="ok">&#10003;</span>
						<span class="nook">&#10005;</span>
					</p>
					<label for="city">Дата рождения</label>
					<p class="input">
						<input name="date" id="city" placeholder="гггг-мм-дд" pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])" required value="">
						<span class="ok">&#10003;</span>
						<span class="nook">&#10005;</span>
					</p>
					<label for="city">Моб. телефон</label>
					<p class="input">
						<input name="tel" id="city" placeholder="(___)-_______" pattern="([0-9]{3}\)[0-9]{3}-[0-9]{2}-[0-9]{2}" required value="">
						<span class="ok">&#10003;</span>
						<span class="nook">&#10005;</span>
					</p>
					<label for="email">Эл. почта</label>
					<p class="input">
						<input type="email" name="email" id="email" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required value="">
						<span class="ok">&#10003;</span>
						<span class="nook">&#10005;</span>
					</p>
				</fieldset>
			</fieldset>
		<input type="submit" name="register" value="Зарегистрироваться"/>
</form>
<?php
	if($_REQUEST)
	{
	if(!empty($_POST['login']) && !empty($_POST['pass']) && !empty($_POST['name']) && !empty($_POST['fname']) && !empty($_POST['date']) && !empty($_POST['tel']) && !empty($_POST['email']))
	 {
		  $log= htmlspecialchars($_POST['login']);
		  $pass=htmlspecialchars($_POST['pass']);
		  $name=htmlspecialchars($_POST['name']);
		  $fname=htmlspecialchars($_POST['fname']);
		  $date=htmlspecialchars($_POST['date']);
		  $tel=htmlspecialchars($_POST['tel']);
		  $email=htmlspecialchars($_POST['email']);
		  $query=mysql_query("SELECT * FROM login WHERE name='".$name."'");
		  $numrows=mysql_num_rows($query);
		  if($numrows==0)
   		  {
		  $sql="INSERT INTO login (login, pass, name, fname, email, date_, tel)
				VALUES('".$login."', '".$pass."', '".$name."', '".$fname."', '".$email."', '".$date."', '".$tel."')";
  				$result=mysql_query($sql);
 				if($result)
 					{
						$message = "Успешно";
					} 
				else 	
					{
 						$message = "Нет данных!!!";
  					}
  		   }
		else 
			{
				$message = "Пользователь существует!!!";
   			}
	} 
		else 
			{
				$message = "Все поля обязательны!";
			}
	}
?>

<?php 
	if (!empty($message)) 
		{
			echo "<p class=\"error\">" . "Внимание!!!: ". $message . "</p>";
		}
?>