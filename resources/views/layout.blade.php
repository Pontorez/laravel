<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>

<div class="container">
    @yield('content')

    @unless(Request::path() == '/')
        <hr/>
        <footer class="text-center">{!! Form::button('Go to main page', ['onclick' => 'location="/"', 'class' => 'btn btn-primary']) !!}</footer>
    @endunless

</div>

</body>
</html>
