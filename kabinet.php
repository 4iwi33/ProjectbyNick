<?php
if ($_COOKIE['user'] == 'Yes')  // если куки установлен 
    setcookie('user', 'Yes', time() - 3600, '/'); // то от time отнимаем -3600
else  
    setcookie('user', 'Yes', time() + 3600, '/'); // то устанавливаем time если куки не установлен

header("Location: /ProjectbyNick/index.php");
// "/" куки работает на всех страницах
//  ".projectbynick.herokuapp.com" название моего домена
