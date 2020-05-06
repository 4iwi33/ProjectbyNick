<?php
if ($_COOKIE['user'] == 'Yes')  // если куки установлен 
    setcookie('user', 'Yes', time() - 3600, '/'); // то куки -3600
else
    setcookie('user', 'Yes', time() + 3600, '/');
header("Location: /");
// "/" куки работает на всех страницах
//  ".projectbynick.herokuapp.com" название моего домена
