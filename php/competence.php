<?php
$competence=\file_get_contents('./data/competences.yaml');
$com=yaml_parse($competence);
?>
<h1>Mes competences</h1>
<?php
foreach($com AS $domaine){
    echo "<h3>".$domaine['domaine']."</h3><br>";
    foreach($domaine["items"] as $elt){?>
        <label for="<?=$elt['competence']?>"><?=$elt['competence']?></label><br>
        <progress class="skill" id="<?=$elt['competence']?>" max='100' value="<?=$elt['niveau']?>"><?=$elt['niveau']?></progress><br>
        <?php
    }
}
?>