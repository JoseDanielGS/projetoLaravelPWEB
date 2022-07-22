<x-layout title="filmes">
<form action="{{ route('requisicoes.store') }}" method="post">
    @csrf
        <div class="mb-3">
            <label for="material" class="form-label">Material:</label>
            <input type="text" id="material" name="material" class="form-control">

            <label for="status" class="form-label">Status:</label>
            <input type="text" id="status" name="status" class="form-control">

            <label for="fornecedor" class="form-label">Fornecedor:</label>
            <input type="text" id="fornecedor" name="fornecedor" class="form-control">

            <label for="tipoMaterial" class="form-label">Tipo Material(Consumo ou Permanente):</label>
            <input type="text" id="tipoMaterial" name="tipoMaterial" class="form-control">
            </br>
            <input type="checkbox" id="validacaoAlmoxarifado" name="validacaoAlmoxarifado" class="form-check-input">
            <label for="validacaoAlmoxarifado" class="form-check-label">Validação do Almoxarifado:</label>
            </br>
            <input type="checkbox" id="validacaoDemandante" name="validacaoDemandante" class="form-check-input">
            <label for="validacaoDemandante" class="form-check-label">Validacao do Demandante:</label>
            </br>
            <input type="checkbox" id="pago" name="pago" class="form-check-input">
            <label for="pago" class="form-check-label">O pagamento foi realizado?:</label>
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>