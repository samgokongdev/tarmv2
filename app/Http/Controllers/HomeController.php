<?php

namespace App\Http\Controllers;

use App\Models\Tunggakan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sp2bulanini = Tunggakan::where('fg_jt', '=', 'OK')
            ->whereMonth('jt_daluarsa', date('m'))
            ->whereYear('jt_daluarsa', date('Y'))
            ->count();
        $sp2beluminputsppl = Tunggakan::where('tgl_sppl', '=', '0000-00-00')
            ->where('sp2', '!=', "")
            ->count();
        $np2beluminputsp2 = Tunggakan::where('sp2', '=', "")->count();
        $sp2outstanding = Tunggakan::where('fg_jt', '=', 'OK')
            ->where('sp2', '!=', "")
            ->count();
        return view('home', compact('sp2bulanini', 'sp2beluminputsppl', 'np2beluminputsp2', 'sp2outstanding'));
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
