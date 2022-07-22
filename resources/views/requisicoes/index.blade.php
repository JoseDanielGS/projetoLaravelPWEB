<x-layout title='Filmes'>
   <h1>Filmes</h1>
   <a href="{{ route('requisicoes.create') }}" class="btn btn-dark mb-2">Adicionar</a>
    <ul class="list-group">
    @foreach ($requisicoes as $requisicao)
        <li class="list-group-item d-flex justify-content-between align-items-center"><strong>Material:</strong> {{$requisicao->material}}
        <span class="d-flex">    
           
            <a href="{{ route('requisicoes.edit', $requisicao->id) }}" class="btn btn-primary btn-sm">Alterar</a>
            <form action="{{ route('requisicoes.destroy', $requisicao->id) }}" method="post" class="ms-2">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">
                X
                </button>
            </form>
        </span>

    
        </li>
    @endforeach
    </ul>
</x-layout>