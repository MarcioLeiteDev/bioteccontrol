@extends('template/admin')

@section('content')

<div class="container_fluid">
    <h2>Financeiro</h2>
    <div class="col-md-12 p-4">
        <h3>Filtro</h3>
        <form action="" method="" class="form-inline">
            @csrf
            <label>Inicio</label>
            <input type="date" name="start" class="form-control p-2 m-2" />
            <label>Fim</label>
            <input type="date" name="end" class="form-control p-2 m-2" />
            <input type="submit" value="BUSCAR" class="btn btn-success p-2 m-2" />

        </form>
    </div>

    <div class="row">

    <div class="col-md-6">
        <h2 class="bg bg-success p-3 text-white">ENTRADAS</h2>

        <form action="{{url('dashboard/financeiro/store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Descrição</label>
                <input type="text" name="description" class="form-control" />
            </div>
            <div class="form-group">
                <label>Data</label>
                <input type="date" name="day_payment" class="form-control" />
            </div>
            <div class="form-group">

                <input type="radio" name="tipo" value="unica"  class="form" /> Unica
                <input type="radio" name="tipo" value="parcela"  class="form" /> Parcela

                <div class="col-lg-12 js_parcelas" id="ocultar"> 
                <input type="text" name="js_parcelas" class="form-control" placeholder="Digitar para separado por barra ex : 5/15/45" />
                </div>
            </div>
            <div class="form-group">
                <label>Valor</label>
                <input type="text" name="price" class="form-control" />
            </div>
            <div class="form-group">
                <input type="hidden" name="mode" value="1" />
                <input type="submit" value="CADASTRAR ENTRADA" class="btn btn-success" />
            </div>

        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Status</th>
                    <th>Editar</th>
                    <th>Deletar</th>
                </tr>
            </thead>

            <tbody>
                @foreach($entrada as $entradas)

                <tr>
                    <td>{{date('d/m/Y',strtotime($entradas->day_payment))}}</td>
                    <td>{{$entradas->description}}</td>
                    <td>{{number_format($entradas->price,2,",",".")}}</td>
                    <td>
                        
                    @php

                    if($entradas->status == "paid"){
                        echo "<div class='bg bg-success p-2 text-white'> Pago </div>";
                    }

                    if($entradas->status == "unpaid"){
                        echo "<div class='bg bg-danger p-2 text-white'> Em Aberto </div>";
                    }
                
                @endphp
                    </td>
                    <td><a href="./financeiro/status/{{$entradas->id}}?status={{$entradas->status}}"><button class="btn btn-info">Mudar Status</button></a> </td>
                    <td>
                    <a href="./financeiro/destroy/{{$entradas->id}}"><i class="fa-solid fa-trash-can text-danger"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>


    <div class="col-md-6">
        <h2 class="bg bg-danger p-3 text-white">SAIDAS</h2>

        <form action="{{url('dashboard/financeiro/store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Descrição</label>
                <input type="text" name="description" class="form-control" />
            </div>
            <div class="form-group">
                <label>Data</label>
                <input type="date" name="day_payment" class="form-control" />
            </div>
            <div class="form-group">

                <input type="radio" name="tipo" value="unica"  class="form" /> Unica
                <input type="radio" name="tipo" value="parcela"  class="form" /> Parcela

                <div class="col-lg-12 js_parcelas" id="ocultar"> 
                <input type="text" name="js_parcelas" class="form-control" placeholder="Digitar para separado por barra ex : 5/15/45" />
                </div>
            </div>
            <div class="form-group">
                <label>Valor</label>
                <input type="text" name="price" class="form-control" />
            </div>
            <div class="form-group">
                <input type="hidden" name="mode" value="0" />
                <input type="submit" value="CADASTRAR SAIDAS" class="btn btn-danger" />
            </div>

        </form>


        <table class="table">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Status</th>
                    <th>Editar</th>
                    <th>Deletar</th>
                </tr>
            </thead>

            <tbody>
                @foreach($saida as $saidas)
                <tr>
                    <td>{{date('d/m/Y',strtotime($saidas->day_payment))}}</td>
                    <td>{{$saidas->description}}</td>
                    <td>{{number_format($saidas->price,2,".",",")}}</td>
                    <td>
                        
                    @php

if($saidas->status == "paid"){
    echo "<div class='bg bg-success p-2 text-white'> Pago </div>";
}

if($saidas->status == "unpaid"){
    echo "<div class='bg bg-danger p-2 text-white'> Em Aberto </div>";
}

@endphp
                    </td>
                    <td>
                    <a href="./financeiro/status/{{$saidas->id}}?status={{$saidas->status}}"><button class="btn btn-info">Mudar Status</button></a> 
                    </td>
                    <td><a href="./financeiro/destroy/{{$saidas->id}}"><i class="fa-solid fa-trash-can text-danger"></i></a></td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>


    </div>

</div>

<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

<script>

$(function () {
   
    $("#ocultar").hide();
    $(".js_fixa").hide();
    $(".js_parcelas").hide();
    $('input[name="tipo"]').change(function () {
        if ($('input[name="tipo"]:checked').val() === "fixa") {
            $('.js_fixa').show();
        } else {
            $('.js_fixa').hide();
        }
        if ($('input[name="tipo"]:checked').val() === "parcela") {
            $('.js_parcelas').show();
        } else {
            $('.js_parcelas').hide();
        }
    });

});
</script>

@endsection