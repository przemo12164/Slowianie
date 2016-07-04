<?php session_start();if(!isset($_SESSION['is_login'])){header("Location: ../index.php");exit();}?>
<!doctype html>
<html lang="pl">

<head>
  <meta charset="utf-8">
  <link href='https://fonts.googleapis.com/css?family=Alegreya:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <title>GAME</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="Majewski">

  <link rel="stylesheet" href="../config/game_style.css" type="text/css" />
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
  <div id="continer">


    <div class="top">
      | Nick:
      <?php  echo  $_SESSION['login'] ." |"; ?> Zboże:
      <?php echo $_SESSION['zboze']." |";?> Drewno:
      <?php echo $_SESSION['drewno']." |";?> Srebro:
      <?php echo $_SESSION['srebro']." |";?> Zywnosć:
      <?php echo $_SESSION['zywnosc']." |";?>
      <?php echo "Punkty: 1000|";?><br/>

    </div>
    <div class="menu">
      | <a href='game.php'>Wioska<a>    |
        <a href='map.php'>Mapa<a>      |
         <a href='wojsko.php'>Wojska<a>    |
          <a href='klan.php'>Klan<a>       |
            <a href='ustawienia.php'>Ustawienia<a>  |
             <a href='../system/logout.php'>Wyloguj<a>  |
      
    </div>       
   
               
    <?php   if(isset($_GET['screen']))
              {
                error_reporting(0);
                include $_GET['screen'].'.php';
  exit();
              }
               
               
    ?>           
               
               
               
               
   <div class="map" >
          <div class="view">
             <img src="img/bg.jpg"  class="bg"width="600" height="418"  />
             <img class="empty" width="600" height="418"   src="https://dspl.innogamescdn.com/8.48.2/29842/graphic/map/empty.png"  usemap="#wioska" >
             <img class="main" src="https://dspl.innogamescdn.com/8.48.2/29842/graphic/visual//main1.png" alt="Ratusz" >
             <map name="wioska" id="wioska">
               <area shape="rect" coords="320,75,410,150" alt="Ratusz" href="game.php?screen=main">
             </map>  
            
           </div>
             
    </div>
  
             Ratusz - Poziom: <?php echo $_SESSION['ratusz']." |";?><a href='.php'>Rozbuduj<a><br/>
             Koszary - Poziom: <?php echo $_SESSION['koszary']." |";?><a href='.php'>Rozbuduj<a><br/>
             Kopalnia Srebra - Poziom: <?php echo $_SESSION['kopalnia_srebra']." |";?><a href='.php'>Rozbuduj<a><br/>
             Tartak- Poziom: <?php echo $_SESSION['tartak']." |";?><a href='.php'>Rozbuduj<a><br/>
             Spichlerz - Poziom: <?php echo $_SESSION['spichlerz']." |";?><a href='.php'>Rozbuduj<a><br/>
             Farma - Poziom: <?php echo $_SESSION['farma']." |";?><a href='.php'>Rozbuduj<a><br/>
             Mur - Poziom: <?php echo $_SESSION['mur']." |";?><a href='.php'>Rozbuduj<a><br/>
             Zbrojownia - Poziom: <?php echo $_SESSION['zbrojownia']." |";?><a href='.php'>Rozbuduj<a><br/>
  
            
  </div>
</body>

</html>