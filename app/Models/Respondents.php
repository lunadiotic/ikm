<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Respondents extends Model
{
    protected $fillable = [
        'service_sector', 'service_type', 'no_register', 'age', 'year', 'comment',
        'gender_id', 'education_id', 'job_id', 'information_id', 
    ];

    public function details()
    {
        return $this->hasMany(RespondentsDetail::class);
    }
}
