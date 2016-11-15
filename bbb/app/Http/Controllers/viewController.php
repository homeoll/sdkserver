<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class viewController extends Controller {

    public function view(){
        //return 'view';
        return view('greeting', ['name' => 'James']);
        
    }
    
    
    
    
    public function show() {

        $rel = DB::table('cc')->get();
        print_r($rel);
    }

    public function select_json() {

        $sql = "SELECT lastlogininfo FROM user WHERE name='lucy';";
        $rel = DB::table('user')
                ->where('name', 'lucy')
                ->get();
        print_r($rel);
    }

    public function update_json() {

        $rel = DB::table('user')
                ->where('id', 1)
                ->update(['lastlogininfo->result' => 'xxx']);

        print_r($rel);
    }

}
