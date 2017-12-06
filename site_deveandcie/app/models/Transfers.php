<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Transfers extends Model
{
    protected $table = 'transfers';
    protected $primaryKey = 'id_transfer'; 
    public $timestamps = true;

}
