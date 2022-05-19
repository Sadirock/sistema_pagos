<?php

namespace App\Http\Controllers;

use App\openDay;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OpenDayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\openDay  $openDay
     * @return \Illuminate\Http\Response
     */
    public function show(openDay $openDay, $id)
    {
        //No show, update in this case
        openDay::where('id_agent', $id)
            ->where('id_supervisor', Auth::id())
            ->whereDate('created_at', "=", Carbon::now()->toDateString())
            ->update(['opened_closed'=>'opened']);

        return redirect('supervisor/close');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\openDay  $openDay
     * @return \Illuminate\Http\Response
     */
    public function edit(openDay $openDay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\openDay  $openDay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, openDay $openDay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\openDay  $openDay
     * @return \Illuminate\Http\Response
     */
    public function destroy(openDay $openDay)
    {
        //
    }
}
