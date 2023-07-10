<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentTestController extends Controller
{
    public function showComponent1()
    {
        $msg = 'メッセージです';
        return view('tests.component-test1', compact('msg'));
    }
    public function showComponent2()
    {
        return view('tests.component-test2');
    }
}
