<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index()
    {
        return view('pages.index');
    }

    function about()
    {
        return view('pages.about');
    }

    function signup()
    {
        return view('pages.signup');
    }

    function login()
    {
        return view('pages.login');
    }

    function contact()
    {
        return view('pages.contact');
    }

    function viewmessage()
    {
        return view('pages.viewmessage');
    }
    function card()
    {
        return view('pages.card');
    }

    function store(Request $request)
    {

        $name = $request->name;

        return redirect()->route('thanks', ['name' => $name]);
    }

    function thanks($name, Request $request)
    {
        return view('pages.thankyou')->with(compact('name'));
    }


/*function display()
{
    Route::post('/contact', function () {
        $data = request()->all();

        echo "Email: " . $data['email'] . '<br>';
        echo "Body:  " . $data['body'];
    });
}*/
}


