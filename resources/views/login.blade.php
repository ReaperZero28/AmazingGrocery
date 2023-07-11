@extends('indexTemplate')

@section('title')
<title>Login</title>
@endsection

<style>
    body{
        width: 100vw;
        max-height: 10vh;
    }
</style>

@section('content-1')

<div class="container-fluid">
    <div class="text_content text-center">
        <h4 class="regisFormTitle" style="padding-top:3vh; padding-bottom:2vh; padding-right: 198vh">Login</h4>
    </div>
    <form class="formRegis" action="/login" method="POST" style="padding-left: 3vh">
        @csrf
          <div class="mb-1">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Input Email" style="width: 100%">
          </div>

          <div class="mb-2">
            <br>
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Input Password" style="width: 100%">
          </div>

          <div class="button_content d-flex flex-wrap justify-content-center" style="padding-top: 5vh;">
            <a class="btn btn-warning m-2 shadow-sm" href="/welcome" style="width: 6vw;">Back</a>
            <button class="btn btn-warning m-2 shadow-sm" type="submit" style="width: 6vw;">Submit</button>
        </div>

        <a href="/register" style="margin-top: 5vh; margin-left:82vh; font-size:120%">Don't have an account? Register here</a>
      </form>
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

