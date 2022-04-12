<?php

$errors = [];
$data = [];
$valid['success'] = true;

if (empty($_POST['name'])) {
    $errors['name'] = 'Nom est requis';
}

if (empty($_POST['email'])) {
    $errors['email'] = 'Email est requis';
}

if (empty($_POST['prenom'])) {
    $errors['prenom'] = 'prenom est requis !';
}

if (!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $valid['success'];
    $data['utilisateur'] = ' "<br>" '.$_POST['name']. ' "<br>"  ' .$_POST['email']. ' "<br>" ' .$_POST['prenom']. ' ';
    
}

/* echo json_encode($data['utilisateur']);
 */
$json_pretty = json_encode($data, JSON_PRETTY_PRINT);
echo "<pre>".$json_pretty."<pre/>";
?>