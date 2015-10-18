<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {
        $name = "Paolo <span style='color: red;'>Dávila</span>";

        return view('pages.about')->with([
            'first' => 'Paolo',
            'last' => 'Dávila'
        ]);
        //return view('pages.about')->with('name', $name);
        //return 'About Page';
    }
}
