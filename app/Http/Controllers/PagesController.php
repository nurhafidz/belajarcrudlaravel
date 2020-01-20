<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PagesController extends Controller
{
    public function home()
    {
        return view ('home') ;
    }
    public function json(){
        return Datatables::of(User::all())->make(true);
    }

    public function index(){
        return view('list_users');
    }
}
