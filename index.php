<?php

session_start();

if (isset($_SESSION['logged'])) {
  header('Location:home.php');
  exit();
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<?php

include_once "./components/head.php";

?>

<body>
  <?php

  include_once "./components/header.php";

  ?>
  <div class="main">
    <?php if (isset($_SESSION['fail'])) { ?>
      <div class="error_div">
        <?php if (isset($_SESSION['bad_email'])) { ?>
          <div class="error">
            <p>Invalid e-mail</p>
          </div>
        <?php } ?>
        <?php if (isset($_SESSION['bad_password'])) { ?>
          <div class="error">
            <p>Invalid password</p>
          </div>
        <?php } ?>
        <?php if (isset($_SESSION['bad_login'])) { ?>
          <div class="error">
            <p>Log in to continue</p>
          </div>
        <?php } ?>
      </div>
    <?php } ?>

    <form class="form" action="auth.php" method="POST">
      <label for="email">E-mail</label>
      <input type="email" name="email" id="email" />
      <label for="password">Password</label>
      <input type="password" name="password" id="password" />
      <button type="submit">Login</button>
    </form>
  </div>
</body>
<?php

session_unset();

?>

</html>