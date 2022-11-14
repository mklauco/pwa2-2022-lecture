<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getUserList(){
        $table = DB::table('users')->select('id', 'last_name')->get();
        $list = [];
        foreach($table as $t){
            $list[$t->id] = $t->last_name;
        }
        return $list;
    }
}
