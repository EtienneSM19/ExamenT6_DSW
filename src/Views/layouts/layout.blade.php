<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>App - @yield('title')</title>
</head>
<body>
  <h1>
    @yield('title')
  </h1>
  <main>
    @section('content')
    <p>
      <h1>Hola mundo</h1>
    </p>
    @show
  </main>
</body>
</html>