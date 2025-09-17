<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function projects()
    {
        return view('projects');
    }

    public function contact()
    {
        if ($_POST) {
            # code...
        }
        return view('contact');
    }

    // Page contact convertir le POST (tableau associatif)dans un objet, cest un traitement deja
    public function contactForm(Request $request)
    {
        // print_r($_POST);
        return view("contact", ['data' => $request]);
    }
}
