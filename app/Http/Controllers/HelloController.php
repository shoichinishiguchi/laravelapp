<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class HelloController extends Controller
{

    public function index(Request $request)
    {
        $data =
        [
            'msg' => 'これはBladeを利用したサンプルです。'
        ];
        return view('hello.index', $data);
    }
};

// public function index() {
//     global $head, $style, $body, $end;
//     $html = $head . tag('title','Hello/Index').$style.$body.tag('h1','Index').tag('p', 'this is Index page').'<a href="/hello/other">go to Other page</a>'.$end;
// return $html;
// }
// public function other() {
//     global $head, $style, $body, $end;

//     $html = $head . tag('title', 'Hello/Other'). $style . $body .tag('h1', 'Other') . tag('p', 'this is Other page') . $end;
//     return $html;
// }
