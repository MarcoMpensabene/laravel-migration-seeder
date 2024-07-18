<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function trainList()
    {
        $trainList = Train::all();
        return view('pages.trainList', compact("trainList"));
    }
}
