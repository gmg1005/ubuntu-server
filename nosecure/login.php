<?php

$conn = new mysqli("localhost", "webtest", "1234", "nosecure");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users
WHERE username='$username'
AND password='$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header("Location: board.php");
    exit();
} else {
    echo '로그인 실패 <br><br>';
    echo "<button onclick='history.back()'>
    뒤로가기
    </button>";
}

?>
