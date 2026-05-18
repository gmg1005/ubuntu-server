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

<h2>게시판</h2>

<hr>

<?php

while($row = $result->fetch_assoc()) {

    echo "<a href='view.php?id=".$row['id']."'>";

    echo $row['title'];

    echo "</a><br><br>";
}

?>

<hr>

<button onclick="location.href='write.html'">
글쓰기
</button>
<br><br>

<button onclick="location.href='index.html'">
뒤로가기
</button>
