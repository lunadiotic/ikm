<?php

namespace App\Services;

use App\Models\Information;
use App\Services\GlobalServices;

class InfoServices extends GlobalServices {

    public function create($request)
    {
        $data = Information::create($request->all());
        return $data;
    }

    public function find($id)
    {
        $data = Information::findOrFail($id);
        return $data;
    }

    public function update($request, $id)
    {
        $data = Information::findOrFail($id);
        return $data->update($request->all());
    }

    public function delete($id)
    {
        $data = Information::destroy($id);
        return $data;
    }

    public function getTable()
    {
        $model = Information::query();
        return $this->dataTable($model)
                ->addColumn('status', function ($model) {
                    return $model->status == 1 ? 'Aktif' : 'Tidak Aktif';
                })
                ->addColumn('action', function($model) { 
                    return view('layouts.partials._action', [
                        'model' => $model,
                        'show_url' => route('setting.info.show', $model->id),
                        'edit_url' => route('setting.info.edit', $model->id),
                        'delete_url' => route('setting.info.destroy', $model->id)
                    ]);
                })
                ->rawColumns(['action'])
                ->make(true);
    }
}