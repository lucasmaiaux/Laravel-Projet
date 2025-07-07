<x-layout>

    <h1>My recipes</h1>

    @foreach($recipes as $key => $recipe)

        <p><a href="/recipes/{{ $key }}" class="underline text-blue-500">{{ $recipe['title'] }}</a></p>

    @endforeach

</x-layout>