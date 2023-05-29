@extends('layouts.main')

@section('title','Criar livro')

@section('content')
<div id="book-create-container" class="col-md-6 offset-md-3">
    <h1>Criar Novo Livro</h1>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="author">Autor:</label>
            <input type="text" name="author" id="author" class="form-control">
        </div>

        <div class="form-group">
            <label for="registration_number">Número de Registro:</label>
            <input type="text" name="registration_number" id="registration_number" class="form-control">
        </div>

        <div class="form-group">
            <label for="situation">Situação:</label>
            <select name="situation" id="situation" class="form-control">
                <option value="Emprestado">Emprestado</option>
                <option value="Disponível">Disponível</option>
            </select>
        </div>
        <div class="form-group">
                <label for="gender">Gênero:</label>
                <select name="gender" id="gender" class="form-control" placeholder="Gênero do Livro..." required>
                    <option value="">Selecione o gênero</option>
                    <option value="Ficção">Ficção</option>
                    <option value="Romance">Romance</option>
                    <option value="Fantasia">Fantasia</option>
                    <option value="Aventura">Aventura</option>
                </select>
        </div>

        <button type="submit" class="btn btn-primary">Criar Livro</button>
    </form>
</div>





@endsection