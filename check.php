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

// mail — Отправляет электронную почту
// strlen — Возвращает длину строки
// trim - удаляет пробелы 
