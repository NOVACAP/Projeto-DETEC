<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    use HasFactory;

public function SectionProcess(){
    return $this->belongsTo('App\Models\SectionProcess');
}    
}
