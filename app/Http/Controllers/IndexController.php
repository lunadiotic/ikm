<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\QuizServices;


class IndexController extends Controller
{

    public $service;
    public function __construct()
    {
        $this->service = new QuizServices();
    }

    public function getCheck()
    {
        return view('pages.quiz.check');
    }

    public function postCheck(Request $request)
    {
        $this->validate($request, [
            'number' => 'required|numeric|digits_between:10,14|unique:respondents,no_register'
        ]);

        return $this->service->checkNumber($request);
    }

    public function getQuiz()
    {
        return $this->service->startQuiz();
    }

    public function postQuiz(Request $request)
    {
        return  $this->service->checkQuiz($request);
    }
}
