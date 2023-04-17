<?php
$reponse = file_get_contents($ApiLink);
$tableresponse = json_decode($reponse, true);
$personnage = $tableresponse['citation']['infos']['personnage'];
$photot = strtolower($personnage);
$livre = trim($tableresponse['citation']['infos']['saison'], " ");
$episodet = trim($tableresponse['citation']['infos']['episode'], " ");
$episoder = trim($episodet, '"');
$episode = trim($episoder, ":");
$photor = str_replace("'", "", $photot);
$photo = str_replace("ê", "e", $photor);
$livrelow = strtolower($livre);
$livrere = str_replace(" ", "_", $livrelow);
?>