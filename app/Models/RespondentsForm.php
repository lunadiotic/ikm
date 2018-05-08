<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RespondentsForm extends Model
{
    protected $fillable = [
        'parent_id', 'code', 'title', 'status', 'score'
    ];

    public function childs()
    {
        return $this->hasMany(RespondentsForm::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(RespondentsForm::class, 'parent_id');
    }
}
