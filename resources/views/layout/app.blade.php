<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

    <style>
        main {

            & img {
                width: 100%;
                height: 600px;
            }

            .current {
                background-color: #0282f9;
                position: absolute;
                top: 36.5rem;
                left: 20rem;
                color: white;
            }

            .position-relative {
                width: 100%;
                background-color: darkgray;

                .card-img-top {
                    height: 200px;
                    width: 100%;
                }
            }


            .single {

                .single-comics {
                    width: 300px;
                    height: 450px;
                }
            }



        }
    </style>

</head>

<body>
    @include('partials.header')

    <main>
        @yield('main-content')
    </main>

    @include('partials.footer')

</body>

</html>