<?php

namespace App\Http\Controllers;

use Log;
use App\User;
use App\Http\Controllers\Controller;

class logController extends Controller {

    /**
     * Show the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        
        Log::info('Showing user: ' . $id);
        return $id;
        //return User::findOrFail($id);
    }

}
