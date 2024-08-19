<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = ['room_code', 'size', 'air_conditioner', 'bathroom', 'television', 'bed', 'rent_price'];
}
