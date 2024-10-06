<?php

namespace app\Controllers;



class PlanetesController extends \kernel\Controller{

    public function index(){

        $planetes = \app\Models\Planetes::all();
        return new \kernel\View('planetes/index.php',['planetes'=>$planetes]);

}

    public function edit(){
        $planetes = \app\Models\Planetes::find($_GET['planetes']);
        return new \kernel\View('planetes/form.php',['planetes'=>$planetes]);

    }

    public function update(){
        $planetes = \app\Models\Planetes::find($_POST['planetes']);
        $planetes->name=$_POST['name'];
        $planetes->distanceDepuisTerre=$_POST['distanceDepuisTerre'];
        $planetes->circonference=$_POST['circonference'];
        
        $planetes->save();
        header('Location:.?controller=Planetes&action=index');

    }

    public function delete(){
        $planetes = \app\Models\Planetes::find($_GET['planetes']);
        return new \kernel\View('planetes/confirmDelete.php',['planetes'=>$planetes]);
       
    }

    public function deleteConfirm(){
        $planetes = \app\Models\Planetes::find($_POST['planetes']);
        $planetes->delete();
        
        header('Location:.?controller=Planetes&action=index');

    }

    public function addPlanetes(){
        $planetes = \app\Models\Planetes::all();
        return new \kernel\View('planetes/addForm.php',['planetes'=>$planetes]);

    }


    public function add(){
        $planetes = new \app\Models\Planetes();

        $planetes->name=$_POST['name'];
        $planetes->distanceDepuisTerre=$_POST['distanceDepuisTerre'];
        $planetes->circonference=$_POST['circonference'];
        $planetes->habitable=$_POST['habitable'];

        $planetes->add();
        header('Location:.?controller=Planetes&action=index');



    }

}