<x-layout>

    <h1 class="font-semibold text-xl mb-5">{{ $recipe['title'] }}</h1>

    @foreach($recipe['ingredients'] as $ingredient)

        <p class="text-zinc-500">{{ $ingredient }}</p>

    @endforeach

</x-layout>