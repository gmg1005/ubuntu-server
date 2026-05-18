<?php

$conn = new mysqli(
"localhost",
"webtest",
"1234",
"nosecure"
);

$id = $_GET['id'];

$sql = "SELECT * FROM board WHERE id=$id";

$result = $conn->query($sql);

$row = $result->fetch_assoc();

?>

<h2><?php echo $row['title']; ?></h2>

<hr>

<?php echo $row['content']; ?>

<hr>

<button onclick="history.back()">
뒤로가기
</button>
