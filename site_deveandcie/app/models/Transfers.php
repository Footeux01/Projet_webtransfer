<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Transfers extends Model
{
    protected $table = 'transfers';
    protected $primaryKey = 'id_transfer'; 
    public $timestamps = true;
    protected $fillable = [
        'file_name', 'exp_mail', 'dest_mail', 'dest_message'
    ];

}
