<?php

namespace App\Services;

use App\Models\Gender;
use App\Services\GlobalServices;

class GenderServices extends GlobalServices {

    public function create($request)
    {
        $data = Gender::create($request->all());
        return $data;
    }

    public function find($id)
    {
        $data = Gender::findOrFail($id);
        return $data;
    }

    public function update($request, $id)
    {
        $data = Gender::findOrFail($id);
        return $data->update($request->all());
    }

    public function delete($id)
    {
        $data = Gender::destroy($id);
        return $data;
    }

    public function getTable()
    {
        $model = Gender::query();
        return $this->dataTable($model)
                ->addColumn('status', function ($model) {
                    return $model->status == 1 ? 'Aktif' : 'Tidak Aktif';
                })
                ->addColumn('action', function($model) { 
                    return view('layouts.partials._action', [
                        'model' => $model,
                        'show_url' => route('setting.gender.show', $model->id),
                        'edit_url' => route('setting.gender.edit', $model->id),
                        'delete_url' => route('setting.gender.destroy', $model->id)
                    ]);
                })
                ->rawColumns(['action'])
                ->make(true);
    }
}