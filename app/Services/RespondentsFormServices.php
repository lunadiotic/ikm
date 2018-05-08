<?php

namespace App\Services;

use App\Models\RespondentsForm;
use App\Services\GlobalServices;

class RespondentsFormServices extends GlobalServices {

    public function create($request)
    {
        $respondents = RespondentsForm::create([
            'code' => $request->code,
            'title' => $request->title,
            'status' => $request->status,
        ]);

        $answerScore = array_combine($request->get('answer_title'), $request->get('answer_score'));

        foreach ($answerScore as $key => $value)
        {
            $answer = [
                'title' => $key,
                'score' => $value,
            ];

            $respondents->childs()->create($answer);
        }
    }

    public function find($id)
    {
        $data = RespondentsForm::findOrFail($id);
        return $data;
    }

    public function update($request, $id)
    {

        $respondents = RespondentsForm::findOrFail($id);
        $respondents->update([
            'code' => $request->code,
            'title' => $request->title,
            'status' => $request->status,
        ]);

        RespondentsForm::where('parent_id', $id)->delete();

        $answerScore = array_combine($request->get('answer_title'), $request->get('answer_score'));

        foreach ($answerScore as $key => $value)
        {
            $answer = [
                'title' => $key,
                'score' => $value,
            ];

            $respondents->childs()->create($answer);
        }
    }

    public function delete($id)
    {
        RespondentsForm::where('parent_id', $id)->delete();
        RespondentsForm::destroy($id);
        return;
    }

    public function getTable()
    {
        $model = RespondentsForm::where('parent_id', null);
        return $this->dataTable($model)
                ->addColumn('status', function ($model) {
                    return $model->status == 1 ? 'Aktif' : 'Tidak Aktif';
                })
                ->addColumn('action', function($model) { 
                    return view('layouts.partials._action', [
                        'model' => $model,
                        'show_url' => route('setting.respondents.form.show', $model->id),
                        'edit_url' => route('setting.respondents.form.edit', $model->id),
                        'delete_url' => route('setting.respondents.form.destroy', $model->id)
                    ]);
                })
                ->rawColumns(['action'])
                ->make(true);
    }
}