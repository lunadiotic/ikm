<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RespondentsDetail extends Model
{
    protected $fillable = [
        'respondents_id','respondents_form_id','score'
    ];

    public function resopndent()
    {
        return $this->belongsTo(Respondents::class, 'respondents_id');
    }

    public function quiz()
    {
        return  $this->belongsTo(RespondentsForm::class, 'respondents_form_id', 'id');
    }
}
