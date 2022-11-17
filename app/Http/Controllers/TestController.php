<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;

use Spatie\SimpleExcel\SimpleExcelWriter;
use Illuminate\Support\Facades\Storage;
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
    $w = SimpleExcelWriter::create($pathToCsv, 'csv')->addRow([
      'first_name' => 'John',
      'last_name' => 'Doe',
      ])->addRow([
        'first_name' => 'Jane',
        'last_name' => 'Doe',
      ]);
      return redirect()->back();
    }
  }
  