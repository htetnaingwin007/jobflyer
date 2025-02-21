<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobttt;
use App\Models\Region;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jobs = Jobttt::orderby('id','desc')->paginate(10);
        $totalJobs = Jobttt::all()->count();
        return view('home',compact('jobs', 'totalJobs'));
    }
}
