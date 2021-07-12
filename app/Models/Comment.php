<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model{
    public $timestamps=false;
    public function carceres(){
        return $this->belongsTo("Carcere");
    }
    protected $fillable = [
        'testo','username','carcere_id'
    ];
}

?>





