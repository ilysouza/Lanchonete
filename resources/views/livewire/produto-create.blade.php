<div class="mt-5 mb-5">
    <div class="card">
        <h5 class="card-header bg-primary text-light"> Cadastro Produto</h5>
        <div class="card-body">
            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" wire:model="nome" name="nome" id="nome">
                </div>

                <div class="mb-3">
                    <label for="ingrediente" class="form-label">Ingrediente</label>
                    <input type="text" class="form-control" wire:model="ingrediente" id="ingrediente" name="ingrediente">
                </div>

                <div class="mb-3">
                    <label for="valor" class="form-label">Valor</label>
                    <input type="text" class="form-control" wire:model="valor" id="valor" name="valor">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Criar pedido</button>
                </div>
            </form>
        </div>
    </div>
</div>