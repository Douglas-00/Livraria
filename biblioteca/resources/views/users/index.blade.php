@extends('layouts.main')

@section('title','Usuarios')

@section('content')


   

    <table class="table">
       
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Número de Cadastro</th>
                <th>Senha</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->mail }}</td>
                    <td>{{ $user->number_register }}</td>
                    <td>{{ $user->password }}</td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-info">Detalhes</a>
                    </td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
            <div>
             <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Criar Novo Usuário</a>
            </div>



    




@endsection