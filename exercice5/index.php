<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>TRAITEMENT EN AJAX #5</title>

    <style>div{padding: 10px;}
    label{display: inline-block; min-width: 100px;}
</style>

</head>
<body>
<?php include '../nav/nav.php' ?>

<div class="col-sm-6 col-sm-offset-3">
      <h1>Exercice #5 AJAX Formulaire</h1>

      <form action="process.php" method="post">
        <div id="name-group" class="form-group">
          <label for="name">Nom</label>
          <input
            type="text"
            class="form-control"
            id="name"
            name="name"
            placeholder="Nom"
          />
        </div>

        <div id="email-group" class="form-group">
          <label for="email">Email</label>
          <input
            type="text"
            class="form-control"
            id="email"
            name="email"
            placeholder="email@example.com"
          />
        </div>

        <div id="prenom-group" class="form-group">
          <label for="prenom-group">Prénom</label>
          <input
            type="text"
            class="form-control"
            id="prenom"
            name="prenom"
            placeholder="Prénom"
          />
        </div>

        <button type="submit" class="btn btn-success">
          Envoyer
        </button>
      </form>
    </div>



    <script src="form.js"></script>
   




</body>
</html>