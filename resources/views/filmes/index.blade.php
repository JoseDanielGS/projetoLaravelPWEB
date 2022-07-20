<x-layout title='Filmes'>
   <h1>Filmes</h1>
   <a href="/filmes/adicionar" class="btn btn-dark mb-2">Adicionar</a>
    <ul class="list-group">
    @foreach ($filmes as $filme)
        <li class="list-group-item">{{$filme->name}}</li>
    @endforeach
    </ul>
</x-layout>