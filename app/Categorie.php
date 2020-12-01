<?php

namespace App;

use App\Tache;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public $table = "categories";
    public function taches(){
        return $this->hasMany('App\Tache');
    }
}
