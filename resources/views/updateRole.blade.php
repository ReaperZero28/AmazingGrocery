@extends('homeTemplate')

@section('title')
<title>Amazing E-Grocery - Home</title>
@endsection

@section('content-1')
<div class="container-fluid">
    <div class="container w-75" style="background-color: #B5F1CC; margin-top:5rem; width:25%">
        <form action="/addpublisher" method="POST" style="width: 100%" enctype="multipart/form-data">
            @csrf
            <h1 style="text-align: center">Update Role</h1>
                <div class="editProfile" style="margin-top:2rem">
                    <h2>Role</h2>
                    <input type="checkbox" id="roleUser" name="user" value="User" style="margin-left: 2vh">
                    <label for="inputUser">User</label><br>
                    <input type="checkbox" id="roleAdmin" name="admin" value="Admin" style="margin-left: 2vh">
                    <label for="inputAdmin">Admin</label>
                </div>
            <button class="btn btn-dark" type="submit" style="justify-content-around; margin-top: 2rem; margin-bottom:7rem">Save</button>
        </form>
    </div>
</div>

<footer>
    <nav class="navbar navbar-expand-lg shadow-sm" style="background-color:#1F8A70; height: 3rem; margin-top: 9rem; display:flex; align-items: center; justify-content:center; position: absolute>
        <div class="container-fluid">
            <h3 style="text-shadow: 1px 2px 12px rgba(0,0,0,0.33) font-size: 1%">
                <a class="navbar-brand">Amazing E-grocery 2023</a>
            </h3>
        </div>
    </nav>
</footer>

@endsection
