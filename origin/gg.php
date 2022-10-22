<?php
include 'utilities.php';
    $name='';
    $adresse='';
    $password='';
    try{
        $pdo=new PDO('mysql:host=localhost;dbname=contact','root','');
        echo 'connexion etabli';
    }catch(PDOException $e){
        die('Erreur : '.$e->getMessage());
    }
    $sql = "INSERT INTO ghassen_contact (name,adresse,password) VALUES (?, ?,?) ";
    $query=$pdo->prepare($sql);
    $verif=$query->execute([$name,$adresse,$password]);
    header('location:index.php');
   

    if($verif){
        echo 'insertion verifier!';
    }else{
        echo' echec';
    }
    var_dump($_POST);

    if(!empty($_POST)){
        $name= checkData($_POST['name']);
        $adresse=checkData($_POST['adresse']);
        $password=checkData($_POST['password']);
    

    if(empty($name)){
        $erreurs['name']="name is required";
    }

    if(empty($adresse)){
        $erreurs['adresse']="adresse is required";
    }

    if(empty($password)){
        $erreurs['$password']="password is required";
    }
    if(empty($erreurs)){
        $sql = "INSERT INTO ghassen_contact (name,adresse,password) VALUES (?, ?,?) ";
       $query=$pdo->prepare($sql);
       $query->execute([$name,$adresse,$password]);
       header('location:index.php');
       exit();
            }
    
        }