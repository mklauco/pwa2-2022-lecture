<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;

use Spatie\SimpleExcel\SimpleExcelWriter;
use Illuminate\Support\Facades\Storage;

use App\Models\User;

use Barryvdh\DomPDF\Facade\Pdf;

use Carbon\Carbon;

class TestController extends Controller
{
  
  public function sendTestEmail(){
    // Mail::to('martin.klauco@stuba.sk')->send(new TestEmail());
    $data['value'] = now();
    Mail::to('martin.klauco@stuba.sk')->queue(new TestEmail($data));
    return redirect()->back();
  }
  
  public function exportXls(){
    $pathToCsv = base_path().'/public/test-export.csv';
    $w = SimpleExcelWriter::create($pathToCsv, 'csv')->addRow([      'first_name' => 'John','last_name' => 'Doe',      ])->addRow(['first_name' => 'Jane','last_name' => 'Doe',]);
    return redirect()->back();
  }
  
  
  public function dateExamples(){
    $dateTime = Carbon::now(); // current UTC time
    $dateTime2 = Carbon::parse('2022-11-08 15:23:01', 'Europe/Berlin'); // generated time
    // $dateTime2 = Carbon::parse($request->date); // generated time
    $dateTime3 = Carbon::parse($dateTime2)->add('+5 days')->endOfDay(); // time modifiers
    
    
// users added in august this year
$start = Carbon::parse('2022-08-01')->startOfMonth();
$stop = Carbon::parse('2022-08-01')->endOfMonth();
// $users = User::where('created_at', '>=', $start)->where('created_at', '<=', $stop)->get();
$users = User::whereYear('created_at', 2022)->get();
    dd($dateTime, $dateTime2, $dateTime3->tz('Pacific/Chatham'), $users);
  }
  
// pridal som komentar


  // in controller
  public function exportPDF(){
    if(Auth::user()->is_admin == true){
      $users = User::where('id', '<=', 20)->get();
      $array = [];
      $data = compact('users', 'array');
      $pdf = Pdf::loadView('pdf.users', $data);
      return $pdf->download('users.pdf');
    } else {
      return redirect()->route('home');
    }
  }
  
}


