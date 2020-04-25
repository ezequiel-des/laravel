@extends('layout')


@section('title','portfolio | '. $project->title)


@section('content')
    
    <div class="container">
    <h1>{{$project->title}}</h1>
        <div class="bg-white p-5 shadow rounded ">
            

            <p class="text-secondary">{{$project->description}}</p>
            <p class="text-black-50">{{$project->created_at->diffForHumans()}}</p>    

            <div class="d-flex justify-content-between align-items-center">
                <a href="{{route('projects.index')}}">Regresar</a>
                @auth  
                    <div class="btn-group btn-group-sm">
                        <a class="btn btn-primary" class="btn btn-primary" href="{{ route('projects.edit', $project)}}">Editar</a>

                        <a class="btn btn-danger" href="#" onclick="document.getElementById('delete-project').submit()">ELiminar </a>
                    </div>
                    <form class="d-none" method="POST" id="delete-project"action="{{ route('projects.destroy', $project) }}">
                        @csrf @method('DELETE')
                    </form>
                @endauth 
            </div>
            
        </div>

    </div>
@endsection
   
    