<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.min.css">
	<title>Заявка отправлена</title>
</head>

<body>
<main>

<div class="message-send">

<?php 

if(isset($_POST['submit'])){

	$to = "aanher@gmail.com"; // Здесь нужно написать e-mail, куда будут приходить письма
    $from = "no-reply@autotests.cloud"; // Здесь нужно написать e-mail, от кого будут приходить письма

	$first_name = $_POST['first_name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$subject = "Заявка с сайта Autotests.Cloud";//Фиксированная тема письма
	
/* Проверка правильного написания e-mail адреса */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("<br /> Е-mail адрес не существует");
}
	
/* Переменная, которая будет отправлена на почту со значениями, вводимых в поля */
$mail_to_myemail = "$first_name оставил заявку
E-mail: $email 
Текст сообщения: $message";	
	
$headers = "From: $from \r\n";
	
/* Отправка сообщения, с помощью функции mail() */
    mail($to, $subject, $mail_to_myemail, $headers . 'Content-type: text/plain; charset=utf-8');
    echo "<p>Заявка отправлена.</p><p>" . $first_name . ", мы скоро свяжемся с тобой</p>";
}
?>

</div>

<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="http://autotests.cloud");}
window.setTimeout("changeurl();",2000);
</script>
</body>

</html>