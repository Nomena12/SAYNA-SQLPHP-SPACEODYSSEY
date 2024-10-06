<?php 

include('app/Views/header.php');



?>


<div class="row">
            <form class="" action='.?controller=Planetes&action=add' method='POST' >
                <input type='hidden' name='planetes' value='<?= $planetes->id; ?>' />
                <input type='text' name='name' value='' />
                <input type='text' name='distanceDepuisTerre' value='' />
                <input type='text' name='habitable' value='' />
                <input type='text' name='circonference' value='' />


                <input type='submit' />

            </form>

        </div>


            
<?php
include('app/Views/footer.php');
