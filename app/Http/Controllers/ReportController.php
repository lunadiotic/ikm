<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\Respondents;
use App\Models\RespondentsDetail;
use Illuminate\Http\Request;
use DB;

class ReportController extends Controller
{
    public function checkRespondent()
    {
        return view('pages.report.check');
    }

    public function dateRespondent(Request $request)
    {
        if ($request->get('semester') == 1) {
            $start = $request->get('tahun') . '-01-01';
            $end =  $request->get('tahun') . '-06-30';
            $semester = 'I';
            $tahun = $request->get('tahun');
        } else {
            $start = $request->get('tahun') . '-07-01';
            $end =  $request->get('tahun') . '-12-31';
            $semester = 'II';
            $tahun = $request->get('tahun');
        }

        return redirect()->route('report.respondent', [$start, $end, $semester, $tahun]);
    }

    public function getRespondent($start, $end, $semester, $tahun)
    {
        $semester = $semester;
        $tahun = $tahun;
        $male = Gender::where('code', 'l')->first();
        $female = Gender::where('code', 'p')->first();

        $quiz = Respondents::whereBetween('created_at', [$start, $end])->get();
        $age37max = Respondents::whereBetween('created_at', [$start, $end])->where('age', '>=', 37)->get();
        $age37min = Respondents::whereBetween('created_at', [$start, $end])->where('age', '<', 37)->get();
        $agetotal = $age37max->count() + $age37min->count();
        $genderl = Respondents::whereBetween('created_at', [$start, $end])->where('gender_id', $male->id)->get();
        $genderp = Respondents::whereBetween('created_at', [$start, $end])->where('gender_id', $female->id)->get();
        $gendertotal = $genderl->count() + $genderp->count();

        if (count($quiz)) {
            return view('pages.report.quiz', compact('quiz', 'age37max', 'age37min', 'agetotal', 'genderl', 'genderp', 'gendertotal', 'semester', 'tahun'));
        }
        return view('pages.report.null', compact('semester', 'tahun'));

        // $quiz = RespondentsDetail::where('respondents_id',1)->get();
        // dd($quiz[0]['score']);
    }

    public function getCheck()
    {
        return view('pages.report.check-year');
    }

    public function postCheck(Request $request)
    {
        $tahun = $request->get('tahun');

        return  redirect()->route('report', $tahun);
    }

    public function report($tahun)
    {
        $tahun = $tahun;
        $male = Gender::where('code', 'l')->first();
        $female = Gender::where('code', 'p')->first();
        
        $start1 = $tahun . '-01-01';
        $end1 =  $tahun . '-06-30';
        $quiz1 = Respondents::whereBetween('created_at', [$start1, $end1])->get();
        $age37max1 = Respondents::whereBetween('created_at', [$start1, $end1])->where('age', '>=', 37)->count();
        $age37min1 = Respondents::whereBetween('created_at', [$start1, $end1])->where('age', '<', 37)->count();
        $agetotal1 = $age37max1+$age37min1;
        $genderl1 = Respondents::whereBetween('created_at', [$start1, $end1])->where('gender_id', $male->id)->get();
        $genderp1 = Respondents::whereBetween('created_at', [$start1, $end1])->where('gender_id', $female->id)->get();
        $gendertotal1 = $genderl1->count() + $genderp1->count();
        
        $start2 = $tahun . '-07-01';
        $end2 =  $tahun . '-12-31';
        $quiz2 = Respondents::whereBetween('created_at', [$start2, $end2])->get();
        $age37max2 = Respondents::whereBetween('created_at', [$start2, $end2])->where('age', '>=', 37)->count();
        $age37min2 = Respondents::whereBetween('created_at', [$start2, $end2])->where('age', '<', 37)->count();
        $agetotal2 = $age37max2+$age37min2;
        $genderl2 = Respondents::whereBetween('created_at', [$start2, $end2])->where('gender_id', $male->id)->get();
        $genderp2 = Respondents::whereBetween('created_at', [$start2, $end2])->where('gender_id', $female->id)->get();
        $gendertotal2 = $genderl2->count() + $genderp2->count();

        if (count($quiz1) || count($quiz2)) {
            return view('pages.report.quiz-year', compact('quiz1', 'quiz2', 'age37max1', 'age37min1', 'age37max2', 'age37min2', 'agetotal1', 'agetotal2', 'genderl1', 'genderp1', 'genderl2', 'genderp2', 'gendertotal1', 'gendertotal2', 'tahun'));
        }
        return view('pages.report.null-year', compact('tahun'));
    }
}
