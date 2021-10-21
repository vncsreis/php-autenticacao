<?php
session_start();

session_unset();


$email_auth = "adm@test.com";
$password_auth = "123456";

if (!isset($_POST['email']) || $_POST['email'] !== $email_auth) {
  $_SESSION['fail'] = true;
  $_SESSION['bad_email'] = true;
}
if (!isset($_POST['password']) || $_POST['password'] !== $password_auth) {
  $_SESSION['fail'] = true;
  $_SESSION['bad_password'] = true;
}

if (!isset($_SESSION['fail'])) {
  $_SESSION['logged'] = true;
  header('Location: ./home.php');
  exit();
} else {
  header('Location: ./index.php');
  exit();
}
