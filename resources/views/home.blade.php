@extends('layout')


@section('title','Home')





@section('content')
    
    <div class="container">
        <div class="row">
            <div class=" col-lg-6 display-4 text-primary">
                <h2>Librery's UT</h2>
                <p class="lead text-secondary">The librery's school, is for all people are studying in UT RIVIERA MAYA SCHOOLS,
                and wants to read a little about anythings, so, they are going to be able to upload information about,
                whats books are more usefull, to read, and the can write a comment about the boosk, 
                or it could be a referent about What they thought about the book.</p>
            </div>
            <div class=" col-lg-6">
                <img class="img-fluid" src="/images/homes.svg"  >
            </div>    
        </div>   
    </div>
    @auth
       
    @endauth
@endsection