<?php
// print_r($_POST); // принимаем метод POST
$email = $_POST['email']; // из массива $_POST по ключю email записываем значение
$message = $_POST['message'];
// проверка 

$error = ''; //запсиваем ошибки в переменную
if (trim($email) == '') //если $email равен пустоте  
    $error = 'Enter you email!'; // то выводим это

else if (trim($message) == '') // если $message равен пустоте 
    $error = 'Enter you message!'; // то выводим это

else if (strlen($message) < 10) //если $message меньше 10 символов
    $error = 'The message must be more 10 symbols!'; // то выводим это

if ($error != '') { // если $error не равно пустоте 
    echo $error;    // то вывести $error 
    exit; // дальше ничего не обрабатывается
}

$subject = "=?utf-8?B?" . base64_encode("Testing Message") . "?="; //отправка почты
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";
mail('4iwi33@mail.ru', $subject, $message, $headers);

// переадресация
header("Locatin /about.php");










// mail — Отправляет электронную почтуу
// strlen — Возвращает длину строки
// trim - удаляет пробелы 
