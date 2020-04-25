@extends('layout')

@section('title','Contact')
    


@section('content')

    <div class="container"> 
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                
        
                <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('messages.store')}}">
                    @csrf
                    <h1 class="display-4">Contact us</h1>
                    <div class="form-group">
                        <input class="form-control bg-light shadow-sm border-0" name="name" placeholder="Name" value="{{ old('name')}}"><br>
                        {!! $errors ->first('name','<small>:message</small><br>') !!}
                    </div>  
                    
                    <div class="form-group">
                        <input class="form-control bg-light shadow-sm border-0" type="email" name="email" placeholder="Email" value="{{ old('email')}}"><br>
                        {!! $errors ->first('email','<small>:message</small><br>') !!}
                    </div>

                    <div class="form-group">
                        <input class="form-control bg-light shadow-sm border-0" name="subject" placeholder="subject" value="{{ old('subject')}}"><br>
                        {!! $errors ->first('subject','<small>:message</small><br>') !!}
                    </div>

                    <div class="form-group">
                        <textarea  class="form-control bg-light shadow-sm border-0" name="content" placeholder="Message" value="{{ old('content')}}" ></textarea><br>
                        {!! $errors ->first('content','<small>:message</small><br>') !!}
                    </div>
                    <Button class="btn btn-primary btn-lg btn-block">Send</Button>
                </form>
            </div>
        </div>

        

    </div>
    
@endsection