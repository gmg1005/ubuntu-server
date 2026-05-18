<?php

$conn = new mysqli("localhost", "webtest", "1234", "nosecure");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username, password)
VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "회원가입 완료";
} else {
    echo "회원가입 실패";
}

?>
