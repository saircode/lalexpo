<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('/assets/css/bootstrap.min.css')}}"/>
        <link href="https://db.onlinewebfonts.com/c/0b5ecd0afcf95185925504cdca01f5e3?family=Druk+Wide+Cy+Web+Bold+Regular" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('/assets/css/styles.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{URL::asset('/assets/css/grid.css')}}"/>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body>
        @inertia
    </body>
</html>
