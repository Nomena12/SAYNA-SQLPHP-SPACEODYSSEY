<?php 

include('app/Views/header.php');



?>


        <div class="row">
            <h1><?= $astronautes->name ?></h1> 
        </div>

        <div class="row">
        <form class="" action='.?controller=Astronautes&action=update' method='POST' >
                <input type='hidden' name='astronautes' value='<?= $astronautes->id; ?>' />
                <input type='text' name='name' value='<?= $astronautes->name; ?>' />
                <input type='text' name='firstName' value='<?= $astronautes->firstName; ?>' />
                <input type='text' name='age' value='<?= $astronautes->age; ?>' />
                <input type='text' name='sexe_id' value='<?= $astronautes->sexe_id; ?>' />
                <input type='text' name='etatDeSante' value='<?= $astronautes->etatDeSante; ?>' />
                <input type='text' name='nombreAnneeDeService' value='<?= $astronautes->nombreAnneeDeService; ?>' />


                <input type='submit' />

            </form>

        </div>
     
<?php
include('app/Views/footer.php');
