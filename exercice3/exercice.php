<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php include '../nav/nav.php' ?>
    <h3>1/ Un patient peut-il faire plusieurs consultes ?
    </h3>
    <p>Oui un patient peut prendre plusieurs consultation car la cardinalité est 1,n donc un patient peut prendre plusieurs consultation grace au ,n .
    </p><br>

    <h3>2/ Un médecin peut-il recevoir plusieurs patients ?
    </h3>
    <p>Non , car la cardinalité 1,1 permet à UN Medicin de donner une seul consultation d'un patient 
    Les table se mixent les clé etrangères de l'entité medecin et Patient se retrouve dans la table consultation </p><br>

    <h3>3/ Si oui, en même temps ?
    </h3>
    <p>non car il y'a la cardinalité 1,1 de chaque côté de la table consultation , les clé étrangère de Medecin et Patient se retrouve dans la table consultation
    et permet du coup d'avoir pour une consultation pour 1 seul patient et 1 medecin </p><br>

    <h3>4/ Comment faire pour avoir 10 médicaments ?</h3>
    <p>Pour avoir 10 médicaments , ce nombre se retrouvera dans la table prescire grace à la cardinalité 0,n de la relation prescire une nouvelle table se crée pour permettre
    d'avoir plusieurs medicament pour plusieurs consultation</p><br>

    <h3> 5/ Peut-on prescrire 10 médicaments pour une
    même consultation ?</h3>
    <p>oui car la cardinalité 0 permet de pas définir une prescire unique mais le n definira plusieurs medicament
    </p><br>
   

    <h3>6/ Est-ce que deux médecins peuvent prescrire le
    même médicament.</h3>
    <p>oui grâce à la table préscrire , on pourra avoir plusieurs medicament pour plusieurs consultation , cette clé consultation et clé étrangère ( medecin et patient )
    se retrouve ensuite dans la consultation , les 2 deux médecins ne sont donc pas lier à la cardinalité du même medicament et se retrouvent appart des deux médecins </p><br>
    <img src="MLD_quentinDrumel.jpg" alt="MLD">
</body>
</html>