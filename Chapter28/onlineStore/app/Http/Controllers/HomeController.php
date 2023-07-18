<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Online Store";
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData["title"] = "About us - Stacy.iu";
        $viewData["subtitle"] =  "About us";
        $viewData["description"] =  "Stacy.iu is a modern pen and stationery shop located in Semarang, Indonesia. The art of writing comes to life, offering a selection of writing instruments & accessories, notebooks, paper products and everyday gifting items.";
        $viewData["author"] = "Developed by: Annisa Nikke A";
        return view('home.about')->with("viewData", $viewData);
    }
}
