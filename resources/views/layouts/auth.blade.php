<!doctype html>
<html>
    <head>
        <title>@yield('title', 'Login')</title>
        <style>
            input, button {
                display: block;
            }
            input {
                margin-bottom: 10px;
            }
            input::last-child {
                margin-bottom: 0;
            }
        </style>
    </head>

    <body>
        <div class="container">
            @yield('content')
        </div>

        @yield('script')
    </body>
</html>
