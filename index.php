<?php

$firstName = $_POST['UserFirstName'];
$lastName = $_POST['UserLastName'];
$login = $_POST['UserLogin'];
$mail = $_POST['UserEmail'];
$pass = $_POST['UserPassword'];


if(isset($_REQUEST['submit'])){
	if($firstName != '' && $lastName != '' && $login != '' && $mail != '' && $pass != ''){
		if (!preg_match('/[A-Za-zА-Яа-яЁё]{2,12}/', $firstName)){
			echo "В имени только буквы от 2х до 12 символов";
		}

		if (!preg_match('/[A-Za-zА-Яа-яЁё]{2,14}/', $lastName)) {
			echo "В фамилии только буквы от 2 до 14 символов";
		}

		if (!preg_match('/^[A-Za-zА-Яа-яЁё0-9]{3,14}/', $login)) {
			echo "В логине от 3 до 14 любых символов";
		}

		if (!preg_match('/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/i', $mail)) {
		echo "Введиет почту в формате sitehere.ru@my.com";
		}

		if (!preg_match('/(?=^.{5,10}$)(|(?=.*\w+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*/', $pass)) 	{
			echo "Пароль от 5 до 10 символов, хотя бы одна в верхнем регистре, один спецсимвол";
		}
	} else {echo "Заполнить все поля";}
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta mane="viewport" content="widht=device-width, initial-scale = 1">
	<title>Практическа 3</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		<form  method="POST">
			<h2>Регистрация</h2>
			<div class="line"></div>
            <label>Имя</label>
			<div  class="input-container ">
                    <img src="img/user.png" alt="user" class="ico">
					<input type="text" name="UserFirstName"  placeholder="FirstName">
			</div>
            
            <label>Фамилия</label>
			<div class="input-container ">
                    <img src="img/user.png" alt="user" class="ico">
					<input type="text" name="UserLastName"  placeholder="LastName">
			</div>
            
            <label>Ваш логин</label>
			<div class="input-container ">
                    <img src="img/user.png" alt="user" class="ico">
					<input type="text" name="UserLogin"  placeholder="myname1">
			</div>
            
            <label>Ваш e-mail</label>
			<div class="input-container ">
                    <img src="img/emails.png" alt="email" class="ico">
					<input type="email" name="UserEmail" placeholder="sitehere.ru@my.com"> 
			</div>
            
            <label>Ваш пароль</label>
			<div class="input-container ">
                    <img src="img/key.png" alt="key" class="ico">
					<input type="password" name="UserPassword" placeholder="12345Aa!">
			</div>
            
            <label>Подвердите ваш пароль</label>
			<div class="input-container ">
                    <img src="img/key.png" alt="key" class="ico">
					<input type="password" name="UserRePassword" placeholder="12345Aa!" ><!-- 
					pattern="(?=^.{5,10}$)(|(?=.*\w+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*" -->
			</div>
			<div class="checkbox-container">
				<input type="checkbox" name="Subscribe" class="checkB" id="SubCheck1">
				<label for="SubCheck1">Подписаться на новости</label>
			</div>
			<div class="checkbox-container">
				<input type="checkbox" name="Subscribe" class="checkB" id="SubCheck2">
				<label for="SubCheck2">Подписаться на акции</label>
			</div>
			<div class="checkbox-container">
				<input type="checkbox" name="Subscribe" class="checkB" id="SubCheck3">
				<label for="SubCheck3">Подписаться на мероприятия</label>
			</div>
			<input type="submit" name="submit" class="button" value="Регистрация">
		</form>
</body>
</html>
