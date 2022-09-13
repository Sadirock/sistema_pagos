<?php

namespace App\Http\Controllers;

use App\db_close_day;
use App\db_credit;
use App\db_summary;
use App\db_supervisor_has_agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class cashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        $sql = DB::select('SELECT *,  (
            SELECT  created_at AS closed
            FROM close_day
            WHERE (id_agent = id_user_agent) AND id_agent 
            IN (SELECT id_agent
                FROM close_day
                GROUP BY id_agent ) ORDER BY closed desc LIMIT 1) AS closed
            FROM agent_has_supervisor  as ahs 
            INNER JOIN wallet ON ahs.id_wallet = wallet.id
            WHERE ahs.id_supervisor = '. Auth::id());

        $data2 = db_supervisor_has_agent::where('id_supervisor',Auth::id())
            ->join('wallet','id_wallet','=','wallet.id')            
            ->get();

        $sum = db_supervisor_has_agent::where('id_supervisor',Auth::id())
            ->join('wallet','id_wallet','=','wallet.id')
            ->sum('agent_has_supervisor.base');
        $report = db_close_day::where('id_supervisor',Auth::id())->orderBy('id','desc')->toSql();

        $report = DB::table('close_day AS cd')
            ->join('agent_has_supervisor AS asu', 'id_agent','=', 'asu.id_user_agent')
            ->join('wallet AS w', 'w.id','=', 'asu.id_wallet')            
            ->where('cd.id_supervisor' , '=', Auth::id())
            ->select('*', 'cd.created_at as created')
            ->orderBy('cd.id','desc')            
            ->get();

           // dd($report);
       
        $data = array(
            'clients' => $sql,
            'report' => $report,
            'sum' => $sum
        );
      // dd($data);
        return view('supervisor_cash.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = db_supervisor_has_agent::where('id_supervisor',Auth::id())
            ->join('wallet','id_wallet','=','wallet.id')
            ->get();

        $data = array(
            'wallet' => $data
        );

        return view('supervisor_cash.create',$data);
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
    public function show($id)
    {
        //
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
