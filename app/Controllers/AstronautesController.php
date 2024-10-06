<?php

namespace app\Controllers;



class AstronautesController extends \kernel\Controller{

    public function index(){

        $astronautes = \app\Models\Astronautes::all();
        return new \kernel\View('astronautes/index.php',['astronautes'=>$astronautes]);

}

    public function edit(){
        $astronautes = \app\Models\Astronautes::find($_GET['astronautes']);
        return new \kernel\View('astronautes/form.php',['astronautes'=>$astronautes]);

    }

    public function update(){
        $astronautes = \app\Models\Astronautes::find($_POST['astronautes']);
        $astronautes->name=$_POST['name'];
        $astronautes->firstName=$_POST['firstName'];
        $astronautes->age=$_POST['age'];
        $astronautes->sexe_id=$_POST['sexe_id'];
        $astronautes->etatDeSante=$_POST['etatDeSante'];
        $astronautes->nombreAnneeDeService=$_POST['nombreAnneeDeService'];

        
        $astronautes->save();
        header('Location:.?controller=Astronautes&action=index');

    }

    public function delete(){
        $astronautes = \app\Models\Astronautes::find($_GET['astronautes']);
        return new \kernel\View('astronautes/confirmDelete.php',['astronautes'=>$astronautes]);
       
    }

    public function deleteConfirm(){
        $astronautes = \app\Models\Astronautes::find($_POST['astronautes']);
        $astronautes->delete();
        
        header('Location:.?controller=Astronautes&action=index');

    }

    public function addAstronautes(){
        $astronautes = \app\Models\Astronautes::all();
        return new \kernel\View('astronautes/addForm.php',['astronautes'=>$astronautes]);

    }


    public function add(){
        $astronautes = new \app\Models\Astronautes();

        $astronautes->name=$_POST['name'];
        $astronautes->firstName=$_POST['firstName'];
        $astronautes->age=$_POST['age'];
        $astronautes->sexe_id=$_POST['sexe_id'];
        $astronautes->etatDeSante=$_POST['etatDeSante'];
        $astronautes->nombreAnneeDeService=$_POST['nombreAnneeDeService'];

        $astronautes->add();
        header('Location:.?controller=Astronautes&action=index');



    }

}