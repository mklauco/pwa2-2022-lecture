<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;

class TestController extends Controller
{
  // in controller
  public function sendTestEmail(){
    // Mail::to('martin.klauco@stuba.sk')->send(new TestEmail());
    $data['value'] = now();
    Mail::to('martin.klauco@stuba.sk')->queue(new TestEmail($data));
    return redirect()->back();
  }
}
