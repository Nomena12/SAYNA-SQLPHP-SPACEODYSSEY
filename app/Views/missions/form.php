<?php 

include('app/Views/header.php');



?>


        <div class="row">
            <h1><?= $missions->name ?></h1> 
        </div>

        <div class="row">
        <form class="" action='.?controller=Missions&action=update' method='POST' >
                <input type='hidden' name='missions' value='<?= $missions->id; ?>' />
                <input type='text' name='name' value='<?= $missions->name; ?>' />
                <input type='text' name='type' value='<?= $missions->type; ?>' />
                <input type='text' name='dateDeDebut' value='<?= $missions->dateDeDebut; ?>' />
                <input type='text' name='dateDeFin' value='<?= $missions->dateDeFin; ?>' />
                <input type='text' name='statut' value='<?= $missions->statut; ?>' />
                <input type='text' name='planete_id' value='<?= $missions->planete_id; ?>' />
                <input type='text' name='astronaute_id' value='<?= $missions->astronaute_id; ?>' />
                <input type='text' name='vaisseau_id' value='<?= $missions->vaisseau_id; ?>' />



                <input type='submit' />

            </form>

        </div>
     
<?php
include('app/Views/footer.php');
