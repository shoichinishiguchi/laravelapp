@extends('layouts.helloapp')

@section('title', 'Board.index')

@section('menubar')
  @parent
  ボード・ページ
@endsection

@section('content')
  <table>
    <tr><th>Title</th><th>Message</th><th>Name</th></tr>
    @foreach ($items as $item)
      <tr>
      <td>{{$item->title}}</td>
      <td>{{$item->message}}</td>  
      <td>{{$item->person->name}}</td>
      </tr>
    @endforeach
  </table>
@endsection

@section('footer')

copyright 2017 tuyano.
@endsection
