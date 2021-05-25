<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function kompiuteriai()
    {
       return view('category_pages.kompiuteriai');
    }
    public function smulki_technika()
    {
       return view('category_pages.smulki-technika');
    }
    public function sodo_technika()
    {
       return view('category_pages.sodo-technika');
    }
    public function stambi_technika()
    {
       return view('category_pages.stambi-technika');
    }
    public function valymo_technika()
    {
       return view('category_pages.valymo-technika');
    }

}

