@extends('layout')
@section('content')
        @foreach($projects as $project)
                {{ $project->title}}
        @endforeach
@endsection
