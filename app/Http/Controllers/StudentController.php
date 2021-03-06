<?php

namespace App\Http\Controllers;

use App\student;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students= Student::all();
       
        return view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('student.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa = new Student;
        $siswa->nama=$request->nama;
        $siswa->nisn=$request->nisn;
        
        $siswa->alamat=$request->alamat;
        

        $request->validate([
            'nama'=>'required',
            'nisn'=>'required|size:5',
            
        ]);

        $siswa->save();


        return redirect('/student')->with('status','Data Siswa berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        
        return view('student/show',['student'=>$student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
       

        return view('student.edit',['student'=>$student]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student $student)
    {
        Student::where('id',$student->id)
            ->update([
                'nama'=>$request->nama,
                'nisn'=>$request->nisn,
                'alamat'=>$request->alamat,
                
                
            ]);
            $request->validate([
                'nama'=>'required',
                'nisn'=>'required|size:5',
                
                
            ]);
            return redirect('/student')->with('status','Data Siswa berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        
        Student::destroy($student->id);
        return redirect('/user')->with('status','Data Siswa berhasil dihapus');
    }
}
