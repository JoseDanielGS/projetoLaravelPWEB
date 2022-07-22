<x-layout title="filmes">
<form action="{{ route('requisicoes.update', $requisicoes->id) }}" method="post">
    @csrf
    @method('PUT')

    <div class="mb-3">
            <label for="material" class="form-label">Material:</label>
            <input type="text" value="{{ $requisicoes->material }}" id="material" name="material" class="form-control">

            <label for="fonecedor" class="form-label">Fonecedor:</label>
            <input type="text" value="{{ $requisicoes->fornecedor }}" id="fonecedor" name="fonecedor" class="form-control">

            <label for="tipoMaterial" class="form-label">Tipo Material(Consumo ou Permanente):</label>
            <input type="text" value="{{ $requisicoes->tipoMaterial }}" id="tipoMaterial" name="tipoMaterial" class="form-control">

            <label for="validacaoAlmoxarifado" class="form-label">Validação do Almoxarifado:</label>
            <input type="checkbox" value="{{ $requisicoes->validacaoAlmoxarifado }}" id="validacaoAlmoxarifado" name="validacaoAlmoxarifado" class="form-control">

            <label for="validacaoDemandante" class="form-label">Validacao do Demandante:</label>
            <input type="checkbox" value="{{ $requisicoes->validacaoDemandante }}" id="validacaoDemandante" name="validacaoDemandante" class="form-control">

            <label for="pago" class="form-label">O pagamento foi realizado?:</label>
            <input type="checkbox" value="{{ $requisicoes->pago }}" id="pago" name="pago" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Alterar</button>
    </form>
</x-layout>