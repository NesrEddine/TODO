<?php

namespace App;

use App\Categorie;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    public $table = "taches";
    public function categories(){
        return $this->belongsTo('App\Categorie');
    }
}
