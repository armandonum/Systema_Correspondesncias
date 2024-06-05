<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use jenssegers\Mongodb\Eloquent\Model;


class Correspondencia extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'correspondencias';
    protected $fillable = ['fecha', 'remitente', 'asunto', 'cite', 'destinatario_id'];

}
