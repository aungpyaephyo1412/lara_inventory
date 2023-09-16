<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{@asset("css/bootstrap.min.css")}}">
    <title>
        @yield("title")
    </title>
</head>
<body>
    <main class="container">
        @include("layouts.header")
        <setion class="row">
            <div class="col-3">
                @include("layouts.navbar")
            </div>
            <div class="col-9">
                @yield("content")
            </div>
        </setion>
    </main>
    <script src="{{@asset("js/bootstrap.bundle.min.js")}}"></script>
</body>
</html>
