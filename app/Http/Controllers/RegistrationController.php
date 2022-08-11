<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create(){
        return view('registration');
    }

    public function store(Request $request){
        dump($request);
        $valid = $request->validate([
            'name' => 'bail|required|alpha|max:50',
            'surname' => 'bail|required|alpha|max:50',
            'sex' => 'required',
            'group_number' => 'bail|required|digits:4||doesnt_end_with:0|numeric',
            'email' => 'bail|required|email|unique:App\Models\Enrollee,email',
            'points' => 'bail|required|between:100,300|digits:3|integer',
            'birth_date' => 'bail|required|between:1940,2022|digits:4|integer',
            'local' => 'required'
        ]);

        dd('success');
    }
}
