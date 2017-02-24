



<html>
<style type="text/css">

    div.login   {
        font-family: "Palatino Linotype";
        font-size: 13pt;
        border: 1px solid #BC8F8F;
        padding: 20px;
        margin-left:450px; margin-right:450px;
        border-radius: 10px;
        box-shadow: 2px 2px 6px #BC8F8F;
        background-color: #FFFFFF;}
    button {
        margin-left: 140px;
        width: 150px;
        height: 30px;
        border-radius: 3px;

    }

    .input1{
        font-family: "Palatino Linotype";
        font-size: 13pt;
        width: 240px;
        height: 25px;
        border-radius: 0px;
        margin-left: 50px;
    }
    .input2{
 margin-top: 10px;
        font-family: "Palatino Linotype";
        font-size: 13pt;
        width: 240px;
        height: 25px;
        border-radius: 0px;
        margin-left: 20px;
    }
</style>

<body>
<?php

session_start();
if(isset($_SESSION['admin'])){
    header("Location: 2.php");
    exit;
}

$userDb = array
(
'userName' => 'artur',
'userPass' => 'd8578edf8458ce06fbc5bb76a58c5ca4',
);

$request = $_POST;
if (!empty($request)) {
    $name = !empty($request['name']) ? $request['name'] : '';
    $pass = !empty($request['pass']) ? $request['pass'] : '';
    //var_dump($name, $pass);

    if ($userDb['userName'] === $name && $userDb['userPass'] === md5($pass)) {
        $_SESSION['admin'] = $name;
        header("Location: 2.php");
        exit;
    } else echo '<table width="1350"><td align="center"><p>Логін або пароль невірні!</p></td></table>';
}
?>


<form method="post" action="">
    <div class="login">
        Введіть імя    <input class="input1" type="text" name="name"><br>
        Введіть пароль <input class="input2" type="password" name="pass"><br><br>
        <button class="button" type="submit">Зареєструватись</button>
    </div>
</form>
</body>

</html>