<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use App\Services\EducationServices;
use App\Http\Requests\EducationRequest;

class EducationController extends Controller
{
    public $education;
    public function __construct()
    {
        $this->education = new EducationServices();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.education.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.education.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EducationRequest $request)
    {
        $this->education->create($request);
        $this->education->notif('Data has been created', 'success');
        return redirect()->route('setting.education.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->education->find($id);
        return view('pages.education.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->education->find($id);
        return view('pages.education.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EducationRequest $request, $id)
    {
        $this->education->update($request, $id);
        $this->education->notif('Data has been updated', 'success');
        return redirect()->route('setting.education.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->education->delete($id);
        $this->education->notif('Data has been deleted', 'success');
        return redirect()->route('setting.education.index');
    }
    
    /**
     * Datatable API
     */
    public function dataTable()
    {
        return $this->education->getTable();
    }
}
