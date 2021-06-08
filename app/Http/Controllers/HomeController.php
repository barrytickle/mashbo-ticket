<?php

namespace App\Http\Controllers;

use App\Models\Draw;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        $draw = Draw::get();
        return view('draw', ['draws' => $draw]);
    }
}
