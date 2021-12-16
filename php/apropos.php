<?php
$accueil=\file_get_contents('./data/accueil.yaml');
$acc=yaml_parse($accueil);

$apropos=\file_get_contents('./data/apropos.yaml');
$apr=yaml_parse($apropos);
?>
<h1 class="tiAcc">À Propos</h1>
<p>
    Je m'appelle <?php echo $acc['prenom']." ".$acc['nom']?>, j'ai <?php echo $apr['age']?> ans et<br>
    je suis en <?php echo $apr['formation']." dans la supavenir ".$apr['etablissement']." à ".$apr['ville']?>
</p>
<img class="portrait" src="<?=$apr['photo']?>" height="600px" width="500px">