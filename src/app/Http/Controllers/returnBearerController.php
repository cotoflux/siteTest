<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class returnBearerController extends Controller
{
    public function check()
    {
        $response = Storage::get('hdllToken');
        return $response;
    }

}
