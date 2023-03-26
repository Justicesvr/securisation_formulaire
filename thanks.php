
<?php

$lastname = $_POST['user_lastname'];
$firstname = $_POST['user_firstname'];
$email = $_POST['user_email'];
$phone = $_POST['user_phone'];
$subject = $_POST['user_subject'];
$message = $_POST['user_message'];

$errors = array();

if(empty(trim($_POST['user_lastname'])) || 
  empty(trim($_POST['user_firstname'])) || 
  empty(trim($_POST['user_email'])) || 
  empty(trim($_POST['user_phone'])) || 
  empty(trim($_POST['user_subject'])) || 
  empty(trim($_POST['user_message']))) {
  $errors[] = 'Veuillez remplir tous les champs obligatoires';
}

if(!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
  $errors[] = 'Le format de l\'email est incorrect';
}

if(!empty($errors)) {
    foreach ($errors as $error) {
        echo $error . '<br>';
    }

}

if(empty($errors)) {
    echo 'Merci ' . $_POST['user_firstname'] . ' ' . $_POST['user_lastname'] . ' de nous avoir contacté à propos de ' . $_POST['user_subject'] . '.' . PHP_EOL . ' Un de nos conseillers vous contactera soit à l’adresse ' . $_POST['user_email'] . ' ou par téléphone au ' . $_POST['user_phone'] . ' dans les plus brefs délais pour traiter votre demandà propos de : ' . PHP_EOL . $_POST['user_message'];

  }


?>
