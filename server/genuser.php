<?php

if (!isset($_GET["username"]) || !isset($_GET["password"])) {
    echo "需要用户名和密码";
    return;
}

$username = $_GET["username"];
$password = $_GET["password"];

echo "[".$username."]---[".md5($username."-".$password)."]";