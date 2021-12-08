<?php
$competence=\file_get_contents('./data/competences.yaml');
$com=yaml_parse($competence);
?>
<h1>Mes competences</h1>
<h3>Mes competences en developpement</h3>
<?php
foreach($com as $item=>$niveau){
    echo "<label for='$item'>$item</label><br>";
    echo "<progress id='$item' max='100' value='$niveau'>$niveau</progress><br>";
}
?>