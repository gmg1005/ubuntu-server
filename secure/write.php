<?php

$conn = new mysqli("localhost","webtest","1234","secure");

$title = $_POST['title'];
$content = $_POST['content'];
$fileName = $_FILES['userfile']['name'];
$ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
$allow = ['jpg','png','pdf'];
if(!in_array($ext, $allow)) {
    die("허용되지 않은 파일 형식입니다.");
}
$tmpName = $_FILES['userfile']['tmp_name'];
move_uploaded_file(
    $tmpName,
    "uploads/".$fileName
);

$sql = "INSERT INTO board(title, content, filename)
VALUES('$title','$content','$fileName')";

if($conn->query($sql) === TRUE){
    echo '게시글 등록 완료 <br><br>';
    echo '<button onclick="location.href=\'board.php\'">
    게시판으로 이동
    </button>';
}else{
    echo "게시글 등록 실패";
}

?>
