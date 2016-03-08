<?php
    include_once ('page/function.php');
    show_header('My summary', 'lightblue');
    Connect();
?>
<meta charset="UTF-8">
    <div class="layout">
        <div class="col1">
        <?php
            header("Content-type:text/html,charset=utf8");
            include_once('page/menu.php');
        ?>
        </div>
        <div class="col2">
        <?php
            if(isset($_GET['id']))
                {
                    $id=$_GET['id'];
                    if($id==1) include_once('page/chief.php');
                    if($id==2) include_once('page/contacts.php');
                    if($id==3) include_once('page/area.php');
                    if($id==4) include_once('page/reg.php');
                }
        ?>
        </div>
        <div class="col3">
            <?php
                if(!isset($_SESSION))
                {
                    session_start();
                }
                if (isset($_SESSION['login'])) 
                {
                    if (isset($_POST['exit'])) 
                    { 
                    unset($_SESSION['login']); // разрегистрировали переменную
                    session_destroy(); // разрушаем сессию
                    echo("<script>location.href='http://localhost/Rez/index.php?id=3'</script>");
                    echo"Привет гость";
                    }
                    else
                    {
                    echo"<center>Привет".' '.$_SESSION['login']."</center>";
                    }
            ?>
            <center>
                <form method="POST" action="page/ex.php">
                <input type='submit' class="amenu" name ='exit' value='В Ы Й Т И'>
                </form>
            </center>
            <?php
                }
                    else
                {
            ?>
            <form method="POST" action="page/login.php">
                <center>
                    <p><input type="text" name="name" pattern="^[А-Яа-яA-Za-z]+$" required/></p>
                    <p><input type="password" name="pass" pattern="[А-Яа-яA-Za-z0-9]{6,16}" required/></p>
                    <p><input type="submit" class="amenu" name="login" value="В О Й Т И"/></p>
                </center>
            </form>
            <?php
                }
            ?>
        </div>
    </div>
    <div class="footer"><center>Разработал Павуст Дмитрий</center></div>