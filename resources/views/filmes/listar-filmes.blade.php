<x-layout title='Filmes'>
   <h1>Filmes</h1>
    <lu>
    @foreach ($filmes as $filme)
        <li>{{$filme}}</li>
    @endforeach
    </lu>
</x-layout>