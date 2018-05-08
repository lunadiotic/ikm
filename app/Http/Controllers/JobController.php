<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Services\JobServices;
use App\Http\Requests\JobRequest;

class JobController extends Controller
{
    public $job;
    public function __construct()
    {
        $this->job = new JobServices();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.job.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.job.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobRequest $request)
    {
        $this->job->create($request);
        $this->job->notif('Data has been created', 'success');
        return redirect()->route('setting.job.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->job->find($id);
        return view('pages.job.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->job->find($id);
        return view('pages.job.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JobRequest $request, $id)
    {
        $this->job->update($request, $id);
        $this->job->notif('Data has been updated', 'success');
        return redirect()->route('setting.job.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->job->delete($id);
        $this->job->notif('Data has been deleted', 'success');
        return redirect()->route('setting.job.index');
    }
    
    /**
     * Datatable API
     */
    public function dataTable()
    {
        return $this->job->getTable();
    }
}
