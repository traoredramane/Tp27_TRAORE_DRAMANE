<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=fare', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
?>


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
   
  <section class="explo">
  
  <h1>Explorez Bobo Dioulasso</h1>
  <div class="rows ex">
  
<div class="explo-col">
<h1>LA SITARAIL</h1>
<img src="R.jpg" alt="">
</div>

<div class="explo-col ex1">
<h1>ARCHIDIOCESE DE BOBO </h1>
<img src="eglise.jpg" alt="">

</div>

  </div>
  
  
  <div>
  <h1>A savoir</h1>
  <h3>La SITARAIL et ARCHIDIOCESE DE BOBO sont des lieux de refferences pour la ville de bobo</h3>
  <P>La Société internationale de transport africain par rail (ou SITARAIL) est une société basée à Abidjan, filiale de Bolloré Transport & Logistics opérant les chemins de fer en Côte d'Ivoire et au Burkina Faso. Par ailleur L’ archidiocèse de Bobo-Dioulasso est un archidiocèse de l'Église catholique au Burkina Faso. Son siège est la cathédrale Notre-Dame-de-Lourdes.</P>
  </div>
  </section><br><br>
   
   
   
   
   
    
</body>
</html>

<?php include("footer.php") ?>