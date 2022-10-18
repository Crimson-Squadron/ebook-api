<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    Public static function me(){
        return[
            'NIS' => 3103120163,
            'Name' => 'Nicolaus Bintang Nathanael',
            'Phone' => '085228950540',
            'Class' => 'XII RPL 5'
        ];
    }
}
