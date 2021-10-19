<header class="header">
  <div class="title">Auth</div>
  <?php if (isset($_SESSION['logged'])) { ?>
    <a class="logout_container" href="logout.php">
      <div class="logout">
        Log Out
      </div>
    </a>
  <?php } ?>

</header>