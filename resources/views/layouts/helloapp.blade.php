<html>
<head>
  <title>@yield('title')</title>
  <style>
    th {background-color: black; color:fff; padding:5px 10px; }
    td {border: solid 1px #aaa; color:block; padding:5px 10px;}
  </style>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <h1>@yield('title')</h1>
  @section('menubar')
  @show
  <hr size="1">
  <div class="content">
    @yield('content')
  </div>
  <div class="footer">
    @yield('footer')
  </div>
</body>
</html>
