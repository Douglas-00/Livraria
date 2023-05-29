@extends('layouts.main')

@section('title','exibir emprestimo')

@section('content')

    <h1>Detalhes do Empréstimo</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Livro: {{ $loan->book->name }}</h5>
            <p class="card-text">Usuário: {{ $loan->user->name }}</p>
            <p class="card-text">Data de Empréstimo: {{ $loan->borrowed_at }}</p>
            <p class="card-text">Data de Devolução: {{ $loan->due_date }}</p>
            <p class="card-text">Situação: {{ $loan->status }}</p>

            <div>
                <a href="{{ route('loans.edit', $loan->id) }}" class="btn btn-primary">Editar</a>

                <form action="{{ route('loans.destroy', $loan->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este empréstimo?')">Excluir</button>
                </form>
            </div>
        </div>
    </div>

    <a href="{{ route('loans.create') }}" class="btn btn-primary mb-3">Criar Novo Empréstimo</a>



@endsection