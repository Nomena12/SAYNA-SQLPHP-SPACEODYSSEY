<?php

namespace app\Models;

use Kernel\Model;

class Missions extends Model{
    protected static string $table = 'missions';

    public function save(){
        $query = 'update missions set name=:name, type = :type, dateDeDebut=:dateDeDebut, dateDeFin = :dateDeFin, statut=:statut, planete_id=:planete_id, astronaute_id=:astronaute_id, vaisseau_id=:vaisseau_id  where id=:id' ;
        \kernel\Connexion::execute($query,
        ['name'=>$this->name,
        'type'=>$this->type,
        'dateDeDebut'=>$this->dateDeDebut,
        'dateDeFin'=>$this->dateDeFin,
        'statut'=>$this->statut,
        'planete_id'=>$this->planete_id,
        'astronaute_id'=>$this->astronaute_id,
        'vaisseau_id'=>$this->vaisseau_id,
        'id'=>$this->id]);
}

    public function  add(){
        $query = 'insert into missions (name, type, dateDeDebut, dateDeFin, statut, planete_id,astronaute_id,vaisseau_id) 
        values (:name, :type, :dateDeDebut, :dateDeFin, :statut, :planete_id, :astronaute_id,:vaisseau_id)';
        \kernel\Connexion::execute($query,
        ['name'=>$this->name,
        'type'=>$this->type,
        'dateDeDebut'=>$this->dateDeDebut,
        'dateDeFin'=>$this->dateDeFin,
        'statut'=>$this->statut,
        'planete_id'=>$this->planete_id,
        'astronaute_id'=>$this->astronaute_id,
        'vaisseau_id'=>$this->vaisseau_id
        ]);
    }

}