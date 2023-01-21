@extends('template/admin')

@section('content')


<div class="container_fluid">
    
    @if(session('msg'))

    <div class='alert alert-info'>{{session('msg')}}</div>

    @endif

    <h3>Serviços</h3>
    
    <a href="servicos/create"><butoon class="btn btn-success"> + Novo Serviço </butoon></a>

    <!--a href="servicos/create_cad"><butoon class="btn btn-info"> Servico + Orçamento Aprovado  </butoon></a-->

</br></br>
    <form action="" name="search" class="form-inline">
        <input type="text" name="search" class="form-control p-2" placeholder="Busque pelo nome do cliente" />
        <input type="submit" value="BUSCAR" class="btn btn-info p-2" />
</br></br>
        <p><a href='orcamentos'>Limpar Busca</a></p>

    </form>

    <hr>


    <table class="table">
        <thead>
            <tr>
                <th>Data</th>
                <th>Empresa</th>
                <th>Cliente</th>
                <th>Endereço</th>
                <th>Serviço</th>
                <th>Contrato</th>
                <th>Preço</th>
                <th>Método de Pgto</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>

        <tbody>
            @foreach($service as $valor)
            <tr>
                <td>{{date("d/m/Y",strtotime($valor->created_at))}}</td>
                <td>{{$valor->company}}</td>
                <td>{{$valor->name}}</td>
                <td>{{$valor->street}} nº {{$valor->number}} - {{$valor->counter}} - {{$valor->city}}</td>
                <td>{{$valor->service}}</td>
                <td><a href="servicos/pdf/{{$valor->id}}" target="_blank"><button class="btn btn-warning"> <i class="fa-solid fa-file-pdf"></i> Contrato</button></a></td>
                <td>{{$valor->price}}</td>
                <td>{{$valor->payment_method}}</td>
                <td><a href="./servicos/update/{{$valor->id}}"> <i class="fa-solid fa-pen text-info"></i></a></td>
                <td><a href="./servicos/destroy/{{$valor->id}}"><i class="fa-solid fa-trash-can text-danger"></i></a></td>

            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection