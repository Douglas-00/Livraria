@extends('layouts.main')

@section('title','Criar emprestimo')

@section('content')
<div id="book-create-container" class="col-md-6 offset-md-3">
    <h1>Criar Novo Empréstimo</h1>

    <form action="{{ route('loans.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="user_id">Usuário:</label>
            <select name="user_id" id="user_id" class="form-control">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="book_id">Livro:</label>
            <select name="book_id" id="book_id" class="form-control">
                @foreach ($books as $book)
                    <option value="{{ $book->id }}">{{ $book->name }}</option>
                @endforeach
            </select>
        </div>

         <div class="form-group">
            <label for="borrowed_at">Data de Empréstimo:</label>
            <input type="date" class="form-control" id="borrowed_at" name="borrowed_at">
        </div>

        <div class="form-group">
            <label for="due_date">Data de Devolução:</label>
            <input type="date" name="due_date" id="due_date" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Criar Empréstimo</button>
    </form>
</div>





@endsection