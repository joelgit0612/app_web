<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UrlsController extends Controller{

    public function create(string $id): View
    {
        return view('welcome');
    }




    public function store(string $id): View
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }




    public function show(string $id): View
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }

}



      
