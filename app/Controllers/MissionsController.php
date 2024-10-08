<?php

namespace app\Controllers;



class MissionsController extends \kernel\Controller{

    public function index(){

        $missions = \app\Models\Missions::all();
       

        return new \kernel\View('missions/index.php',['missions'=>$missions]);

}

    public function edit(){
        $missions = \app\Models\Missions::find($_GET['missions']);
        $planetes = \app\Models\Planetes::all();
        $astronautes = \app\Models\Astronautes::all();
        $vaisseaux = \app\Models\Vaisseaux::all();
        return new \kernel\View('missions/form.php',['missions'=>$missions,'planetes'=>$planetes,'astronautes'=>$astronautes,'vaisseaux'=>$vaisseaux]);

    }

    public function update(){
        $missions = \app\Models\Missions::find($_POST['missions']);
        
        $missions->name=$_POST['name'];
        $missions->type=$_POST['type'];
        $missions->dateDeDebut=$_POST['dateDeDebut'];
        $missions->dateDeFin=$_POST['dateDeFin'];
        $missions->statut=$_POST['statut'];
        $missions->planete_id=$_POST['planete_id'];
        $missions->astronaute_id=$_POST['astronaute_id'];
        $missions->vaisseau_id=$_POST['vaisseau_id'];
        var_dump($missions->planete_id);
        $missions->save();
        header('Location:.?controller=Missions&action=index');

    }

    public function delete(){
        $missions = \app\Models\Missions::find($_GET['missions']);
        return new \kernel\View('missions/confirmDelete.php',['missions'=>$missions]);
       
    }

    public function deleteConfirm(){
        $missions = \app\Models\Missions::find($_POST['missions']);
        $missions->delete();
        
        header('Location:.?controller=Missions&action=index');

    }

    public function addMissions(){
        $missions = \app\Models\Missions::all();
        $planetes = \app\Models\Planetes::all();
        $astronautes = \app\Models\Astronautes::all();
        $vaisseaux = \app\Models\Vaisseaux::all();


        return new \kernel\View('missions/addForm.php',['missions'=>$missions,'planetes'=>$planetes,'astronautes'=>$astronautes,'vaisseaux'=>$vaisseaux]);

    }


    public function add(){
        $missions = new \app\Models\Missions();

        $missions->name=$_POST['name'];
        $missions->type=$_POST['type'];
        $missions->dateDeDebut=$_POST['dateDeDebut'];
        $missions->dateDeFin=$_POST['dateDeFin'];
        $missions->statut=$_POST['statut'];
        $missions->planete_id=$_POST['planete_id'];
        $missions->astronaute_id=$_POST['astronaute_id'];
        $missions->vaisseau_id=$_POST['vaisseau_id'];


        $missions->add();
        header('Location:.?controller=Missions&action=index');



    }

    public function api(){
        return new \kernel\View('missions/dashboard.php');

    }

}