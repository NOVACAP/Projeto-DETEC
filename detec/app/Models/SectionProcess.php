<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionProcess extends Model
{
    use HasFactory;

    public function Process(){
        return $this->hasMany('App\Models\Process');
    }    
}
