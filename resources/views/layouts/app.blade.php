<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Farm-app</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li>
              <a href="" class="p-3"></a>
            </li>
            <li>
                <a href="" class="p-3"></a>
            </li>
            <li>
                <a href="" class="p-3"></a>
            </li>

        </ul>
        <ul class="flex items-center-right">
            <li>
              <a href="" class="p-3"></a>
            </li>
            <li>
                <a href="{{route('login')}}" class="p-3"></a>
            </li>
            <li>
                <a href="{{route('register')}}" class="p-3"></a>
            </li>
            <li>
                <a href="" class="p-3"></a>
            </li>

        </ul>
    </nav>
 @yield('content')
</body>
</html>
