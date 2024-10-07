<?php 

include('app/Views/header.php');



?>


<div class="row">
            <form class="" action='.?controller=Missions&action=add' method='POST' >
                <input type='hidden' name='missions' value='<?= $missions->id; ?>' />
                <input type='text' name='name' value='entrer le nom' />
                <input type='text' name='type' value='entrer le type' />
                <input type='text' name='dateDeDebut' value='0000-00-00' />
                <input type='text' name='dateDeFin' value='0000-00-00' />
          <!--    <input type='text' name='statut' value='entrer le statut' />
               <input type='text' name='planete_id' value='' />  --->

          <label for="statut">Statut :</label>
    <select id="statut" name="statut">
        <option value="">Sélectionnez un statut</option>';
        <option value="en cours">en cours</option>';
        <option value="en preparation">en preparation</option>';
        <option value="terminee">termine</option>';
        <option value="annulee">annulee</option>';

       

        
    </select>





          <label for="planetes">Planetes :</label>
    <select id="planetes" name="planete_id">
        <option value="">Sélectionnez une planetes</option>';
       

         <?php
         
        foreach($planetes as $p){
            echo '<option value="' . $p->id . '">' . htmlspecialchars($p->name) . '</option>';
        }
        ?>
        
    </select>

    <label for="astronautes">Astronautes :</label>
    <select id="astronautes" name="astronaute_id">
        <option value="">Sélectionnez une astronautes</option>';
       

         <?php
         
        foreach($astronautes as $a){
            echo '<option value="' . $a->id . '">' . htmlspecialchars($a->name) . '</option>';
        }
        ?>
        
    </select>

    <label for="vaisseaux">Vaisseaux :</label>
    <select id="vaisseaux" name="vaisseau_id">
        <option value="">Sélectionnez une vaisseaux</option>';
       

         <?php
         
        foreach($vaisseaux as $v){
            echo '<option value="' . $v->id . '">' . htmlspecialchars($v->numero) . '</option>';
        }
        ?>
        
    </select>
           



                <input type='submit' />

            </form>

        </div>


            
<?php
include('app/Views/footer.php');
