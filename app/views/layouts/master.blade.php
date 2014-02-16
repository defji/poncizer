<!doctype html>
<html lang="hu">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">        <title>poncizel?</title>
        {{ HTML::script('http://code.jquery.com/jquery-git2.min.js') }}
        {{ HTML::script('packages/bootstrap/js/bootstrap.min.js'); }}
        {{ HTML::style('packages/bootstrap/css/bootstrap.min.css'); }}        
        {{ HTML::style('packages/bootstrap/css/bootstrap-theme.min.css '); }}        
        <link href='http://fonts.googleapis.com/css?family=Russo+One' rel='stylesheet' type='text/css'>
        {{ HTML::script('/js/base.js'); }}
        {{ HTML::style('/css/base.css'); }}        
    </head>
    <body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-static-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="/">poncizel?</a>
        </div>
      </div>
    </div>        
    @yield('content')
    </body>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-48135213-1', 'poncizer.tk');
      ga('send', 'pageview');
    </script>    
</html>