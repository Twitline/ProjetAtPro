<?php
$formation=\file_get_contents('./data/formation.yaml');
$form=yaml_parse($formation);
?>
<h1>Formation</h1>
<?php
foreach($form as $fan){
    echo "<div class='formation'>";
    echo "Formation : ".$fan["Formation"]."<br>";
    echo "Etablissement : ".$fan["Etablissement"]."<br>";
    echo "Date de début : ".$fan["Datedebut"]."<br>";
    echo "Datefin : ".$fan["Datefin"]."<br>";
    echo "Lieu : ".$fan["Lieu"]."<br>";
    echo $fan["Contenu"]."<br>";
    echo "</div>";
}
?>