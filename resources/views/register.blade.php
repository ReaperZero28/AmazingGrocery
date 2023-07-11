@extends('indexTemplate')

@section('title')
<title>Register</title>
@endsection

<style>
    body{
        width: 100vw;
        max-height: 75vh;
    }
</style>

@section('content-1')

<div class="container-fluid">
    <div class="text_content text-center">
        <h4 class="regisFormTitle" style="padding-top:3vh; padding-bottom:2vh; padding-right: 193vh">Register</h4>
    </div>
    <form class="formRegis" action="/register" method="post" style="padding-left: 3vh" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <div class="card-body">
                <table class="table table-success table-striped-columns table-sm align-middle" style="width:60%; margin-left:18rem">
                    <tr>
                        <td>
                            <label for="inputFirstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Input First Name" style="width: 100%">
                        </td>
                        <td>
                            <div class="mb-4">
                                <label for="inputLastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Input Last Name" style="width: 100%">
                              </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="mb-3">
                                <label for="inputGender" class="form-label" style="font-size: 110%">Gender</label>
                                    <input class="form-check-input" type="radio" name="gender" id="gender" style="margin-left: 2vh" value="1">
                                    <label for="genderMale">Male</label>
                                    <input class="form-check-input" type="radio" name="gender" id="gender" style="margin-left: 2vh" value="2">
                                    <label for="genderFemale">Female</label>
                              </div>
                        </td>
                        <td>
                            <div class="mb-4">
                                <label for="inputEmail" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Input Email" style="width: 100%">
                              </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="mb-3">
                                <label for="inputRole" class="form-label" style="font-size: 110%">Role</label>
                                <input type="radio" id="role" name="role" value="2" style="margin-left: 2vh">
                                <label for="inputUser">User</label>
                                <input type="radio" id="role" name="role" value="1" style="margin-left: 2vh">
                                <label for="inputAdmin">Admin</label>
                              </div>
                        </td>
                        <td>
                            <div class="mb-3">
                                <label for="" style="display:block; margin-bottom:5px;margin-top:20px;">Browse Picture</label>
                                <input type="file" name="image" id="image"><br>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="mb-2">
                                <br>
                                <label for="inputPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Input Password" style="width: 100%">
                              </div>
                        </td>
                        <td>
                            <div class="mb-3">
                                <br>
                                <label for="confirmPassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" style="width: 100%">
                              </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="button_content d-flex flex-wrap" style="padding-top: 5vh; padding-left:80vh">
            <a class="btn btn-warning m-2 shadow-sm" href="/welcome" style="width: 6vw;">Back</a>
            <button class="btn btn-warning m-2 shadow-sm" type="submit" style="width: 6vw;">Submit</button>
        </div>

        <a href="/login" style="margin-top: 5vh; margin-left:77vh; font-size:120%">Already have an account? Sign in</a>

      </form>
</div>

<footer>
    <nav class="navbar navbar-expand-lg shadow-sm" style="background-color:#1F8A70; margin-top:10vh; padding-top:3vh; display:flex; align-items: center; justify-content:center; position: absolute>
        <div class="container-fluid">
            <h3 style="text-shadow: 1px 2px 12px rgba(0,0,0,0.33) font-size: 1%">
                <a class="navbar-brand">Amazing E-grocery 2023</a>
            </h3>
        </div>
    </nav>
</footer>

@endsection
