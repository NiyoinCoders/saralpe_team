<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiResponseController extends Controller
{
    public function create()
    {

        $data = [
            'column1' => 'value1',
            'column2' => 'value2',
            // add more column-value pairs here
        ];
        
        YourModelName::create($data);
        return view('product.create');
    }
}
