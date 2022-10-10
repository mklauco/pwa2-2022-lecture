<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleController extends Controller
{
    //
    public function view(){
        return view('secondView');
    }

    public function viewVariable(){
        $variable = 'Hello World!';
        return view('thirdView')->with('variable', $variable);
    }

    public function viewData(){
        $variable = 'Hello World!';
        $array = [0 => 'zero', 1 => 'first', 2 => 'second', 3 => 'third', 4 => 'fourth'];
        return view('fourthView')->with('variable', $variable)->with('array', $array);
    }

    public function viewParameter ($parameter){
        $result = $parameter*2;
        return view('fifthView')->with('parameter', $parameter)->with('result', $result);
    }

    public function sendData(Request $request){
        $email = $request->email;
        dd($email);
        return redirect()->route('fifth', ['parameter' => $email]);
    }
}

