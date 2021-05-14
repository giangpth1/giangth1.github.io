<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlbh";

$conn = mysqli_connect($servername, $username, $password, $dbname);

function register($register_info) {
    global $conn;
    $sql_account = "INSERT INTO account (username, password) VALUE('" . $register_info['username'] . "', '" . md5($register_info['password']) . "')";
    $sql_user = "INSERT INTO user (name, email, phone) VALUE('" . $register_info['name'] . "', '" . $register_info['email'] . "', '" . $register_info['phone'] . "')";
    if ($conn->query($sql_account) && $conn->query($sql_user))
        return true;
    return false;
}