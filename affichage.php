

<?php include("nav.php") 

require_once "tp27-Dramane-TRAORE/connexion.php";

$sql = "SELECT * FROM `affichage` ORDER BY `contenu` DESC";

$requete = $bdd->query($sql);

$section = $requete->fetchAll()

?>


<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, atque! </p>

<section>
<?php foreach($section as $section): ?>



<h1>Titre</h1>
<p><?php echo  $section["contenu"] ?></p>
<div>contenu</div>


<?php endforeach; ?>
</section>
<?php

 include("footer.php") ?>