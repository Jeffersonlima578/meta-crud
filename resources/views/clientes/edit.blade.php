@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Editar Cliente</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Erro!</strong> Por favor, corrija os campos abaixo:
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST" class="border p-4 rounded shadow-sm bg-white">


        @csrf
        @method('PUT')




        <div class="mb-3">
            <label for="nome" class="form-label"><strong>Nome:</strong></label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome', $cliente->nome) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label"><strong>Email:</strong></label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $cliente->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="telefone" class="form-label"><strong>Telefone:</strong></label>
            <input type="text" name="telefone" id="telefone" class="form-control" value="{{ old('telefone', $cliente->telefone) }}" required>
        </div>

        <button type="submit" class="btn btn-success">
            <i class="bi bi-check-circle"></i> Atualizar
        </button>
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Voltar
        </a>
    </form>
</div>
@endsection

