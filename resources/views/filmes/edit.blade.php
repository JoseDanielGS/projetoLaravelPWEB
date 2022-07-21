<x-layout title="filmes">
<form action="/filmes/update?id={{ $filme->id }}" method="post">
    @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="NovoNome" value="{{ $filme->name }}" name="NovoNome" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Alterar</button>
    </form>
</x-layout>