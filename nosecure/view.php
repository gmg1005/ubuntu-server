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

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>게시글 보기</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="form-container theme-vulnerable">
<h2> <?php echo $row['title']; ?> </h2>
<hr>
<div class="form-group">
<?php echo $row['content']; ?>
<br><br>
<img src="uploads/<?php echo $row['filename']; ?>" width="300">
</div>
<hr>
<button class="submit-btn btn-vulnerable" onclick="history.back()">
뒤로가기
</button>
</div>
</body>
</html>