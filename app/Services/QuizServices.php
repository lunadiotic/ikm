<?php

namespace App\Services;

use App\Models\RespondentsForm;
use App\Models\Gender;
use App\Models\Education;
use App\Models\Job;
use App\Models\Information;
use App\Models\Respondents;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Validator; 

class QuizServices {

    public function checkNumber($request)
    {
        $number = $request->get('number'); //18050209081994
        
        $client = new Client();
        $response = $client->request('GET', 'http://ptsp.cirebonkota.go.id/api/daftar/pemohon/appkey/k4soo44w0804wos004ko4c44oog4cccg/nomor/' . $number, [
            'headers' => [
                'Accept' => 'application/json',
                'Content-type' => 'application/json'
            ]
        ]);

        // return $response->getBody();

        $result = json_decode($response->getBody());

        $data = null;

        if ($result->status) {
            session([
                'number' => $result->data[0]->nomor_daftar,
                'request' => $result->data[0]->pemohon,
                'company' => $result->data[0]->perusahaan,
                'permit_type' => $result->data[0]->jenis_ijin,
                'permit_sector' => $result->data[0]->bidang_ijin,
            ]);

            return redirect()->route('quiz');
        }

        return view('pages.quiz.error');
    }

    public function startQuiz()
    {
        if (!session()->get('number'))
        {
            return view('pages.quiz.error');
        }

        $gender = Gender::where('status', 1)->get();
        $education = Education::where('status', 1)->get();
        $job = Job::where('status', 1)->get();
        $information = Information::where('status', 1)->get();
        $quiz = RespondentsForm::where('parent_id', null)->where('status', 1)->get();

        return view('pages.quiz.quiz', compact('gender', 'education', 'job', 'information', 'quiz'));
    }

    public function checkQuiz($request)
    {
        $request['service_sector'] = session()->get('permit_sector');
        $request['service_type'] = session()->get('permit_type');

        $data = $request->except(['finish', 'responden_form_id']);
        $form = $request->get('responden_form_id');
        
        $res = Respondents::create($data);

        foreach ($form as $data)
        {
            $quiz = RespondentsForm::find($data);
            $input = [
                'respondents_form_id' => $quiz->id,
                'score' => $quiz->score
            ];

            $res->details()->create($input);
        }

        session()->forget('number');
        session()->forget('request');
        session()->forget('company');
        session()->forget('permit_type');
        session()->forget('permit_sector');

        return view('pages.quiz.success');
    }
}