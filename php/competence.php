<?php
$competence=\file_get_contents('./data/competences.yaml');
$com=yaml_parse($competence);
?>
<h1>Mes competences</h1>
<h3>Mes competences en developpement</h3>
<label for="file">HTML:</label>
<progress id="file" max="100" value="70"><?php echo $comp['html'] ?></progress>
<label for="file">CSS</label>
<progress id="file" max="100" value="70"><?php echo $comp['css']?></progress>