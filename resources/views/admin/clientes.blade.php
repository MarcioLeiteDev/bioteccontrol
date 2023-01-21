@extends('template/admin')

@section('content')

<div class="container_fluid">
@if(session('msg'))

<div class='alert alert-info'>{{session('msg')}}</div>

@endif
    <h2>Clientes</h2>

    <a href="clientes/create"><butoon class="btn btn-success"> + Novo Cliente </butoon></a>

</br></br>
    <form action="" name="search" class="form-inline">
        <input type="text" name="search" class="form-control p-2" placeholder="Busque pelo nome do cliente" />
        <input type="submit" value="BUSCAR" class="btn btn-info p-2" />
</br></br>
        <p><a href='clientes'>Limpar Busca</a></p>

    </form>

    <hr>

    <table class="table">
        <thead>
            <tr>
                <th>Empresa</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>Orçamento</th>
                <th>Editar</th>
                <th>Deletar</th>   
            </tr>
        </thead>

        <tbody>
            @foreach($customer as $valor)
            <tr>
                <td>{{$valor->company}}</td>
                <td>{{$valor->name}}</td>
                <td>{{$valor->email}}</td>
                <td>{{$valor->phone}}</td>
                <td>{{$valor->street}} nº {{$valor->number}} -  {{$valor->complement}} - {{$valor->counter}} - {{$valor->city}} </td>
                <td><a href="{{url('dashboard/orcamentos/create')}}/{{$valor->id}}"> <button class="btn btn-info">Novo Orçamento</button> </a></td>
                <td><a href="./clientes/update/{{$valor->id}}"> <i class="fa-solid fa-pen text-info"></i></a></td>
                <td><a href="./clientes/destroy/{{$valor->id}}"><i class="fa-solid fa-trash-can text-danger"></i></a></td>
            </tr>
            @endforeach
        </tbody>

    </table>



    </div>

@endsection