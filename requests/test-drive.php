<?php
$title = $_POST['Title'];
$lastname = $_POST['LastName'];
$firstname = $_POST['FirstName'];
$modelname = $_POST['selectedVehicle'];
$phone = $_POST['Phone'];
$mail = $_POST['Email'];
$gender = 'в';
if($title =='Пані'){
    $gender = 'ла';
}
$from = "nissan-sumy@1gb.ua";
$to  = "test-drive@nissan-sumy.com.ua" ;
$subj = "Замовлення на тест-драйв";

$what = " 
<!DOCTYPE html>
<html>
<body>
<h2>Замовлення на тест-драйв</h2>

<p><a href='http://nissan-sumy.com.ua'><img alt='' src='http://nissan-sumy.com.ua/images/logo.png' style='float:left; height:73px; width:60px' /></a><strong>&nbsp;&nbsp; </strong>$title<strong> $lastname $firstname </strong>оформи$gender заявку на тест драйв в нашому салоні</p>

<p><strong>&nbsp;&nbsp; Марка авто:&nbsp; </strong>Nissan $modelname</p>

<p>&nbsp;</p>

<hr />
<p><strong>Данні для зворотнього звязку:</strong></p>

<p><strong>телефон:</strong> $phone</p>

<p><strong>e-mail:</strong> $mail</p>

</body>
</html>";
    mail($to, $subj, $what,
        "From: $from
Reply-To: $from
Content-Type: text/html; charset=utf-8
Content-Transfer-Encoding: 8bit"
    );

?>