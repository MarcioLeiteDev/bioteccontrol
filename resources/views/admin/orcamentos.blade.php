@extends('template/admin')

@section('content')

<div class="container_fluid">

@if(session('msg'))

<div class='alert alert-info'>{{session('msg')}}</div>

@endif
    <h2>Orçamentos</h2>

    <a href="orcamentos/create"><butoon class="btn btn-success"> Orçamento + Cliente Novo </butoon></a>

    <a href="orcamentos/create_cad"><butoon class="btn btn-info"> Orçamento + Ciente Cadastrado </butoon></a>

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
                <th>Nome</th>
                <th>Empresa</th>
                <th>Telefone</th>
                <th>Preço</th>
                <th>Orçamento</th>
                <th>Status</th>
                <th>Enviar</th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>
        </thead>

        <tbody>
            @foreach($budget as $valor)
            <tr>
                <td>
                    {{date('d/m/Y',strtotime($valor->data))}}
                 </td>
                <td>{{$valor->name}}</td>
                <td>{{$valor->company}}</td>
                <td>{{$valor->phone}}</td>
                <td>{{number_format($valor->price,2,",",".")}}</td>
                <td><a href="orcamentos/pdf/{{$valor->id}}" target="_blank"><button class="btn btn-success"> <i class="fa-solid fa-file-pdf"></i> Orçamento</button></a></td>
                @if($valor->status == NULL)
               <td class="bg bg-warning"> Tem nada aqui</td>
                @endif
                @if($valor->status == 1)
               <td class="bg bg-info"> Em análise</td>
                @endif
                @if($valor->status == 2)
               <td class="bg bg-success"> Aprovado</td>
                @endif
                @if($valor->status == 3)
               <td class="bg bg-danger"> Cancelado</td>
                @endif
              
                <td>
                
                 <a href="https://web.whatsapp.com/send?phone=55{{$valor->phone}}&text=Ola {{$valor->name}}%0A Conforme solicitado segue orçamento *BIO CONTROL PRAGAS* %0A Acesse orçamento no link abaixo %0A http://www.biocontrolpragas.com.br/dashboard/orcamentos/pdf/{{$valor->id}}' " target="_blank">   <i class="fa-brands fa-whatsapp" style="font-size: 2em; color:green;"></i> </a>
                </td>
                  <td><a href="./orcamentos/update/{{$valor->id}}"> <i class="fa-solid fa-pen text-info"></i></a></td>
                <td><a href="./orcamentos/destroy/{{$valor->id}}"><i class="fa-solid fa-trash-can text-danger"></i></a></td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>



@endsection()