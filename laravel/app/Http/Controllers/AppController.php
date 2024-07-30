<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    //
    public function index()
    {
        $name = "Wasim";
        $phone = "9876543210";
        $city = "LKO";

        //Using Compact
       // return view('welcome', compact("name","phone"));

       //Using Associative Array
       /*return view("welcome", array(
        'name' => $name,
        'phone' => $phone,
        'city' => $city
       ));*/

       //using with method
      // return view("welcome")->with('name', $name)->with('phone', $phone)->with('city', $city);

       $data['name'] = "Wasim";
       $data['phone'] = "9876543210";
       $data['city'] = "Delhi";
       return view("welcome", $data);
    }

    public function about()
    {
        return view('about');
    }
}