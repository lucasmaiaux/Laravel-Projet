<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Laravel</title>

    </head>
    <body>
        <nav>
            <ul>
                <x-link-item href="/" :active="Route::currentRouteName() == 'homepage' ? true : false">Homepage</x-link-item>
                <x-link-item href="/projects" :active="Route::currentRouteName() == 'projects' ? true : false">Project</x-link-item>
                <x-link-item href="/recipes" :active="Route::currentRouteName() == 'recipes.index' ? true : false">Recipes</x-link-item>
            </ul>
        </nav>

        {{  $slot }}

    </body>
</html>
