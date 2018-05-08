<?php

namespace App\Services;

use App\Models\Education;
use App\Services\GlobalServices;

class EducationServices extends GlobalServices {

    public function create($request)
    {
        $data = Education::create($request->all());
        return $data;
    }

    public function find($id)
    {
        $data = Education::findOrFail($id);
        return $data;
    }

    public function update($request, $id)
    {
        $data = Education::findOrFail($id);
        return $data->update($request->all());
    }

    public function delete($id)
    {
        $data = Education::destroy($id);
        return $data;
    }

    public function getTable()
    {
        $model = Education::query();
        return $this->dataTable($model)
                ->addColumn('status', function ($model) {
                    return $model->status == 1 ? 'Aktif' : 'Tidak Aktif';
                })
                ->addColumn('action', function($model) { 
                    return view('layouts.partials._action', [
                        'model' => $model,
                        'show_url' => route('setting.education.show', $model->id),
                        'edit_url' => route('setting.education.edit', $model->id),
                        'delete_url' => route('setting.education.destroy', $model->id)
                    ]);
                })
                ->rawColumns(['action'])
                ->make(true);
    }
}