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

        <style>
            *{
                margin: 0;
            }

            * a:link, a:visited{
                text-decoration: none;
            }

            /* ::-webkit-scrollbar {
                display: none;
            } */

            body{
                width: 100vw;
                min-height: 100vh;

                display: flex;
                flex-direction: column;

                /* background-image: url('welcome.jpg'); */
                background-repeat: no-repeat;
                background-size: cover;
                background-color: #F5F5F5;

                /* position: relative; */
            }

            .background{
                width: 100%;
                height: 100%;

                position: absolute;
                z-index: -1;

                /* background-color: #F5F5F5; */
            }
        </style>

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg shadow-sm" style="background-color:#1F8A70">
            <div class="container-fluid">
                <h3 style="text-shadow: 1px 2px 12px rgba(0,0,0,0.33); margin-left:2vh">
                    <a class="navbar-brand" href="/welcome">Amazing E-grocery</a>
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
        <nav class="navbar navbar-expand-lg shadow-sm" style="background-color:#1F8A70; height: 3rem; margin-top: 14.8rem; ;display:flex; align-items: center; justify-content:center; position: absolute>
            <div class="container-fluid">
                <h3 style="text-shadow: 1px 2px 12px rgba(0,0,0,0.33) font-size: 1%">
                    <a class="navbar-brand">Amazing E-grocery 2023</a>
                </h3>
            </div>
        </nav>
    </footer> --}}

</body>
</html>
