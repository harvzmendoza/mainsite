<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Office;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $offices = Office::paginate();
        return view('home', compact('offices'));
    }
}
