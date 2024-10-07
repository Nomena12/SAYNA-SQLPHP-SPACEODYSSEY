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
