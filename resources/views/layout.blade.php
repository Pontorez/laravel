<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/css/css.css" rel="stylesheet"/>
</head>
<body>

<a class="fork-me-ribbon pull-right hidden-xs" href="https://github.com/Pontorez/laravel">
    <img src="/svg/fork_me_ribbon.svg" alt="Fork on GitHub"/>
</a>

<div class="container">
    @yield('content')

    @unless(Request::path() == '/')
        <hr/>
        <footer class="text-center"><button onclick="location=&quot;/&quot;" class="btn btn-primary" type="button">Go to main page</button></footer>
    @endunless

</div>

</body>
</html>
