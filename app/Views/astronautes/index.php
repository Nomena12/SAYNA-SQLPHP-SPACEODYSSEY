<?php

include('app/Views/header.php');



?>


        <div class="row">
        <h1>Listes des astronautes</h1>
            </div>

            <div class="row">
       <a class='leftLink' href=".?controller=Astronautes&action=addAstronautes">ADD NEW ASTRONAUTES</a>
            </div>

            <div class="row">

            <table class='table table-bordered table-striped'>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Age</th>
                        <th>Sexe</th>
                        <th>Sante</th>
                        <th>Anne de service</th>

                    </tr>

                </thead>
                    <tbody>
                        <?php
                        foreach($astronautes as $a){
                            
                            echo '<tr>';
                            echo '<td>'. $a->name .'</td>';
                          

                            echo '<td>'. $a->firstName .'</td>';
                         

                            echo '<td>'. $a->age .'</td>';

                            echo '<td>'. $a->sexe_id .'</td>';

                            echo '<td>'. $a->etatDeSante .'</td>';

                            echo '<td>'. $a->nombreAnneeDeService .'</td>';

                            echo '<td>';
                            echo kernel\Component::display('button',['url' => '.?controller=Astronautes&action=edit&astronautes='.$a->id,
                            'label' => '<i class="fas fa-pen"></i>',
                            'type' =>'info', ]);
                            
                           

                             echo kernel\Component::display('button',['url' => '.?controller=Astronautes&action=delete&astronautes='.$a->id,
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