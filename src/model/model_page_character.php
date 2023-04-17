<?php
$path = 'personnages.json';
$json_string = file_get_contents($path);
$json_obj = json_decode($json_string, true);
function nomPhoto($nom){
    $photot = strtolower($nom);
    $photor = str_replace("'", "", $photot);
    $photo = str_replace("ê", "e", $photor);
    return $photo;
}
?>