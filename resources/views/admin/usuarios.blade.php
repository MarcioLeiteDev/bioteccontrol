@extends('template/admin')

@section('content')

<div class="container_fluid">
    <h2>Usuários</h2>
    @if(session('msg'))

    <div class='alert alert-info'>{{session('msg')}}</div>

    @endif
    <a href="usuarios/create"><button class="btn btn-success text-right"> + Cadastrar </button></a>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail de Acesso</th>
                <th>Nivel</th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>
        </thead>

        <tbody>
            @foreach($user as $valor)
         



         
            <tr>
                <td>{{$valor->name}}</td>
                <td>{{$valor->email}}</td>
                <td>
                @php
            if ($valor->level == 1){
                $nivel =  "<div class='alert alert-success'>Administrador</div>";
                echo $nivel;
            }

            if($valor->level == 2){
                $nivel = "<div class='alert alert-info'>Funcionário</div>";
                echo $nivel;
            }

            @endphp    
            
            </td>
                <td><a href="./usuarios/update/{{$valor->id}}"> <i class="fa-solid fa-pen text-info"></i></a></td>
                <td><a href="./usuarios/destroy/{{$valor->id}}"><i class="fa-solid fa-trash-can text-danger"></i></a></td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>

@endsection()