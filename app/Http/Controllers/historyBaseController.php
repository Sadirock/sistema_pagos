<?php

namespace App\Http\Controllers;

use App\db_supervisor_has_agent;
use App\HistoryBase;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class historyBaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('history.indexBase');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {        
        //
        $id_wallet = $id;
        $date_start = $request->date_start;

        if (!isset($date_start)) {
            return 'Fecha inicial vacia';
        };
     
        // $data = HistoryBase::whereDate('created_at', Carbon::createFromFormat('d/m/Y', $date_start)
        // ->toDateString())
        // ->where('id_supervisor', Auth::id())->get();

        $data = HistoryBase::whereDate('history_bases.created_at', Carbon::createFromFormat('d/m/Y', $date_start)
            ->toDateString())
            ->join('users', 'users.id', '=', 'id_user_agent')
            ->select('history_bases.*', 'users.name')
            ->where('id_supervisor', Auth::id())
        ->get();

        if ($data->isEmpty()){
            return 'No existen cambios de base para esta fecha';
        }

        $data_all = array(
            'data' => $data
        );
        
        return view('history.baseList', $data_all);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
