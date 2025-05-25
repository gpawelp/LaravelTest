<!<!DOCTYPE html>
<html>
    <head>
        <title>App name - @yield('title')</title>
    </head>
    <body>
    @section('sidebar')
        This is master sidebar.
    @endsection
    <div class="container">
        @yield('content')
    </div>
    </body>
</html>
