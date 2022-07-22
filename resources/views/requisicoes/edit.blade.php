<x-layout title="filmes">
<form action="{{ route('movies.update', $movie->id) }}" method="post">
    @csrf
    @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="NovoNome" value="{{ $movie->name }}" name="NovoNome" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Alterar</button>
    </form>
</x-layout>