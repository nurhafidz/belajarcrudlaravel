<?php

namespace App\Http\Controllers;

use App\Motors;
use App\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motors= motors::all();
        return view('motors.index',compact('motors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('motors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $motors = new Motors;
        $motors->nama_kendaraan=$request->nama_kendaraan;
        $motors->warna=$request->warna;

        $request->validate([
            'nama_kendaraan'=>'required',
            'warna'=>'required',
            
        ]);

        $motors->save();


        return redirect('/motors')->with('status','Data Kendaraan Siswa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Motors  $motors
     * @return \Illuminate\Http\Response
     */
    public function show(Motors $motors)
    {
        $motor2= Student::all();
        return view('motors/show',compact('motors','motor2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Motors  $motors
     * @return \Illuminate\Http\Response
     */
    public function edit(Motors $motors)
    {
        return view('motors.edit',['motors'=>$motors]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Motors  $motors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Motors $motors)
    {
        Motors::where('id',$motors->id)
            ->update([
                'nama_kendaraan'=>$request->nama_kendaraan,
                'warna'=>$request->warna,
                
                
                
            ]);
            $request->validate([
                'nama_kendaraan'=>'required',
                'warna'=>'required',
                
            ]);
            return redirect('/motors')->with('status','Data Kendaraan Siswa berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Motors  $motors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Motors $motors)
    {
        Motors::destroy($motors->id);
        return redirect('/motors')->with('status','Data Kendaraan Siswa berhasil dihapus');
    }
}
