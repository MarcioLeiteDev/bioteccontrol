@extends('template/admin')

@section('content')

<div class="container_fluid p-2">
    <h2>Cadastrar Usuários</h2>
    <form action="cad_user" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="name" class="form-control" />
        </div>
        <div class="form-group">
            <label>E-mail</label>
            <input type="mail" name="email" class="form-control" />
        </div>
        <div class="form-group">
            <label>Senha</label>
            <input type="password" name="password" class="form-control" />
        </div>
        <div class="form-group">
            <label>Nivel</label>
            <select name="level" class="form-control">
                <option value="1">Administrador</option>
                <option value="2">Funcionário</option>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" value="+ CADASTRAR" class="btn btn-success"  />
        </div>

    </form>

</div>


@endsection