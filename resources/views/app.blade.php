<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
  </head>
  <body style="background-color:#415A77">  
    <header class="bg-[#0d1b2a]   text-[#e0e1dd] py-3 mb-4">
        <nav class="container ">
            <ul class="flex gap-2 ">
                <li><a class="hover:text-red-700" href="{{url('/')}}">Home</a></li>
                <li><a class="hover:text-red-700" href="{{url('/recepten')}}">Recepten</a></li>
                <li><a class="hover:text-red-700" href="{{url('/recipe_category')}}">Recept Types</a></li>
                <li><a class="hover:text-red-700" href="{{url('about')}}">Over ons</a></li>
            </ul>
        </nav>
    </header>

    @yield('content')
  </body>
</html>
