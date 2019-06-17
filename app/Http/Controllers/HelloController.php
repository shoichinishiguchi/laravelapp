<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class HelloController extends Controller
{

    public function index()
    {
        $data = ['items'=>['one','two','three','four','five','six']];
        return view('hello.index',$data);
    }

    public function post(Request $request)
    {
        $msg = $request->msg;
        $data = [
            'msg'=> $msg
        ];
        return view('hello.index', $data);
    }

}

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
