<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()) {
            switch (Auth::user()->level) {
                case 'admin':
                    return view('pages.admin.index');
                    break;
                case 'teacher':
                    return view('pages.teacher.index');
                    break;
                case 'student':
                    return view('pages.student.index');
                    break;
                default:
                return view('welcome');
                    break;
            }
        }else{
            return view('welcome');
        }
    }
}
