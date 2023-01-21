@extends('template/admin')

@section('content')

<div class="container_fluid p-2">
    <h2>Atualizar Usuários</h2>
    <form action="./" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="name" value="{{$user->name}}" class="form-control" />
        </div>
        <div class="form-group">
            <label>E-mail</label>
            <input type="mail" name="email" value="{{$user->email}}" class="form-control" />
        </div>
        <div class="form-group">
            <label>Senha</label>
            <input type="password" name="password" value="{{$user->password}}" class="form-control" />
        </div>
        <div class="form-group">
            <label>Nivel</label>
            <select name="level" class="form-control">
                <option value="{{$user->level}}"> {{$user->level}}</option>
                <option value="1">Administrador</option>
                <option value="2">Funcionário</option>
            </select>
        </div>
        <div class="form-group">
        <input type="hidden" name="id" value="{{$user->id}}" />
        <input type="submit" value="+ ATUALIZAR" class="btn btn-info"  />
            
        </div>

    </form>

</div>


@endsection