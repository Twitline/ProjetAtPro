<?php
$accueil=\file_get_contents('./data/accueil.yaml');
$acc=yaml_parse($accueil);
?>
<h1 class="tiAcc"><?php echo $acc['prenom']." ".$acc['nom']?></h1>
<h2 class="subAcc"><?php echo $acc['accroche']?></h2>
<img class="portrait" src="<?=$acc['Photo']?>" height="600px" width="500px">