<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class TechniqueArea extends Model
{
    protected $fillable = ['techniqueAreaName'];
    use HasFactory;
}
