@extends('layout')


@section('title','Añadir nuevo libro')


@section('content')
    

    
   @include("partials.validation-errors")

   <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <h1>Booking information</h1>
            <form method="POST" action="{{ route('projects.store')}}">
                @csrf
                <div class="form-group">
                    <label>
                        Title<br>
                        <input class="form-control bg-light shadow-sm border-0" type="texto" name="title" value="{{ old('title')  }}">
                    </label>
                </div>

                <div class="form-group">
                    <label >
                        Applicant's name<br>
                        <input class="form-control bg-light shadow-sm border-0" type="texto" name="url" value="{{ old('url')  }}">
                    </label>
                </div>
                

                <div class="form-group">
                    <label >
                        Description<br>
                        
                        <textarea class="form-control bg-light shadow-sm border-0" type="texto" name="description" value="{{ old('description')  }}"></textarea>
                    </label>
                </div>
                <button class="btn btn-primary btn-lg ">Create Reservation</button>
            
            </form>    
        </div>
   </div>

    
   
@endsection