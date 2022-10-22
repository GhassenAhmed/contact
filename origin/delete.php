<?php
if(!array_key_exists('id',$_GET) or !ctype_digit($_GET['id'])){
    header('location:index.php');
    exit();
}
include 'db_connect.php';
$query=$pdo->prepare(' DELETE FROM ghassen_contact WHERE id= :ghassen_id');
$query->execute([
'ghassen_id' => $_GET['id']

]);
header('location:index.php');
exit();


