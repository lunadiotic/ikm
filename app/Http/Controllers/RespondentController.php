<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RespondentServices;

class RespondentController extends Controller
{
    public $res;
    public function __construct()
    {
        $this->res = new RespondentServices();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.respondents.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->res->find($id);
        return view('pages.respondents.show', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->res->delete($id);
        $this->res->notif('Data has been deleted', 'success');
        return redirect()->route('setting.respondents.form.index');
    }

    /**
     * Datatable API
     */
    public function dataTable()
    {
        return $this->res->getTable();
    }
}
