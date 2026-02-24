<div class="mt-5 mb-5">
    <div class="card">
        <h5 class="card-header bg-primary text-light"> Cadastro Funcionário</h5>
        <div class="card-body">
            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" wire:model="nome" name="nome" id="nome">
                </div>

                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" class="form-control" wire:model="cpf" id="cpf" name="cpf">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="text" class="form-control" wire:model="email" id="email" name="email">
                </div>

                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="text" class="form-control" wire:model="senha" id="senha" name="senha">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Criar conta</button>
                </div>
            </form>
        </div>
    </div>
</div>
