<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(int $id)
    {
        $data = [
            'msg' => 'id = ' . $id,
        ];
        return view('hello.index', $data);
    }

    public function other()
    {
        return redirect()->route('hello');
    }
}
