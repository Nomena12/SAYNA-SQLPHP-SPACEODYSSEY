<?php 

include('app/Views/header.php');



?>


<div class="row">
            <form class="" action='.?controller=Astronautes&action=add' method='POST' >
                <input type='hidden' name='Astronautes' value='<?= $astronautes->id; ?>' />
                <input type='text' name='name' value='' />
                <input type='text' name='firstName' value='' />
                <input type='text' name='age' value='' />
                <input type='text' name='sexe_id' value='' />
                <input type='text' name='etatDeSante' value='' />
                <input type='text' name='nombreAnneeDeService' value='' />


                <input type='submit' />

            </form>

        </div>


            
<?php
include('app/Views/footer.php');
