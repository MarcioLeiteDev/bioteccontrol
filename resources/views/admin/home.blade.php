@extends('template/admin')

@section('content')

<div class="container_fluid">
    <div class="row">

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

    <div class="card orcamento" style="width: 47%; margin:1%;">
  
  <div class="card-body">
    <h5 class="card-title"><i class="fa-solid fa-pen"></i>  Orçamentos</h5>
    <p class="card-text">
        

    <table class="table">
      <thead>
        <tr>
          <th>Data</th>
          <th>Cliente</th>
          <th>Serviço</th>
          <th>Valor</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
      @foreach($budget as $budgets) 
        <tr style="font-size:0.8em;">
          <td style="font-size:0.7em;">{{date('d/m/Y',strtotime($budgets->data))}}</td>
          <td>{{$budgets->name}} / {{$budgets->company}}</td>
          <td>{{$budgets->service}}</td>
          <td>{{number_format($budgets->price,2,".",",")}}</td>
          <td>
            @php
            if($budgets->status == 1){
              echo "<p class='bg bg-info p-2'>Em analise</p>";
            }
            if($budgets->status == 2){
              echo "<p class='bg bg-success p-2'>Aprovado</p>";
            }
            if($budgets->status == 3){
              echo "<p class='bg bg-danger p-2'>Cancelado</p>";
            }

            @endphp

            </td>
        </tr>
      @endforeach
      </tbody>
    </table>

   
</p>
  
  </div>
</div>


<div class="card servico" style="width: 47%; margin:1%;">
  
  <div class="card-body">
    <h5 class="card-title"><i class="fa-solid fa-screwdriver-wrench"></i> Serviços</h5>
    <p class="card-text">
    <table class="table">
      <thead>
        <tr>
          <th>Data</th>
          <th>Cliente</th>
          <th>Serviço</th>
          <th>Valor</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
      @foreach($service as $services) 
        <tr style="font-size:0.8em;">
          <td style="font-size:0.7em;">{{date('d/m/Y',strtotime($services->created_at))}}</td>
          <td>{{$services->name}} / {{$services->company}}</td>
          <td>{{$services->service}}</td>
          <td>{{number_format($services->price,2,".",",")}}</td>
          <td>
            @php
            if($services->status == 1){
              echo "<p class='bg bg-info p-2'>Aguardando</p>";
            }
            if($services->status == 2){
              echo "<p class='bg bg-success p-2'>Executado</p>";
            }
            if($services->status == 3){
              echo "<p class='bg bg-danger p-2'>Cancelado</p>";
            }

            @endphp

            </td>
        </tr>
      @endforeach
      </tbody>
    </table>
    </p>
    
  </div>
</div>


<div class="card lembrete" style="width: 96%; margin:1%;">
 
  <div class="card-body">
    <h5 class="card-title"><i class="fa-solid fa-bookmark"></i> Renovação </h5>
    <p class="card-text">
    <table class="table">
      <thead>
        <tr>
          <th>Data</th>
          <th>Cliente</th>
          <th>Serviço</th>
          <th>Telefone</th>
          <th>E-mail</th>       
        </tr>
      </thead>
      <tbody>
        @foreach($renovacao as $renovacoes)
        <tr>
          <td>{{$renovacoes->warranty}}</td>
          <td>{{$renovacoes->company}} / {{$renovacoes->name}}</td>
          <td>{{$renovacoes->service}}</td>
          <td>{{$renovacoes->phone}}</td>
          <td>{{$renovacoes->email}}</td>
        </tr>
        @endforeach
      </tbody>

    </table>        
</p>
    
  </div>
</div>




<div class="card entrada" style="width: 46%; margin:1%;">
 
  <div class="card-body">
    <h5 class="card-title"><i class="fa-solid fa-plus"></i> ENTRADAS</h5>
    <p class="card-text">
    <table class="table">
      <thead>
        <tr>
          <th>Data</th>
          <th>Descrição</th>
          <th>Valor</th>
        </tr>
      </thead>
      <tbody>
        @foreach($entrada as $entradas)
        <tr>
          <td>{{date("d/m/Y",strtotime($entradas->day_payment))}}</td>
          <td>{{$entradas->description}}</td>
          <td>{{number_format($entradas->price,2,".",",")}}</td>
          </tr>
          @endforeach
      </tbody>

    </table>       
</p>
    
  </div>
</div>


<div class="card saida" style="width: 46%; margin:1%;">
 
  <div class="card-body">
    <h5 class="card-title"><i class="fa-solid fa-minus"></i> Saidas</h5>
    <p class="card-text">
    <table class="table">
      <thead>
        <tr>
          <th>Data</th>
          <th>Descrição</th>
          <th>Valor</th>
        </tr>
      </thead>
      <tbody>
      @foreach($saida as $saidas)
        <tr>
          <td>{{date("d/m/Y",strtotime($saidas->day_payment))}}</td>
          <td>{{$saidas->description}}</td>
          <td>{{number_format($saidas->price,2,".",",")}}</td>
          </tr>
          @endforeach
      </tbody>

    </table>               
</p>
    
  </div>
</div>





    </div>
</div>


@endsection()