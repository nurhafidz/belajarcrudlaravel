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
        $student= Student::all();
        return view('motors.create',compact('student'));
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
        $motors->student_id=$request->student_id;
        $motors->warna=$request->warna;
        $motors->platno=$request->platno;
        

        $request->validate([
            'nama_kendaraan'=>'required',
            'student_id'=>'required',
            'platno'=>'required|min:3|max:8',
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
        
        return view('motors/show',compact('motors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Motors  $motors
     * @return \Illuminate\Http\Response
     */
    public function edit(Motors $motors)
    {
        $student= Student::all();
        return view('motors.edit',['motors'=>$motors],compact('student'));
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
                'student_id'=>$request->student_id,
                'platno'=>$request->platno,
                'warna'=>$request->warna,
                
                
                
            ]);
            $request->validate([
                'nama_kendaraan'=>'required',
                'student_id'=>'required',
                 'platno'=>'required|min:3|max:8',
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
