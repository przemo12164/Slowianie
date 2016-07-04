<?php
session_start(); 
if(isset($_SESSION['is_login']))
{
 header("Location: ../index.php");
  exit();
}
require_once("dbconnect.php");
$login = $_POST['login'];
$haslo = $_POST['haslo'];

$connection = new mysqli($db_server,$db_user,$db_pass,$db_base);

if($connection->connect_errno != 0)
{
  die('Error'.$connection->connect_error);
}else{
  $sql = "SELECT * FROM users WHERE login='$login' AND haslo = '$haslo'";
  
if($wynik = $connection->query($sql))
{
  $ile_userow = $wynik->num_rows;
  if($ile_userow > 0)
  {
    //udało się zalogować 
    $wiersz = $wynik->fetch_assoc();
    
    $_SESSION['is_login'] = true;
    
    $_SESSION['id'] = $wiersz['id'];
    $_SESSION['login'] = $wiersz['login'];
    $_SESSION['haslo'] = $wiersz['haslo'];
    $_SESSION['email'] = $wiersz['email'];
    
    $_SESSION['zywnosc'] = $wiersz['zywnosc'];
    $_SESSION['zboze'] = $wiersz['zboze'];
    $_SESSION['drewno'] = $wiersz['drewno'];
    $_SESSION['srebro'] = $wiersz['srebro'];
    
    $_SESSION['ratusz'] = $wiersz['ratusz'];
    $_SESSION['koszary'] = $wiersz['koszary'];
    $_SESSION['tartak'] = $wiersz['tartak'];
    $_SESSION['kopalnia_srebra'] = $wiersz['kopalnia_srebra'];
    $_SESSION['spichlez'] = $wiersz['spichlerz'];
    $_SESSION['farma'] = $wiersz['farma'];
    $_SESSION['mur'] = $wiersz['mur'];
    $_SESSION['zbrojownia'] = $wiersz['zbrojownia'];
    
      header("Location: ../game/game.php");
    
  }else{
    
    //Nie udało się zalogować
    $_SESSION['error'] = true;
    header("Location: ../index.php");
   
  }
  
}
  $connection->close();
}





?>