<?php ob_start(); ?>
<? $title = "Liste des livres"?>
<div id = 'list_livre'>
    <? foreach ($livres as $livre){ ?>
        <a href = 'index.php?page=quote&type=livre&number=<?= $livre[0] ?>'>
            <div class = 'card_livre'>
                <div class ='picture_card_livre shadow'>
                    <img src = '<?=$livre[2]?>'/>
                </div>
                <?= $livre[1] ?>
            </div>
        </a>
    <?php } ?>
</div>
<a href = "#"><div id = "up_button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z"/></svg></div></a>
<?php $content = ob_get_clean(); ?>
<?php include ('templates/layout.php'); ?>