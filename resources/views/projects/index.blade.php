@extends('layout')
@section('content')
    <ul>
        @foreach($projects as $project)
            <li>
                {{ $project->title}}
            </li>
        @endforeach
    </ul>
@endsection
