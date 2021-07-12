<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Worker extends Model
{

    public $timestamps=false;
    protected $fillable = [
        'username', 'password','email','CF','Nome','Cognome','Data_nascita'
    ];

    protected $hidden = [
        'password'
    ];

    public function carceres(){
        return $this->belongsToMany("App\Models\Carcere");
    }
}
