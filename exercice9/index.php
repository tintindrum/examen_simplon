<!-- À partir de l’exercice précédent, utiliser la bibliothèque https://datatables.net/
Afficher en POO l’intégralité des chiens insérer en BDD -->


<?php
 
  include 'chien.php';
  $customerObj = new Chien();
 
  if(isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
      $deleteId = $_GET['deleteId'];
      $customerObj->deleteRecord($deleteId);
  }
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>PHP MySql</title>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jqc-1.12.4/dt-1.11.5/datatables.min.css"/>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jqc-1.12.4/dt-1.11.5/datatables.min.js"></script>

</head> 
<body>

<?php include '../nav/nav.php' ?>
<div class="card text-center" style="padding:15px;">
  <h4>Exercice #9 Bibliothèque DataTable </h4>
</div><br><br> 
<div class="container">
  <?php
    if (isset($_GET['msg1']) == "insert") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Votre Registration est ajoutée
            </div>";
      } 
    if (isset($_GET['msg2']) == "update") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Votre registration est modifier ! 
            </div>";
    }
    if (isset($_GET['msg3']) == "delete") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Votre demande est suprimée ! 
            </div>";
    }
  ?>
  <h2>Table data Chien
    <a href="add.php" style="float:right;"><button class="btn btn-success"><i class="fas fa-plus"></i></button></a>
  </h2>
  <table class="table" id="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>age</th>
        <th>race</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php 
          $customers = $customerObj->displayData(); 
          foreach ($customers as $customer) {
        ?>
        <tr>
          <td><?php echo $customer['id'] ?></td>
          <td><?php echo $customer['nom'] ?></td>
          <td><?php echo $customer['age'] ?></td>
          <td><?php echo $customer['race'] ?></td>
          <td>
            <button class="btn btn-primary mr-2"><a href="edit.php?editId=<?php echo $customer['id'] ?>">
              <i class="fa fa-pencil text-white" aria-hidden="true"></i></a></button>
            <button class="btn btn-danger"><a href="index.php?deleteId=<?php echo $customer['id'] ?>" onclick="confirm('Voulez vous vraiment supprimer cette demande')">
              <i class="fa fa-trash text-white" aria-hidden="true"></i>
            </a></button>
          </td>
          <?php } ?>
        </tr>
      
    </tbody>
  </table>
</div>
<script type="text/javascript">
    $(document).ready( function () {
    $('table').DataTable();
} );
</script>

</body>
</html>