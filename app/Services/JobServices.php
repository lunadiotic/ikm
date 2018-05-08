<?php

namespace App\Services;

use App\Models\Job;
use App\Services\GlobalServices;

class JobServices extends GlobalServices {

    public function create($request)
    {
        $data = Job::create($request->all());
        return $data;
    }

    public function find($id)
    {
        $data = Job::findOrFail($id);
        return $data;
    }

    public function update($request, $id)
    {
        $data = Job::findOrFail($id);
        return $data->update($request->all());
    }

    public function delete($id)
    {
        $data = Job::destroy($id);
        return $data;
    }

    public function getTable()
    {
        $model = Job::query();
        return $this->dataTable($model)
                ->addColumn('status', function ($model) {
                    return $model->status == 1 ? 'Aktif' : 'Tidak Aktif';
                })
                ->addColumn('action', function($model) { 
                    return view('layouts.partials._action', [
                        'model' => $model,
                        'show_url' => route('setting.job.show', $model->id),
                        'edit_url' => route('setting.job.edit', $model->id),
                        'delete_url' => route('setting.job.destroy', $model->id)
                    ]);
                })
                ->rawColumns(['action'])
                ->make(true);
    }
}