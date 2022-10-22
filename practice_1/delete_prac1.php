<?php
if(!array_key_exists('id',$_GET) or !ctype_digit($_GET['id'])){
    header('location:index_prac1.php');
    exit();
}
include 'db_connect.php';
$query=$pdo->prepare(' DELETE FROM prac_1 WHERE id= :prac_id');
$query->execute([
'prac_id' => $_GET['id']

]);
header('location:index_prac1php');
exit();


