@extends('layouts.helloapp')

@section('title','Show')

@section('menubar')
  @parent
  詳細ページ
@endsection

@section('content')
  @if ($items != null)
    @foreach($items as  $item)
    <table style="width:400px;">
    <tr><th style="min-width:50px;">id: </th><td style="min-width:50px;">{{$item->id}}</td>
    <th style="min-width:50px;">name: </th><td style="min-width:180px;">{{$item->name}}</td>
    <th style="min-width:50px;">mail: </th><td style="min-width:180px;">{{$item->mail}}</td>
    <th style="min-width:50px;">age: </th><td style="min-width:50px;">{{$item->age}}</td></tr>
    </table>
    @endforeach
  @endif
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
