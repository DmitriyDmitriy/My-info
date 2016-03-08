<?php
	if(!isset($_SESSION))
        {
            session_start();
        }
    if (isset($_SESSION['login'])) 
        {
			echo"<a class='amenu' href='index.php?id=1'>Главная</a>";
			echo"<a class='amenu' href='index.php?id=2'>Контакты</a>";
			echo"<a class='amenu' href='index.php?id=3'>Личный кабинет</a>";
        }
    else
        {
			echo"<a class='amenu' href='index.php?id=1'>Главная</a>";
			echo"<a class='amenu' href='index.php?id=2'>Контакты</a>";
			echo"<a class='amenu' href='index.php?id=4'>Регистрация</a>";
        }
?>