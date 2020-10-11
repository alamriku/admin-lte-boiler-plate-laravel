<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog-spondon</title>
    @include('partial.header-meta')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    @include('partial.top-bar')

    @include('partial.left-sidebar')

    <div class="content-wrapper">
        @yield('content')
    </div>

    @include('partial.footer')
</div>
@include('partial.javascript')
</body>
</html>
