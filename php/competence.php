<?php
$competence=\file_get_contents('./data/competences.yaml');
$com=yaml_parse($competence);
?>
<h1>Mes competences</h1>
<?php
/*
foreach($com as $domaine=>$item){
    echo "<h3>Competences en $domaine</h3>";
    foreach($domaine as $item=>$niveau){
        echo "<label for='$item'>$item</label><br>";
        echo "<progress id='$item' max='100' value='$niveau'>$niveau</progress><br>";
    }   
}
*/

foreach($com AS $domaine){
    echo "<h3>".$domaine['domaine']."</h3><br>";
    foreach($domaine["items"] as $elt){?>
        <label for="<?=$elt['competence']?>"><?=$elt['competence']?></label><br>
        <progress id="<?=$elt['competence']?>" max='100' value="<?=$elt['niveau']?>"><?=$elt['niveau']?></progress><br>
        <?php
    }
}
?>