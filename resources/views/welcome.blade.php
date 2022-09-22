<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Tall Stack</title>
        @livewireStyles
    </head>
    <body class="antialiased">
        @livewire('contact-form')


        @livewireScripts()
    </body>
</html>
