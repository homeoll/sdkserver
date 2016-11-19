<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class cryptController extends Controller {

    /**
     * Store a secret message for the user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function crypt() {

        $str = 'xxxx?xx=df&o=1&ioi=11';
        $rel = Crypt::encrypt($str);
        return $rel;
    }

    public function decrypt() {
        
        //org str is xxxx?xx=df&o=1&ioi=11
        $str_tobe_decrypted = 'eyJpdiI6ImxQXC9wQmNKNDh2dVwvMW9ObEtpbXdGQT09IiwidmFsdWUiOiJ5eDEzcGg2NUUxdExOU0lkSkhYMWJJVk1aMVl1UnZQUHowaFZEZlNhNXlVPSIsIm1hYyI6IjFmMTA1Njg0ZDdjN2QxODZkZTM1NTA0MzM3NDliYTE3ODY5NzYzMTc2YTY0MTY1ZWZjYWVmNmI4ODg1YzBlMzAifQ==';

        $decrypted = Crypt::decrypt($str_tobe_decrypted);
        return $decrypted;
    }

}
