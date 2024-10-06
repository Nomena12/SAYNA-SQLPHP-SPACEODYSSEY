<?php

namespace app\Models;

use Kernel\Model;

class Astronautes extends Model{
    protected static string $table = 'astronautes';

    public function save(){
        $query = 'update astronautes set name=:name, firstName = :firstName, age=:age, sexe_id = :sexe_id, etatDeSante=:etatDeSante, nombreAnneeDeService=:nombreAnneeDeService  where id=:id' ;
        \kernel\Connexion::execute($query,
        ['name'=>$this->name,
        'firstName'=>$this->firstName,
        'age'=>$this->age,
        'sexe_id'=>$this->sexe_id,
        'etatDeSante'=>$this->etatDeSante,
        'nombreAnneeDeService'=>$this->nombreAnneeDeService,
        'id'=>$this->id]);
}

    public function  add(){
        $query = 'insert into astronautes (name, firstName, age, sexe_id, etatDeSante, nombreAnneeDeService) 
        values (:name, :firstName, :age, :sexe_id, :etatDeSante, :nombreAnneeDeService)';
        \kernel\Connexion::execute($query,
        ['name'=>$this->name,
        'firstName'=>$this->firstName,
        'age'=>$this->age,
        'sexe_id'=>$this->sexe_id,
        'etatDeSante'=>$this->etatDeSante,
        'nombreAnneeDeService'=>$this->nombreAnneeDeService]);
    }

}