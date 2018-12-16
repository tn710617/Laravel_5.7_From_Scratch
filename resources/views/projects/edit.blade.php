@extends('layout')
@section('content2')
    <h1>Edit Project</h1>

    <form method="POST" action="/projects/{{ $project->id }}">
        @method('PATCH')
        @csrf
       <div class="field">
           <label class="label" for="title">Title</label>

           <div class="control">
               <input type="text" class="input" name="title" placeholder="title" value=" {{ $project->title }}">
           </div>
       </div>


        <div class="field">
            <label class="label" for="description">Description</label>

            <div class="control">
                <textarea class="textarea" name="description" placeholder="">{{ $project->description }}</textarea>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update Project</button>
            </div>
        </div>
    </form>

    <form method="POST" action="/projects/{{ $project->id }}">
        @method('DELETE')
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Delete</button>
            </div>
        </div>
    </form>

@endsection
