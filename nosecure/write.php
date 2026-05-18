<?php

$conn = new mysqli("localhost","webtest","1234","nosecure");

$title = $_POST['title'];
$content = $_POST['content'];

$sql = "INSERT INTO board(title, content)
VALUES('$title','$content')";

if($conn->query($sql) === TRUE){
    echo '게시글 등록 완료 <br><br>';
    echo '<button onclick="location.href=\'board.php\'">
    뒤로가기
    </button>';
}else{
    echo "게시글 등록 실패";
}

?>
