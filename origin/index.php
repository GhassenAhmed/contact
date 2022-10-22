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
    <title>Contact</title>
</head>
<body>
<?php
    $pdo=  new PDO('mysql:host=localhost;dbname=contact','root','');
    $query= $pdo->query("SELECT * FROM ghassen_contact");
    $contact=$query->fetchAll();
    //var_dump($contact);
?>
<div>
 <h1>Contact</h1>
 <a href="ajt_contact.php" class="btn btn-success float-end " style="margin-bottom: 50px;"><i class="bi bi-plus-circle"></i>  Add Contact</a>
 </div>
 <table class="table table-success table-striped px-4 py-4">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">adress</th>
      <th scope="col">password</th>
      <th scope="col">Details</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($contact as $conct): ?>
    <tr>
      <th scope="row"> <?=$conct['id'] ?> </th>
      <td><?=$conct['name'] ?></td>
      <td><?=$conct['adresse'] ?></td>
      <td><?=$conct['password'] ?></td>
      <td><a class="btn btn-primary"><i class="bi bi-ticket-detailed"></i></a></td>
      <td><a href="" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a></td>
      <td><a href="delete.php?id=<?=$conct['id']?>" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?=$conct['id'] ?>"><i class="bi bi-trash-fill"></i></a>

      <div class="modal fade" id="delete<?=$conct['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?=$conct['name']?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    </td>
    

         

    </tr>
    <?php endforeach; ?>

  </tbody>
  
</table>
       
    
    



</body>
</html>