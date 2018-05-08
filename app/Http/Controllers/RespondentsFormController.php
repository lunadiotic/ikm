<?php

namespace App\Http\Controllers;

use App\Models\RespondentsForm;
use Illuminate\Http\Request;
use App\Services\RespondentsFormServices;


class RespondentsFormController extends Controller
{
    public $respondents;
    public function __construct()
    {
        $this->respondents = new RespondentsFormServices();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.respondents.form.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.respondents.form.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->respondents->create($request);
        $this->respondents->notif('Data has been created', 'success');
        return redirect()->route('setting.respondents.form.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->respondents->find($id);
        return view('pages.respondents.form.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->respondents->find($id);
        return view('pages.respondents.form.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->respondents->update($request, $id);
        $this->respondents->notif('Data has been updated', 'success');
        return redirect()->route('setting.respondents.form.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->respondents->delete($id);
        $this->respondents->notif('Data has been deleted', 'success');
        return redirect()->route('setting.respondents.form.index');
    }

    /**
     * Datatable API
     */
    public function dataTable()
    {
        return $this->respondents->getTable();
    }
}
