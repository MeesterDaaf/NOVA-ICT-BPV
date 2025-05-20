<x-base-layout>
Hier komen allerlei links

<h1>{{ $title }}</h1>
<p>Hier komen allerlei links</p>

@foreach($links as $link)
    <a href="{{ $link }}">{{ $link }}</a>
    <br>
@endforeach
</x-base-layout>