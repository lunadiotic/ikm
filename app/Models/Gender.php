<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $fillable = [
        'code', 'title', 'status'
    ];

    public function quiz()
    {
        return $this->hasMany(Respondents::class);
    }
}
