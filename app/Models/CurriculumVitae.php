<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class CurriculumVitae extends Model
{
    use HasFactory;
    use Searchable;

    public function unemployed(){
            return $this->belongsTo('App\Models\Unemployed', 'id', 'unemployed_id');
    }
}
