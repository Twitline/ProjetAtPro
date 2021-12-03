<?php
$accueil=\file_get_contents('./data/accueil.yaml');
$acc=yaml_parse($accueil);
?>
<h1 class="tiAcc"><?php echo $acc['prenom']." ".$acc['nom']?></h1>
<h2 class="subAcc"><?php echo $acc['accroche']?></h2>