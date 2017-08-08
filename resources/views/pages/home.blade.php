@extends('layout.master')

@section('home')
    active
@endsection
@section('title')
   Home
@endsection



@section('content')
    <div>
        <div class="col-lg-8 col-lg-offset-2 col-xs-12">
            <div class=" text-center">
<h3 style=" margin-top: 9%"> Welcome to Home page, associative array is used to display <br> the programming cards
    check it out!!</h3>
                <br>
    <img src="http://codelab.camp/logo.jpg"  style="width: 390px;height: 390px ; " alt="CodeLab">
    </div>
        </div>
    </div>
@endsection



@section('content')
    <div class="container">
        <div class="row">
            <h2 class="text-center tx-color">Hello CodeLab This Is Home Page</h2>
        </div>
    </div>
@endsection


@section('js')
    <script>
        alert('Hello Ninjas');
    </script>
@endsection