<div class="mt-5 mb-5">
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
    @endif

    <div class="card">
        <h5 class="card-header bg-primary text-light">Perfil</h5>
        <div class="card-body">
        
        @foreach($funcionarios as $f)
        <h4>Dados do Funcionário #{{ $f->id }}</h4>
        <div class="card-info">
            <h5 class="mt-3 mb-2">Nome</h5>
            <p class="mb-2">{{ $f->nome }}</p>

            <h5 class="mt-3 mb-2">CPF</h5>
            <p class="mb-2">{{ $f->cpf }}</p>

            <h5 class="mt-3 mb-2">E-mail</h5>
            <p class="mb-2">{{ $f->email }}</p>

            <a href="{{ route('funcionario.editar', ['id'=> $f->id]) }}" class="btn btn-primary btn-sm">Editar</a>
        </div>
        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>