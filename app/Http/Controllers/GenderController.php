<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;
use App\Services\GenderServices;
use App\Http\Requests\GenderRequest;

class GenderController extends Controller
{
    public $gender;
    public function __construct()
    {
        $this->gender = new GenderServices();
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.gender.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.gender.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GenderRequest $request)
    {
        $this->gender->create($request);
        $this->gender->notif('Data has been created', 'success');
        return redirect()->route('setting.gender.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->gender->find($id);
        return view('pages.gender.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->gender->find($id);
        return view('pages.gender.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GenderRequest $request, $id)
    {
        $this->gender->update($request, $id);
        $this->gender->notif('Data has been updated', 'success');
        return redirect()->route('setting.gender.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->gender->delete($id);
        $this->gender->notif('Data has been deleted', 'success');
        return redirect()->route('setting.gender.index');
    }

    /**
     * Datatable API
     */
    public function dataTable()
    {
        return $this->gender->getTable();
    }
}
