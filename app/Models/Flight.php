<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    //protected $table = 'my_flights'; --> IF THERE IS NO A TABLE WITH PLURAL NAME
    //protected $primaryKey = 'flight_id'; --> IF THERE IS NO A PRIMARY KEY WITH THE NAME = ID

}
