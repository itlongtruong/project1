<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = "t_user";
    public $timestamps = false;
    public $primaryKey = 'id';

    protected $fillable = ['pass', 'mail', 'phone'];

    public function ModelUser(){
        return $this->belongsTo('App\ModelUser','id','id');
    }
}
