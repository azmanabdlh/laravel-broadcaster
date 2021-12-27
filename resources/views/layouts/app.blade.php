<!doctype html>
<html>
<head>
<title>@yield('title', 'Home')</title>
</head>

<body>
@yield('content')

<script src="{{ asset('js/app.js') }}"></script>
@yield('script')
</body>
</html>
