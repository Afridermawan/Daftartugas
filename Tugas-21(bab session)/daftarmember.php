<form method="POST" action="">
<button type="submit" name="out">Log Out</button>
</form>
<?php
session_start();
var_dump($_SESSION['login']);

if (isset($_POST['out'])) {
  unset($_SESSION['login']);
  header("Location: login.php");
}
?>
