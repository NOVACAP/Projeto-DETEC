<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\DemandController;

class Demand extends Model
{
    protected $fillable = ['dateInput' , 'dateDist'];
      
    use HasFactory;
}
