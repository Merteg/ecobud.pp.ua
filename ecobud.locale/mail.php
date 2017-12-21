<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Send - mail</title>

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Witya
 * Date: 03.07.2016
 * Time: 18:38
 */
$backurl="index.html";
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$adminemail = "andrey8blak@gmail.com";
$headers = "From: ecobud.pp.ua <decor@ecobud.pp.ua>\r\nContent-type: text/plain; charset=UTF-8 \r\n";
/*
$adminemail = "decor@ecobud.pp.ua";*/

$flag = mail("$adminemail", "Сообщение от $name, e-mail = $email, телефон = $phone", "$comment", $headers);

if($flag){
    print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 6000); 
//--></script> 

 
<p>Сообщение отправлено! Подождите, сейчас вы будете перенаправлены на главную страницу...</p>";
    exit;
}
else{
    echo "Error, mail is not send!";
}
?>
</body>
</html>

