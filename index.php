<!DOCTYPE html>
<html lang="pt-BR">

<?php

include_once "./components/head.php"

?>

<body>
  <?php

  include_once "./components/header.php"

  ?>
  <div class="main">
    <form class="form" action="auth.php" method="POST">
      <label for="email">E-mail</label>
      <input type="email" name="email" id="email" />
      <label for="password">Password</label>
      <input type="password" name="password" id="password" />
      <button type="submit">Login</button>
    </form>
  </div>
</body>

</html>