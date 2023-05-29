@extends('layouts.main')

@section('title','Criar emprestimo')

@section('content')

<h1>Empréstimos</h1>

    

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuário</th>
                <th>Livro</th>
                <th>Data de Empréstimo</th>
                <th>Data de Devolução</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($loans as $loan)
                <tr>
                    <td>{{ $loan->id }}</td>
                    <td>{{ $loan->user->name }}</td>
                    <td>{{ $loan->book->name }}</td>
                    <td>{{ $loan->borrowed_at }}</td>
                    <td>{{ $loan->due_date }}</td>
                    <td>{{ $loan->status }}</td>
                    <td>
                        <a href="{{ route('loans.edit', $loan->id) }}" class="btn btn-sm btn-primary">Editar</a>
                        <form action="{{ route('loans.markAsDelayed', $loan->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-warning">Marcar como Atrasado</button>
                        </form>
                        <form action="{{ route('loans.markAsReturned', $loan->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-success">Marcar como Devolvido</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('loans.create') }}" class="btn btn-primary mb-3">Criar Novo Empréstimo</a>




@endsection