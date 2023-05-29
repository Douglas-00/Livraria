@extends('layouts.main')

@section('title','Livros')

@section('content')



    

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
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->registration_number }}</td>
                    <td>{{ $book->situation }}</td>
                    <td>{{ $book->gender }}</td>
                    <td>
                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-sm btn-info">Detalhes</a>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Criar Novo Livro</a>



@endsection