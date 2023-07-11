<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('title')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
        crossorigin="anonymous">

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg shadow-sm" style="background-color:#1F8A70; display:flex; align-items:center; justify-content:center;">
            <div class="container-fluid">
                <h3 style="text-shadow: 1px 2px 12px rgba(0,0,0,0.33);">
                    <a class="navbar-brand" href="/welcome">Amazing E-grocery</a>
                </h3>
            </div>
            <a class="btn btn-outline-warning" href="/logout" style="width: 6vw; margin-right:2.5rem">Logout</a>
        </nav>
        <nav class="navbar navbar-expand-lg shadow-sm" style="background-color:#F2CD5C; height:2.5rem">
            <div class="container-fluid">
                <h3 style="text-shadow: 1px 2px 12px rgba(0,0,0,0.33); margin-left: 20rem; margin-right:1rem">
                    <a class="navbar-brand" href="/home">Home</a>
                </h3>
                <h3 style="text-shadow: 1px 2px 12px rgba(0,0,0,0.33);">
                    <a class="navbar-brand" href="/cart">Cart</a>
                </h3>
                <h3 style="text-shadow: 1px 2px 12px rgba(0,0,0,0.33);">
                    <a class="navbar-brand" href="/editprofile">Profile</a>
                </h3>
                <h3 style="text-shadow: 1px 2px 12px rgba(0,0,0,0.33); margin-right: 20rem">
                    <a class="navbar-brand" href="/maintenance">Account Management</a>
                </h3>
            </div>
        </nav>
    </header>

    @yield('content-1')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"
    ></script>

    {{-- <footer>
        <nav class="navbar navbar-expand-lg shadow-sm" style="background-color:#1F8A70; height: 3rem; margin-top: 20rem; display:flex; align-items: center; justify-content:center; position: absolute>
            <div class="container-fluid">
                <h3 style="text-shadow: 1px 2px 12px rgba(0,0,0,0.33) font-size: 1%">
                    <a class="navbar-brand">Amazing E-grocery 2023</a>
                </h3>
            </div>
        </nav>
    </footer> --}}
</body>
</html>
