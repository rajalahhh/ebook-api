<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me (){
    return [
        'Nama' => 'Raja Parningotan',
        'NIS' => '3103120185',
        'Kelas' => 'XII RPL 6',
        'Phone' => '081226035127'
        ];
    }
}
