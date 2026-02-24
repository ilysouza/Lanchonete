<div class="mt-5 mb-5">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
    @endif
    @foreach ($clientes as $c)
        <div class="card mb-4">
            <h5 class="card-header bg-primary text-light">Perfil</h5>
            <div class="card-body">


                <h4>Dados do Usuário #{{ $c->id }}</h4>
                <div class="card-info">
                    <h5 class="mt-3 mb-2">E-mail</h5>
                    <p class="mb-2">{{ $c->email }}</p>

                    <h5 class="mt-3 mb-2">Nome</h5>
                    <p class="mb-2">{{ $c->nome }}</p>

                    <h5 class="mt-3 mb-2">Telefone</h5>
                    <p class="mb-2">{{ $c->telefone }}</p>

                    <h5 class="mt-3 mb-2">CPF</h5>
                    <p class="mb-2">{{ $c->cpf }}</p>

                    <h5 class="mt-3 mb-2">Endereço</h5>
                    <p class="mb-2">{{ $c->endereco }}</p>

                    <a href="{{ route('cliente.editar', ['id' => $c->id]) }}" class="btn btn-primary btn-sm">Editar</a>
                </div>

            </div>
        </div>
    @endforeach
</div>
