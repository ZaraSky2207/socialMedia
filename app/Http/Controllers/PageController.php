<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{


    public function profile(Group $group)
    {

        //Model
        $name = $group->getName();


        //View
        return view('profile')->with(['name' => $name]);

    }






}
