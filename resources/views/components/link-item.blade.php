@props(['active' => false])

<li><a {{ $attributes }} style=" {{ $active == true ? 'font-weight: bold;':''}}"> {{ $slot }} </a></li>