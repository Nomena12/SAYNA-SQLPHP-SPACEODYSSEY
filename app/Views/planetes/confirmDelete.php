<?php 

include('app/Views/header.php');



?>


        <div class="row">
            <h1><?= $planetes->name ?></h1>
        </div>

        <div class="row">
            Confirmer la suppression
            <form class="" action='.?controller=Planetes&action=deleteConfirm' method='POST' >
                <input type='hidden' name='planetes' value='<?= $planetes->id; ?>' />
                <input type='submit' value ='Supprimer le planetes' />
            </form>
            <a href='.?controller=Planetes&action=index'>Retour</a>

        </div>
     
<?php
include('app/Views/footer.php');
