<?php session_start();
if(isset($_SESSION['is_login']) && $_SESSION['is_login'] = true)
{
 header("Location: game/game.php");
  exit();
}

?>
<!doctype html>

<html lang="pl">

<head>
  <meta charset="utf-8">

  <title>Projekt</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="style.css">
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
  <center>
    <h2>
  Gra przeglądarkowa .:CASTLE:.
  </h2>
    <form action="system/login.php" method="POST">
      Login: <input type="text" name="login" /><br/> Hasło: <input type="password" name="haslo" /><br/>
      <br/>
      <input type="submit" value="Login" />
    </form>
    <span style="color:red"><?php if(isset($_SESSION['error']))
                  {
                    echo "Błędny login lub hasło!";
  
                  }
      
      
      
      ?></span>
  </center>
</body>

</html>