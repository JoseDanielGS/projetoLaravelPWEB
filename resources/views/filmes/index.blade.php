<x-layout title='Filmes'>
   <h1>Filmes</h1>
   <a href="{{ route('movies.create') }}" class="btn btn-dark mb-2">Adicionar</a>
    <ul class="list-group">
    @foreach ($filmes as $filme)
        <li class="list-group-item">{{$filme->name}}<a href="/filmes/edit?id={{$filme->id}}" class="btn btn-dark mb-2">Alterar</a><a href="/filmes/destroy?id={{$filme->id}}" class="btn btn-dark mb-2">Deletar</a></li>
    @endforeach
    </ul>
</x-layout>