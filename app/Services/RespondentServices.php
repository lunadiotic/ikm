<?php

namespace App\Services;

use App\Models\Respondents;
use App\Services\GlobalServices;

class RespondentServices extends GlobalServices {

    public function find($id)
    {
        $data = Respondents::findOrFail($id);
        return $data;
    }

    public function delete($id)
    {
        Respondents::where('parent_id', $id)->delete();
        Respondents::destroy($id);
        return;
    }

    public function getTable()
    {
        $model = Respondents::query();
        return $this->dataTable($model)
                ->addColumn('action', function($model) { 
                    return view('layouts.partials._action', [
                        'model' => $model,
                        'show_url' => route('respondent.show', $model->id),
                        'edit_url' => route('respondent.edit', $model->id),
                        'delete_url' => route('respondent.destroy', $model->id)
                    ]);
                })
                ->rawColumns(['action'])
                ->make(true);
    }
}