<?php 

include('app/Views/header.php');



?>


        <div class="row">
            <h1><?= $planetes->name ?></h1> 
        </div>

        <div class="row">
            <form class="" action='.?controller=Planetes&action=update' method='POST' >
                <input type='hidden' name='planetes' value='<?= $planetes->id; ?>' />
                <input type='text' name='name' value='<?= $planetes->name; ?>' />
                <input type='text' name='distanceDepuisTerre' value='<?= $planetes->distanceDepuisTerre; ?>' />

                <input type='submit' />

            </form>

        </div>
     
<?php
include('app/Views/footer.php');
