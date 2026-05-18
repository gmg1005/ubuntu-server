<?php

$conn = new mysqli(
"localhost",
"webtest",
"1234",
"secure"
);

$id = $_GET['id'];

$sql = "SELECT * FROM board WHERE id=$id";

$result = $conn->query($sql);

$row = $result->fetch_assoc();

?>

<h2><?php echo htmlspecialchars($row['title'], ENT_QUOTES, 'UTF-8'); ?>

<hr>

<?php echo htmlspecialchars($row['content'], ENT_QUOTES, 'UTF-8'); ?>

<hr>

<button onclick="history.back()">
뒤로가기
</button>
