<?php

namespace app\Controllers;



class PlanetesController extends \kernel\Controller{

    public function index(){

        $planetes = \app\Models\Planetes::all();
        return new \kernel\View('planetes/index.php',['planetes'=>$planetes]);

}

}