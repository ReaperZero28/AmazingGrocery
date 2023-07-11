@extends('indexTemplate')

@section('title')
<title>Amazing E-Grocery - Welcome</title>
@endsection

@section('content-1')
<div class="container-fluid">
    <div class="text_content text-center" style="padding-top: 30vh; padding-bottom: 3vh">
        <h2 class="text-dark" style="text-shadow: 1px 2px 12px rgba(0,0,0,1);">Welcome to Amazing E-Grocery</h2>
        <h6 class="text-break text-dark" style="text-shadow: 1px 2px 12px rgba(0,0,0,1);">Find and Buy Your Grocery Here!</h5>
    </div>
    <div class="button_content d-flex flex-wrap justify-content-center" style="padding-top: 1vh; ">
        <a class="btn btn-warning m-2 shadow-sm" href="/register" style="width: 6vw;">Register</a>
        <a class="btn btn-warning m-2 shadow-sm" href="/login" style="width: 6vw;">Login</a>
    </div>
</div>

<footer>
    <nav class="navbar navbar-expand-lg shadow-sm" style="background-color:#1F8A70; margin-top:30vh; padding-top:3vh; display:flex; align-items: center; justify-content:center; position: absolute>
        <div class="container-fluid">
            <h3 style="text-shadow: 1px 2px 12px rgba(0,0,0,0.33) font-size: 1%">
                <a class="navbar-brand">Amazing E-grocery 2023</a>
            </h3>
        </div>
    </nav>
</footer>

@endsection


