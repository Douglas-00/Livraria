@extends('layouts.main')

@section('title','Criar user')

@section('content')
<div id="book-create-container" class="col-md-6 offset-md-3">
    <h1>Criar Novo Usuário</h1>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <div class="form-group">
                <label for="name">Name</label>
                <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus>
            </div>

            <div class="form-group">
                <label for="mail">E-Mail</label>
                <input id="mail" class="form-control" type="mail" name="mail" value="{{ old('mail') }}" required>
            </div>
            <div class="form-group">
                <label for="number_register">Numero de Registro</label>
                <input id="number_register" class="form-control" type="number" name="number_register" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" class="form-control" type="password" name="password" required>
            </div>


            <div>
                <button type="submit" class="btn btn-primary" >Cadastrar</button>
            </div>
    </form>
</div>

    




@endsection