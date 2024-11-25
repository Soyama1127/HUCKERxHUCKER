<?php
session_start();
$pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
$pr_content=$_POST['pr_content'];
$user_id=$_SESSION['user_id'];
$game_id=$_SESSION['game_id'];
if (
    is_uploaded_file($_FILES['movie']['tmp_name']) 
){
    $image_path = './../manager/pr_movie/' . basename($_FILES['movie']['name']);

$pr_movie = basename($_FILES['movie']['name']);

if (
    move_uploaded_file($_FILES['movie']['tmp_name'], $image_path)
){

$sql = $pdo->prepare('insert into userpr (user_id, game_id, pr_content, pr_clip) values (?,?,?,?)');
$sql->execute([$user_id,$game_id,$pr_content,$pr_movie]);
} else {
    echo 'ファイルの移動中にエラーが発生';
}
}else {
    echo 'アップロードできませんでした';
}
header("Location: pr.php");
?>