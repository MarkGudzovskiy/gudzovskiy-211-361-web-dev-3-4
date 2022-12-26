<?php 
    include 'header.html';
?>
<?php
    $login='lab4';
    $password='qwerty'
?>
<div class="wrap">
        <main class="main_form2">
            <form name="log_in" action="#" enctype="multipart/form-data" method="post" class="center">
                <legend class="form2_legend">Авторизация</legend>
                <input type="text" name="login" placeholder="логин" class="txt_block"><br>
                <input type="password" name="pass" placeholder="пароль" class="txt_block"><br>
                <input type="checkbox" name="remember" value="Запомнить меня" class="checkbox"><label class="form2_label">Запомнить меня</label><br>
                <input type="submit" value="Войти" class="button">

                <? if (isset($_POST['login']) & isset($_POST['pass'])) {if ($_POST['login'] == $login & $_POST['pass'] == $password) echo "<p>Авторизация прошла успешно!</p>";} ?>
            </form>          
        </main>
        <footer>

            <span class="left">Все права защищены &copy; 2022
            <?php echo date('d.m.y в H:i:s'); ?>
            </span>
            <span class="right">
                <span class="contact">+7 (900) 235-75-07</span>
                <span class="contact">mark_gudzovskiy@mail.ru</span>
            </span>
        
        </footer>
    </div>
</body>
</html>