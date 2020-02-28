<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traffic;
use Illuminate\Http\Request;

class TrafficController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
				//
				$traffics = Traffic::all();
				return view('traffic.index',compact('traffics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
				//
				return view('traffic.create');
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
				$data = request()->validate([
					'name' => 'required|string|max:100'
				]);
				
				Traffic::create($data);
				return redirect()->route('traffic.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Traffic  $traffic
     * @return \Illuminate\Http\Response
     */
    public function show(Traffic $traffic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Traffic  $traffic
     * @return \Illuminate\Http\Response
     */
    public function edit(Traffic $traffic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Traffic  $traffic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Traffic $traffic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Traffic  $traffic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Traffic $traffic)
    {
				//
				$traffic->delete();
				return redirect()->route('traffic.index');
    }
}
