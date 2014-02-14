<!doctype html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <title>poncizel?</title>
        {{ HTML::script('http://code.jquery.com/jquery-git2.min.js') }}
        {{ HTML::script('packages/bootstrap/js/bootstrap.min.js'); }}
        {{ HTML::style('packages/bootstrap/css/bootstrap.min.css'); }}        
        {{ HTML::style('packages/bootstrap/css/bootstrap-theme.min.css '); }}        
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
        <footer></footer>
    </body>
</html>