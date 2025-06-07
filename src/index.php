<?php
if (isset($_GET['page'])){
    if ($_GET['page'] == "livre"){
        include_once 'controller/controller_page_livre.php';
    }else if ($_GET['page'] == "character"){
        include_once 'controller/controller_page_character.php';
    }else if ($_GET['page'] == "quote"){
        if ($_GET['type'] == "character"){
            $ApiLink = 'https://kaamelott.chaudie.re/api/random/personnage/'.$_GET['name'];
            include_once 'controller/controller_random_citation_page.php';
        }else if ($_GET['type'] == "livre"){
            $ApiLink = 'https://kaamelott.chaudie.re/api/random/livre/'.$_GET['number'];
            include_once 'controller/controller_random_citation_page.php';
        }else {
            $ApiLink = 'https://kaamelott.chaudie.re/api/random';
            include_once 'controller/controller_random_citation_page.php';
        }
    }
}else {
    $ApiLink = 'https://kaamelott.chaudie.re/api/random';
    include_once 'controller/controller_random_citation_page.php';
}
?>
<script src = "model/model_action_js.js"></script>
