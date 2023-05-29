@extends('layouts.main')

@section('title','Editar')

@section('content')
<div id="book-create-container" class="col-md-6 offset-md-3">
    <h1>Editar Usuário</h1>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
        </div>

        <div class="form-group">
            <label for="mail">mail:</label>
            <input type="email" name="mail" id="mail" class="form-control" value="{{ $user->mail }}">
        </div>

        <div class="form-group">
            <label for="number_register">Número de Cadastro:</label>
            <input type="text" name="number_register" id="number_register" class="form-control" value="{{ $user->number_register }}">
        </div>

        <div class="form-group">
                <label for="password">Password</label>
                <input id="password" class="form-control" type="password" value="{{ $user->password }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar Usuário</button>
    </form>
</div>




    




@endsection