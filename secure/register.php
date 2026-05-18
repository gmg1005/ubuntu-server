<?php

$conn = new mysqli("localhost", "webtest", "1234", "secure");

$username = $_POST['username'];
$password = $_POST['password'];

$hash = password_hash($password, PASSWORD_BCRYPT);

$sql = "INSERT INTO users (username, password)
VALUES ('$username', '$hash')";

if ($conn->query($sql) === TRUE) {
    echo "회원가입 완료";
} else {
    echo "회원가입 실패";
}

?>
