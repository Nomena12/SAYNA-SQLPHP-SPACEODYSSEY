<?php 

include('app/Views/header.php');



?>


        <div class="row">
            <h1><?= $astronautes->name ?></h1>
        </div>

        <div class="row">
            Confirmer la suppression
            <form class="" action='.?controller=Astronautes&action=deleteConfirm' method='POST' >
                <input type='hidden' name='astronautes' value='<?= $astronautes->id; ?>' />
                <input type='submit' value ='Supprimer le astronautes' />
            </form>
            <a href='.?controller=Astronautes&action=index'>Retour</a>

        </div>
     
<?php
include('app/Views/footer.php');
