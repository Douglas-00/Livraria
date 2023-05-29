@extends('layouts.main')

@section('title','editar emprestimo')

@section('content')
<div id="book-create-container" class="col-md-6 offset-md-3">
    <h1>Editar Empréstimo</h1>

    <form action="{{ route('loans.update', $loan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="user_id">Usuário:</label>
            <select name="user_id" id="user_id" class="form-control">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{ $loan->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="book_id">Livro:</label>
            <select name="book_id" id="book_id" class="form-control">
                @foreach ($books as $book)
                    <option value="{{ $book->id }}" {{ $loan->book_id == $book->id ? 'selected' : '' }}>{{ $book->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="borrowed_at">Data de Empréstimo</label>
            <input type="date" class="form-control" id="borrowed_at" name="borrowed_at" value="{{ $loan->borrowed_at }}">
        </div>

        <div class="form-group">
            <label for="due_date">Data de Devolução:</label>
            <input type="date" name="due_date" id="due_date" class="form-control" value="{{ $loan->due_date }}">
        </div>

        <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" id="status" class="form-control">
                <option value="Empréstimo" {{ $loan->status == 'Emprestado' ? 'selected' : '' }}>Emprestado</option>
                <option value="Atrasado" {{ $loan->status == 'Atrasado' ? 'selected' : '' }}>Atrasado</option>
                <option value="Devolvido" {{ $loan->status == 'Devolvido' ? 'selected' : '' }}>Devolvido</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar Empréstimo</button>
    </form>
</div>





@endsection