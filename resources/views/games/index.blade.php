<x-layout title='Games'>
    <a href="/list/create">Add</a>
    <ul>
        @foreach ($games as $game)
        <li>{{$game}}</li>
        @endforeach
    </ul>

</x-layout>