<?php

$conn = new mysqli("localhost", "webtest", "1234", "secure");

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM users
			WHERE username=?");

$stmt->bind_param("s", $username);

$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {

	$row = $result->fetch_assoc();

	if (password_verify($password, $row['password'])) {

		header("Location: board.php");
		exit();
	} else {
    		echo '로그인 실패 <br><br>';

		echo '<button onclick="history.back()">
		뒤로가기
		</button>';
	}

} else {
	echo '로그인 실패 <br><br>';

	echo '<button onclick="history.back()">
	뒤로가기
	</button>';
}

?>
