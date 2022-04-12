<!-- Créer une classe « Chien » ayant 3 attributs :
• Nom
• Age
• Race
Ecrire un constructeur permettant de générer un chien et caractérisant tous les valeurs
des attributs.
Ajouter dans la classe une fonction permettant d’afficher les informations d’un chien
Sur un index.php, créer 3 chiens à partir d’un formulaire et afficher les éléments -->


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO Classe #7</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>
<?php include '../nav/nav.php' ?>

    <h2>Exercice #7 POO PHP créer une classe chien</h2>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>


<?php 

class Chien {
    private $nom;
    private $age;
    private $race;

    public function __construct($nom,$age,$race)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->race = $race;
    }

    public function __toString()
    {
        return "Nom : " . $this->nom . " Age : " . $this->age . " Race : " . $this->race;
    }
}

$chien1 = new Chien("Clochette",1,"jackrussel");
$chien2 = new Chien("Max",6,"bulldog");
$chien3 = new Chien("igor",12,"berger-allemand");

echo "Chien 1 : $chien1. <br>";
echo "Chien 2 : $chien2. <br>";
echo "Chien 3 : $chien3. <br>";


?>
