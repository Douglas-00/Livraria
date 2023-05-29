@extends('layouts.main')

@section('title','Criar livro')

@section('content')
<div id="book-create-container" class="col-md-6 offset-md-3">
    <h1>Editar Livro</h1>

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $book->name }}">
        </div>

        <div class="form-group">
            <label for="author">Autor:</label>
            <input type="text" name="author" id="author" class="form-control" value="{{ $book->author }}">
        </div>

        <div class="form-group">
            <label for="registration_number">Número de Registro:</label>
            <input type="text" name="registration_number" id="registration_number" class="form-control" value="{{ $book->registration_number }}">
        </div>

        <div class="form-group">
            <label for="situation">Situação:</label>
            <select name="situation" id="situation" class="form-control">
                <option value="Emprestado" {{ $book->situation == 'Emprestado' ? 'selected' : '' }}>Emprestado</option>
                <option value="Disponível" {{ $book->situation == 'Disponível' ? 'selected' : '' }}>Disponível</option>
            </select>
        </div>
        <div class="form-group">
                <label for="gender">Gênero:</label>
                <select name="gender" id="gender" class="form-control" placeholder="Gênero do Livro..." required>
                    <option value="{{ $book->gender }}">Selecione o gênero</option>
                    <option value="Ficção">Ficção</option>
                    <option value="Romance">Romance</option>
                    <option value="Fantasia">Fantasia</option>
                    <option value="Aventura">Aventura</option>
                </select>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar Livro</button>
    </form>
</div>





@endsection