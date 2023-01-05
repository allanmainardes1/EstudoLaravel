<x-layout title='Games'>
    <ul>
        @foreach ($games as $game)
        <li>{{$game}}</li>
        @endforeach
    </ul>
</x-layout>