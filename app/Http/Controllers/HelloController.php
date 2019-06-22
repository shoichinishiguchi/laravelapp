<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;

class HelloController extends Controller
{

    public function index(Request $request)
    {
        return view('hello.index', ['msg'=>'フォームを入力:']);
    }

    public function post(Request $request)
    {
        $validater = Validator::make($request->all(),[
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150',
        ]);
        if ($validater->fails()){
            return redirect('/hello')
                        ->withErrors($validater)
                        ->withInput();
        }
        return view('hello.index', ['msg'=>'正しく入力されました！']);
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
