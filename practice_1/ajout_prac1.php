<!DOCTYPE html>
<html lang="en"
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Ajout contact</title>
</head>
<body>
    <?php
    include 'db_connect.php';
   if(!empty($_POST)){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $moyenne=$_POST['moyenne'];
    $sql="INSERT INTO (nom,prenom,moyenne) VALUES(?,?,?)";
    $query=$pdo->prepare($sql);
    $query->execute([$nom,$prenom,$moyenne]);
    header('location:index_prac1.php');
    exit;
   }
  

    ?>
    <h1 style="text-align:center; color:cyan;">Ajout Etudiant</h1>
        <div class="formulaire" style="margin: left 500px;text-align:center; padding:99px 0px 28px 337px;margin-right:313px;">
        <a href="index_prac1.php" class="btn btn-info float-end" style="margin-right: -235px; font-size:50px;"><i class="bi bi-house-door-fill"></i></a>
            <form action="ajt_etudiant" methode="post">
            <div class="mb-3">
                <label  class="form-label">First Name</label>
                <input type="text" class="form-control"  name="nom">
                <div id="emailHelp" class="form-text">Please enter your first name.</div>
            </div>
            <div class="mb-3">
                <label  class="form-label">Last Name</label>
                <input type="text" class="form-control" name="prenom">
                <div id="emailHelp" class="form-text">Please enter your last name.</div>
            </div>
            <div class="mb-3">
                <label  class="form-label">Moyenne</label>
                <input type="number" class="form-control" name="moyenne" >
                <div id="emailHelp" class="form-text">Please enter your moyenne.</div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
</body>
</html>
