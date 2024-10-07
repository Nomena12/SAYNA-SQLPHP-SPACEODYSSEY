<?php 

include('app/Views/header.php');



?>


        <div class="row">
            <h1><?= $missions->name ?></h1>
        </div>

        <div class="row">
            Confirmer la suppression
            <form class="" action='.?controller=Missions&action=deleteConfirm' method='POST' >
                <input type='hidden' name='missions' value='<?= $missions->id; ?>' />
                <input type='submit' value ='Supprimer le missions' />
            </form>
            <a href='.?controller=Missions&action=index'>Retour</a>

        </div>
     
<?php
include('app/Views/footer.php');
