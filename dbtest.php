<?php

$conn = new mysqli("localhost", "webtest", "1234", "login");

if ($conn->connect_error) {
    die(" 연결 실패 ");
}

echo " 연결 성공 ";

?>
