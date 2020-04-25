@extends('layout')


@section('title','Añadir nuevo libro')


@section('content')
    <div class="container">
        <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
        
        @include("partials.validation-errors")
        <form  class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('projects.update',$project)}}">
            @csrf @method('PATCH')
            <h1 class="display-4">Edit book</h1>
            <hr>
            <div class="form-group">
                <label>
                    Title of book<br>
                    <input class="form-control bg-light shadow-sm border-0 px-3 col-15" type="texto" name="title" value="{{ old('title', $project->title)  }}">
                </label>
            </div>
            <div class="form-group">
                <label >
                    Applicant's name<br>
                    <input class="form-control bg-light shadow-sm border-0 " type="texto" name="url" value="{{ old('url',  $project->url)   }}">
                </label>
            </div>
            <div class="form-group">
                <label >
                    Description of the book<br>
                    
                    <textarea class="form-control bg-light shadow-sm border-0" type="texto" name="description" >{{  old('description', $project->description)  }}</textarea>
                </label>
            </div>

          
            
            <button class="btn btn-danger btn-lg btn-block">Actualizar Libro</button>
            <a class="btn btn-primary btn-lg btn-block" href="{{route('projects.index')}}">Cancelar</a>
        
        </form>
        </div>
        </div>
    
    </div>
    
   
@endsection