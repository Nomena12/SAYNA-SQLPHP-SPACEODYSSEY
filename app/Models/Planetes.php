<?php

namespace app\Models;

use Kernel\Model;

class Planetes extends Model{
    protected static string $table = 'planetes';

    public function save(){
        $query = 'update planetes set name=:name, distanceDepuisTerre = :distanceDepuisTerre, circonference = :circonference where id=:id' ;
        \kernel\Connexion::execute($query,['name'=>$this->name,'distanceDepuisTerre'=>$this->distanceDepuisTerre,'circonference'=>$this->circonference,'id'=>$this->id]);
}

    public function  add(){
        $query = 'insert into planetes (name, distanceDepuisTerre, habitable,circonference) values (:name, :distanceDepuisTerre, :habitable, :circonference)';
        \kernel\Connexion::execute($query,['name'=>$this->name,'distanceDepuisTerre'=>$this->distanceDepuisTerre,'habitable'=>$this->habitable,'circonference'=>$this->circonference]);
    }

}