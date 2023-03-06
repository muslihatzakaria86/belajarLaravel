<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgamaController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Data Agama'
        ];
        return view('agama.index', $data);
    }
}
