<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php

include_once "./components/head.php";

if (!isset($_SESSION['logged'])) {
  $_SESSION['fail'] = true;
  $_SESSION['bad_login'] = true;
  header('Location:index.php');
  exit();
}

?>

<body>

  <?php

  include_once "./components/header.php";

  ?>
  <main class="main">

    <h1 class="home_title">Hello!</h1>

    <p class="home_welcome">You are logged in &#128513;</p>

    <p>To log out, click the header button &#129323;</p>

  </main>
</body>

</html>