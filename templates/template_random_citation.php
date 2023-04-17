<?php ob_start(); ?>
<? $title = "Citations aléatoires"?>
<?php
?>
<section>
<div id = 'citation_layout'>
    <div class ='picture_citation'>
        <img src = "img/personnages/<?=$photo?>.jpg"/>
        <div><?=$personnage?></div>
    </div>
    <div class ='text_citation'>
        <?=$tableresponse['citation']['citation']?>
    </div>
    <div class = 'info_citation'>
        <div>
            <!-- <a href = 'index.php?page=quote&about=livre&number=<?= $livre?>'> -->
                <?=$livre?>
            <!-- </a> -->
        </div>
        <div>Episode : <?= $episode?></div>
    </div>
</div>
</section>
<button onclick = "reload()">Suivant</button>
<?php $content = ob_get_clean(); ?>
<?php include ('templates/layout.php'); ?>