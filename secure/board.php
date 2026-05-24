<?php

$conn = new mysqli(
"localhost",
"webtest",
"1234",
"secure"
);
$sql = "SELECT * FROM board ORDER BY id DESC";
$result = $conn->query($sql);

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container theme-secure">
<h2>게시판</h2>
<hr>

<?php

while($row = $result->fetch_assoc()) {
    echo "<a href='view.php?id=".$row['id']."'>";
    echo htmlspecialchars($row['title'], ENT_QUOTES, 'UTF-8');
    echo "</a><br><br>";
}

?>

<hr>
<button class="submit-btn btn-secure" onclick="location.href='write.html'">
글쓰기
</button>
<br><br>
<button class="submit-btn btn-secure" onclick="location.href='index.html'">
뒤로가기
</button>
</div>
</body>
</html>