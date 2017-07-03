<?php

namespace App\Http\Controllers;

class FormTestController extends Controller
{
    public function getIndex() {
        $data = [];
        $data['sei'] = '山田';
        $data['mei'] = 'たろう';
        
        return view('form_test/index', $data);
    }
}
