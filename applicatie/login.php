<?php
$logged_in = false;
session_start();
//$_SESSION['username'] = "Thieme";

//controle of er is ingelogd.
if (isset($_SESSION['username'])) {
    $html = "<h1>Welcome {$_SESSION['username']}</h1>";
    $logged_in = true;
  }

//inloggen
if(!$logged_in && isset($_POST['username']) && isset($_POST['pass'])){
    if($_POST['username'] == 'Thieme' && $_POST['pass'] == '123'){
        $_SESSION['username'] = $_POST['username'];
        $html = "<h1>Welcome {$_SESSION['username']}</h1>";
        $logged_in = true;
    } else {
        
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testsessie</title>
  </head>
  <body>
    <?php
    if ($logged_in) {
      echo $html;
      echo '<a href="logout.php">Log uit</a>';
    } else {
    }
   ?>
     <!--TODO: ongeldige waarde voor `action`. -->
    <form action="" method="post">
      <input type="text" name="username">
      <input type="password" name="pass">
      <input type="submit" value="login">
    </form>
    <a href="logout.php">Log uit</a>
  </body>
</html>