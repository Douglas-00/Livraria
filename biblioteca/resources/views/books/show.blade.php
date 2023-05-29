@extends('layouts.main')

@section('title','Exibir Livro')

@section('content')

</form>
<table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Autor</th>
                <th>Número de Registro</th>
                <th>Situação</th>
                <th>Gênero</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->registration_number }}</td>
                    <td>{{ $book->situation }}</td>
                    <td>{{ $book->gender }}</td>
                    <td>
                        <a href="{{ route('loans.create') }}" class="btn btn-primary">Empréstimo</a>
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-sm btn-primary">Editar</a>
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            
        </tbody>
    </table>
    <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Criar Novo Livro</a>



@endsection