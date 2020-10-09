
<form name="inloggen" action="" method="POST">
  <input type="text" name="email" value="iemand@gmail.com" />
  <input type="password" name="password" value="wachtwoord" />
  <input type="submit" name="submit" value="Inloggen">
</form>

<?php
  if (isset($_POST['submit'])) {
      $email = htmlspecialchars($_POST['email']);
      $password = htmlspecialchars($_POST['password']);
      echo "<br>e-mail: $email";
      echo "<br>password: $password";
  }
?>
