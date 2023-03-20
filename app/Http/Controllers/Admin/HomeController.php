<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Servies;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $servies_count = Servies::all()->count();
        return view('admin.home.index', ['servies_count' => $servies_count]);
    }
}
