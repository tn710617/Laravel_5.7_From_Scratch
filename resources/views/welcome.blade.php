@extends('layout')
@section('title', 'Welcome Page')
@section('content')
   <h1>Welcome here</h1>
   <ul>
    @foreach ($tasks as $task)
       <li>
           {{ $task }}
       </li>
    @endforeach
    </ul>
    @endsection
