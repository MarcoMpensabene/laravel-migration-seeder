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
        $date = '2024-07-19% '; // data di oggi
        $trainList = Train::all();
        //$trainList = Train::where('Orario_di_partenza', 'LIKE ', $date)->get();
        return view('pages.trainList', compact("trainList"));
    }
}
