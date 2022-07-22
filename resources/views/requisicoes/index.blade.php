<x-layout title='Filmes'>
   <h1>Filmes</h1>
   <a href="{{ route('requisicoes.create') }}" class="btn btn-dark mb-2">Adicionar</a>
    <ul class="list-group">
    @foreach ($requisicoes as $requisicao)
        <li class="list-group-item d-flex justify-content-between align-items-center">Material: {{$requisicoes->material}}
        <span class="d-flex">    
            <!--<a href="/filmes/edit?id={{$movie->id}}" class="btn btn-dark mb-2">Alterar</a>-->
            <a href="{{ route('requisicoes.edit', $requisicoes->id) }}" class="btn btn-primary btn-sm">Alterar</a>
            <form action="{{ route('requisicoes.destroy', $requisicoes->id) }}" method="post" class="ms-2">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">
                X
                </button>
            </form>
        </span>
        <!--<a href="/filmes/destroy?id={{$movie->id}}" class="btn btn-dark mb-2">Deletar</a>-->
    
        </li>
    @endforeach
    </ul>
</x-layout>