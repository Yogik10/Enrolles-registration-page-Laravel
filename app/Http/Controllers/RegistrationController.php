<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollee;
use App\Classes\Enrollee as EnrolleeClass;

class RegistrationController extends Controller
{
    public function create(){
        return view('registration');
    }

    public function store(Request $request){
        $valid = $request->validate([
            'name' => 'bail|required|alpha|max:50',
            'surname' => 'bail|required|alpha|max:50',
            'sex' => 'required',
            'group_number' => 'bail|required|max:5|min:2|alpha_num',
            'email' => 'bail|required|email|unique:App\Models\Enrollee,email',
            'points' => 'bail|required|between:100,300|digits:3|integer',
            'birth_year' => 'bail|required|between:1940,2022|digits:4|integer',
            'is_local' => 'required'
        ]);

        $enrollee = new EnrolleeClass($request['name'], $request['surname'], $request['sex'], $request['group_number'], $request['email'], $request['points'], $request['birth_year'], $request['is_local']);
        Enrollee::firstOrCreate([
            'name' => $enrollee->name,
            'surname' => $enrollee->surname,
            'sex' => $enrollee->sex,
            'group_number' => $enrollee->group_number,
            'email' => $enrollee->email,
            'points' => $enrollee->points,
            'birth_year' => $enrollee->birth_date,
            'is_local' => $enrollee->is_local]);

        return view('modal_success');
    }
}
