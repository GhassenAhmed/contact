<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Ajout Contact</title>
</head>
<body>
    <?php 
   

    
   include 'db_connect.php';
   if(!empty($_POST)){
    $name=$_POST['name'];
    $adresse=$_POST['adresse'];
    $password=$_POST['password'];
    $sql=" INSERT INTO ghassen_contact (name,adresse,password) VALUES (?,?,?)";
    $query=$pdo->prepare($sql);
    $query->execute([$name,$adresse,$password]);
    header('location:index.php');
    exit;
   }


    ?>
    <h1 style="margin-left:200px;">Ajout Contact</h1>
    <a href="index.php" class="btn btn-info float-end" style="margin-right: 30px; font-size:30px;"><i class="bi bi-house-door-fill"></i></a>
    <div style="margin-left:200px;">

    <form action="ajt_contact" method="post">

        <div class="mt-4 py-4">
            <label for="name" class="form-label py-4">Name</label>
            <input type="text" required class="form-control"  name="name">
        </div>

        <div class="mb-3 py-4">
            <label for="exampleInputEmail1" class="form-label py-4">Email address</label>
            <input type="email" required class="form-control" name="adresse">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" required class="form-control" name="password">
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" required for="exampleCheck1">Check me out</label>
        </div>
        
        <button type="submit" class="btn btn-primary">  Submit <i class="bi bi-bookmark-check-fill"></i></button>
        <button type="reset" class="btn btn-secondary px-4">Cansel  <i class="bi bi-x-square"></i></button>
        </form>

    </div>
    
</body>
</html>