<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\InfoServices;
use App\Http\Requests\InfoRequest;

class InfoController extends Controller
{
    public $info;
    public function __construct()
    {
        $this->info = new InfoServices();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.info.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.info.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InfoRequest $request)
    {
        $this->info->create($request);
        $this->info->notif('Data has been created', 'success');
        return redirect()->route('setting.info.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->info->find($id);
        return view('pages.info.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->info->find($id);
        return view('pages.info.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InfoRequest $request, $id)
    {
        $this->info->update($request, $id);
        $this->info->notif('Data has been updated', 'success');
        return redirect()->route('setting.info.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->info->delete($id);
        $this->info->notif('Data has been deleted', 'success');
        return redirect()->route('setting.info.index');
    }
    
    /**
     * Datatable API
     */
    public function dataTable()
    {
        return $this->info->getTable();
    }
}
