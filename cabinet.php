<?php
setcookie("user", "Yes", time() +3600, "/");
header("Location: /");
// "/" куки работает на всех страницах
//  ".projectbynick.herokuapp.com" название моего домена