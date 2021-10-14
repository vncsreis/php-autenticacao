<?php

$email_auth = "adm@teste.com";
$password_auth = "123456";

$errors = [];

function non_empty_inputs()
{
  if (!isset($_POST['email'])) {
    $errors[] = 'e-mail';
  }
  if (!isset($_POST['password'])) {
    $errors[] = 'senha';
  }

  if (!empty($errors)) {
    print_r($errors);
  }
}

non_empty_inputs();

$email = $_POST['email'];
$password = $_POST['password'];

if ($email === $email_auth && $password === $password_auth) {
  header('Location: ./home.php');
} else {
  header('Location: ./');
}
