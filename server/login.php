<?php

if (!isset($_GET["username"]) || !isset($_GET["password"])) {
    echo "需要用户名和密码";
    return;
}

$username = $_GET["username"];
$password = $_GET["password"];
$tok = "[".$username."]---[".md5($username."-".$password)."]";
$users = file_get_contents(__DIR__."/users.txt");

if (strpos($users, $tok)) {
    echo "ok";
} else {
    echo "notfound";
}
