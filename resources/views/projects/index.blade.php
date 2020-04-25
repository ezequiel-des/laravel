@extends('layout')
@section('title','Portfolio')
@section('content')

    <div class="container">
        <div class="d-flex justify-content-between align-items-center"> 
            <h1 class="display-4">books reserved</h1>
            @auth
            <a class="btn btn-primary" href="{{ route('projects.create') }}">Add another one</a>
             @endauth
        </div>
       
       
        <ul class="list-group">
            <h3 class="lead ">All the list is here, is provided forbidden modify it, only if you <br>
            going to make a reservation of a book, you can modify the information.</h3>
            <h3 class="lead text-secondary ">Click one of this, and See the Details</h3>

            @forelse($projects as $project)
                <li class="list-group-item border-0 mb-3 shadow-sm">
                    <a class="d-flex justify-content-between align-items-center" href="{{route('projects.show',$project)}}">
                        <span class="text-secondary font-weight-bold">
                            
                        {{$project->title }}
                        </span>    
                        <span class="text-black-50">
                        Applied Date__
                        {{$project->created_at->format('d/m/y')}}
                        </span>
                        
                    </a>
                </li>
            @empty
                <li class="list-group-item border-0 mb-3 shadow-sm">No hay projectos Para mostrar</li>
            @endforelse
            {{$projects->links()}}
        </ul>
    </div>
    
@endsection