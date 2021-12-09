<?php
$yaml=file_get_contents ("./data/experience.yaml");
$pro=yaml_parse($yaml);
?>
<h1>Experiences<h1>
<?php
foreach ($pro as $experience) {
    echo "<p>";
    echo "Poste Occupé : ".$experience["Poste"]."</br>";
    echo "Entreprise : ".$experience["Entreprise"]."</br>";
    echo "Datedebut : ".$experience["Datedebut"]."</br>";
    echo "Datefin : ".$experience["Datefin"]."</br>";
    echo "Lieu : ".$experience["Lieu"]."</br>";
    echo "Descriptif : ".$experience["Descriptif"]."</br>";
    echo "</p>";
}
?>