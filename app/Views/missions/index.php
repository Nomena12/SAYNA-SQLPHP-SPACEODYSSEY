<?php

include('app/Views/header.php');



?>


        <div class="row">
        <h1>Listes des missions</h1>
            </div>

            <div class="row">
       <a class='leftLink' href=".?controller=Missions&action=addMissions">ADD NEW MISSION</a>
            </div>

            <div class="row">

            <table class='table table-bordered table-striped'>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>type</th>
                        <th>Debut</th>
                        <th>Fin</th>
                        <th>statut</th>
                        <th>planete_id</th>
                        <th>astronaute_id</th>
                        <th>vaisseau_id</th>


                    </tr>

                </thead>
                    <tbody>
                        <?php
                        foreach($missions as $m){
                            
                            echo '<tr>';
                            echo '<td>'. $m->name .'</td>';
                          

                            echo '<td>'. $m->type .'</td>';
                         

                            echo '<td>'. $m->dateDeDebut .'</td>';

                            echo '<td>'. $m->dateDeFin .'</td>';

                            echo '<td>'. $m->statut .'</td>';

                            echo '<td>'. $m->planete_id .'</td>';
                        /*   echo '<td>     <label for="compagnie">Compagnie :</label>
    <select id="compagnie" name="compagnie_id">
        <option value="">Sélectionnez une compagnie</option>';
       

         
        foreach($planetes as $p){
            echo '<option value="' . $p->id . '">' . htmlspecialchars($p->name) . '</option>';
        }
        
        
  echo '  </select>  </td>';
  */

                            echo '<td>'. $m->astronaute_id .'</td>';

                            echo '<td>'. $m->vaisseau_id .'</td>';


                            echo '<td>';
                            echo kernel\Component::display('button',['url' => '.?controller=Missions&action=edit&missions='.$m->id,
                            'label' => '<i class="fas fa-pen"></i>',
                            'type' =>'info', ]);
                            
                           

                             echo kernel\Component::display('button',['url' => '.?controller=Missions&action=delete&missions='.$m->id,
                            'label' => '<i class="fas fa-trash"></i>',
                            'type' =>'danger', ]);

                           
                           
                            echo '</td>';
                          

                            echo '</tr>';
                        }

                       
                        


                        ?>

                    </tbody>


               </table>
        
        </div>
     
<?php
include('app/Views/footer.php');