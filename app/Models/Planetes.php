<?php

namespace app\Models;

use Kernel\Model;

class Planetes extends Model{
    protected static string $table = 'planetes';

    public function save(){
        $query = 'update planetes set name=:name, distanceDepuisTerre = :distanceDepuisTerre where id=:id' ;
        \kernel\Connexion::execute($query,['name'=>$this->name,'distanceDepuisTerre'=>$this->distanceDepuisTerre,'id'=>$this->id]);
}



}