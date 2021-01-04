<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello from city</title>

    </head>
    <body>

    <h1>Hello de notre ville</h1>

    <p>Il est exactement  {{ date('H:i:s') }} </p>

    <footer>
    
    <p>
    &copy; Copyright KONNEKT  {{ date('Y') }} &middot; <a href="#">About us</a>
    </p>

    </footer>

    </body>
</html>
