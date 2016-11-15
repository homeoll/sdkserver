<?php

namespace App\Http\Controllers;

use Log;
use App\User;
use App\Http\Controllers\Controller;

class dbController extends Controller {

    /**
     * Show the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function errorlog() {

        //return "errorlog";
        $id = "xxx";
        Log::info('Showing user: ' . $id);

        //return User::findOrFail($id);
    }

}
