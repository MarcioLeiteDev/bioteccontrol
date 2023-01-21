@extends('template/admin')

@section('content')

<div class="container_fluid">
    <h1>Cadastrar Orçamento</h1>
    <p>Selecione o Cliente</p>
    <form action="" method="get" class="form-inline">
        <input type="text" name="search" class="form-control p-2" placeholder="Busque pelo nome do cliente" />
        <input type="submit" value="BUSCAR" class="btn btn-info p-2" />
</br></br>
        <p><a href='orcamentos'>Limpar Busca</a></p>



    </form>

    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Empresa</th>
                <th>endereço</th>
                <th>Selecionar</th>
            </tr>
        </thead>

        <tbody>
            @foreach($customer as $valor)
            <tr>
                <td>{{$valor->name}}</td>
                <td>{{$valor->company}}</td>
                <td>{{$valor->street}}, nº {{$valor->number}} - {{$valor->counter}} </td>
                <td><a href="{{url('dashboard/orcamentos/create/')}}/{{$valor->id}}"><button class="btn btn-success">Selecionar</button> </a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection