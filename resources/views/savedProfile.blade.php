@extends('indexTemplate')

@section('title')
<title>Amazing E-Grocery - Welcome</title>
@endsection

@section('content-1')
<div class="container-fluid">
    <div class="text_content text-center" style="padding-top: 30vh; padding-bottom: 3vh">
        <h2 class="text-dark" style="text-shadow: 1px 2px 12px rgba(0,0,0,1);">Saved!</h2>
        <a href="/home" style="margin-top: 5rem">Click Here to Home</a>
    </div>
</div>

<footer>
    <nav class="navbar navbar-expand-lg shadow-sm" style="background-color:#1F8A70; margin-top:39vh; padding-top:3vh; display:flex; align-items: center; justify-content:center; position: absolute>
        <div class="container-fluid">
            <h3 style="text-shadow: 1px 2px 12px rgba(0,0,0,0.33) font-size: 1%">
                <a class="navbar-brand">Amazing E-grocery 2023</a>
            </h3>
        </div>
    </nav>
</footer>

@endsection
