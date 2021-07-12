<?php

namespace app\models;

use Illuminate\Database\Eloquent\Model;

class Carcere extends Model{
    public $timestamps=false;
    public function workers(){
        return $this->belongsToMany("App\Models\Worker");
    }
    public function comments(){
        return $this->hasMany("Comment");
    }
    public function prisoners(){
        return $this->hasMany("Prisoner");
    }
    
}

?>