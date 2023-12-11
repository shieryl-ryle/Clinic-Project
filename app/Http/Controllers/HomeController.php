<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id())
        {
            $userType=Auth()->user()->userType;


            if($userType=='doctor')
            {
                return view('doctor.doctorhome');
            }

            if($userType=='nurse')
            {
                return view('nurse.nursehome');
            }

            // if($userType=='employee')
            // {
            //     return view('employee.employeehome');
            // }

            else if(($userType=='student'))
            {
                return view('dashboard');
            }

            else
            {
                return redirect()->back();
            }
        }
    }
}
