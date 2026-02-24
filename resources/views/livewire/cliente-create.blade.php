<div class="mt-5 mb-5">
    <div class="card">
        <h5 class="card-header bg-primary text-light"> Cadastro cliente</h5>
        <div class="card-body">
            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" wire:model="nome" name="nome" id="nome">
                </div>

                <div class="mb-3">
                    <label for="endereco" class="form-label">Endereço</label>
                    <input type="text" class="form-control" wire:model="endereco" id="endereco" name="endereco" placeholder="Ex: Rua das flores 11-14 Vila do Jardim">
                </div>

                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" class="form-control" wire:model="telefone" id="telefone" name="telefone" placeholder="Ex: 11999999999">
                </div>

                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" class="form-control" wire:model="cpf" id="cpf" name="cpf" placeholder="Ex: 1234567890-xx">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="text" class="form-control" wire:model="email" id="E-mail" name="email">
                </div>

                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="text" class="form-control" wire:model="senha" id="senha" name="senha" placeholder="Deve conter letras maiúsculas, minúsculas, símbolos e números.">
                </div>

                

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Criar conta</button>
                </div>
            </form>
        </div>
    </div>
</div>