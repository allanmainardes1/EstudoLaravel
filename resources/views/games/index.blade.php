<x-layout title='Games'>
    <ul>
        @foreach ($games as $game)
        <li>{{$game}}</li>
        @endforeach
    </ul>

    <script>
        const games = {{ Js::from($games)}};
    </script>
</x-layout>