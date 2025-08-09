@extends('layouts.app')

@section('content')
<h4 class="mb-4 text-left">Lista de Clientes</h4>

<!-- Formulário de Busca -->
<form method="GET" action="{{ route('clientes.index') }}" class="mb-4">
    <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Buscar por nome ou email" value="{{ request('search') }}">
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Buscar</button>
            <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Limpar</a>
        </div>
    </div>
</form>

<a href="{{ route('clientes.create') }}" class="btn btn-success mb-3">Cadastrar Novo Cliente</a>

<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->nome }}</td>
                <td>{{ $cliente->email }}</td>
                <td>
                    ({{ substr($cliente->telefone, 0, 2) }})
                    {{ substr($cliente->telefone, 2, 5) }}-{{ substr($cliente->telefone, 7, 4) }}
                </td>
                <td>
                    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-success btn-sm">
                        <i class="bi bi-pencil-square"></i> Editar
                    </a>
                    <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Tem certeza que deseja excluir este cliente?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">
                            <i class="bi bi-trash"></i> Excluir
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center">Nenhum cliente encontrado.</td>
            </tr>
        @endforelse
    </tbody>
</table>

<!-- Paginação -->
<div class="d-flex justify-content-center">
    {{ $clientes->appends(['search' => request('search')])->links() }}
</div>
@endsection
