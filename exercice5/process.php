<?php

$errors = [];
$data = [];

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
    $data['success'] = true;
    $data['message'] = ' Bonjour , '.$_POST['name']. ' , '.$_POST['email']. ' , '.$_POST['prenom']. ' , nous vous contacterons dans les plus
    bref délais »!';
}

echo json_encode($data);
?>