<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prisoner extends Model{
    public $timestamps=false;
    public function carceres(){
        return $this->belongsTo("Carcere");
    }
}

?>
