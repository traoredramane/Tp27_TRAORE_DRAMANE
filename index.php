<?php include("connexion.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
    
</head>
<body>

<?php include("nav.php") ?>



<section class="sya">

<h1>La Belle cité de SYA</h1>

<div class="rows bel">

<div class="col-sya rout">



<?php
$req=$bdd->query("select * from texte where id=1");
$min = $req-> fetch();
?>

<h2><?php echo $min['titre']?></h2>

<?php
$req=$bdd->query("select * from images where id=1");
$min = $req-> fetch();
?>

<img src="<?php echo $min['nom']?>" alt="">




<?php
$req=$bdd->query("select * from texte where id=1");
$min = $req-> fetch();
?>
<p><?php echo $min['contenu']?></p>
</div>

<!-- ciné guimby -->

<div class="col-sya cine">


<?php
$req=$bdd->query("select * from texte where id=2");
$min = $req-> fetch();
?>
<h2><?php echo $min['titre']?></h2>

<?php
$req=$bdd->query("select * from images where id=3");
$min = $req-> fetch();
?>
<img src="<?php echo $min['nom']?>" alt="">



<?php
$req=$bdd->query("select * from texte where id=2");
$min = $req-> fetch();
?>
<p><?php echo $min['contenu']?></p>
</div>


<div class="col-sya cart">

<?php
$req=$bdd->query("select * from texte where id=3");
$min = $req-> fetch();
?>
<h2><?php echo $min['titre']?></h2>



<?php
$req=$bdd->query("select * from images where id=4");
$min = $req-> fetch();
?>
<img src="<?php echo $min['nom']?>" alt="">



<?php
$req=$bdd->query("select * from texte where id=3");
$min = $req-> fetch();
?>
<p><?php echo $min['contenu']?></p>
</div>

</div>


</section><br><br>





   
  <section class="explo">
  
  <h1>Explorez Bobo Dioulasso</h1>
  <div class="rows ex">
  
<div class="explo-col ex0">
<h2>LA SITARAIL</h2>



<?php
$req=$bdd->query("select * from images where id=21");
$min = $req-> fetch();
?>
<img src="<?php echo $min['nom']?>" alt="">

<div><button type="button">Voir plus</button></div>

</div>

<div class="explo-col ex1">
<h2>ARCHIDIOCESE DE BOBO </h2>


<?php
$req=$bdd->query("select * from images where id=9");
$min = $req-> fetch();
?>
<img src="<?php echo $min['nom']?>" alt="">
<div><button type="button">Voir plus</button></div>
</div>

  </div>
  
  
  <div class="sav">
  <h1>A savoir</h1>
  <h3>La SITARAIL et ARCHIDIOCESE DE BOBO sont des lieux de refferences pour la ville de bobo</h3>
  <P>La Société internationale de transport africain par rail (ou SITARAIL) est une société basée à Abidjan, filiale de Bolloré Transport & Logistics opérant les chemins de fer en Côte d'Ivoire et au Burkina Faso. Par ailleur L’ archidiocèse de Bobo-Dioulasso est un archidiocèse de l'Église catholique au Burkina Faso. Son siège est la cathédrale Notre-Dame-de-Lourdes.</P>
  </div>
  </section><br><br>
   
   
   
   <section class="mosq">
   <h1>Dioulassoba et ces Merveilles</h1>
   <div class="rows mos">
   
   <div class="mosq-col mo1">
   <img src="mosque.jpg" alt="">
    <div class="layer">
    <h3>Vielle Mosquée de Dioulassoba</h3>
    </div>
   <h2>Vielle Mosquée de Dioulassoba</h2>
   </div>
   
   
   
   
   <div class="mosq-col mo3">
   <img src="masque1.jpg" alt="">
   <div class="layer">
    <h3>Les masques</h3>
    </div>
   <h2>Les Masques</h2>
   </div>

   
   
   <div class="mosq-col mo2">
   <img src="mairie.jpg" alt="">
   <div class="layer">
    <h3>Mairie Centrale</h3>
    </div>
   <h2>Mairie Centrale</h2>
   </div>
  
   
   
   </div>
   </section><br><br>
   
   
   
   
   
   <section class="reser">
   
   <h1>Reserves d'eaux et Animaux</h1>
   
   <p>Bobo Dioulasso de part sa diversité culturelle regorge de nombreuses site en eaux tel que la Guinguette et la riviere de Dafra, en plus de ces eaux attrayantente il possede des animaux touristiques extraordinaire. ces differents sites 
   constituent des lieux de tourisme et de divertisement pour la population et de plusieurs etrangés</p>
   
   <div class="rows res">
  
  
   <div class="col-reser res1">
   <h2>Les Caimans Sacrés</h2>
   <img src="caiman.jpg" alt="">
   </div>
   
   
   <div class="col-reser res2">
   <h2>La Forêt de KOU</h2>
   <img src="foret.jpg" alt="">
   </div>
   
   
   <div class="col-reser res3">
   <h2>Les Silures de DAFRA</h2>
   <img src="silure1.jpg" alt="">
   </div>
   
   
   <div class="col-reser res4">
   <h2>La Guinguette de bobo</h2>
   <img src="naso.jpg" alt="">
   </div>
   
   </div>
   </section><br><br>
   
   
   
    
</body>
</html>

<?php include("footer.php") ?>