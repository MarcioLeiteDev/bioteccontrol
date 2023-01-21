@extends('template/template')

@section('title' , 'Area de Atendimento Bio Control Pragas')

@section('description' , 'Descrição')

@section('content')

<div class="container p-4 bg-white">

        
<h3 class="bordinha text-success p-3"><i class="fa-solid fa-globe"></i> Atendimento Bio Control Pragas</h3>

<h4>São Paulo e Grande São Paulo.</h4>
<p>Guarulhos, Mairiporã, ABC e D, Mogi das Cruzes, Suzano, Itaquaquecetuba, Aruja Poá e Região.
</p>
<p>Osasco, Cotia, Embu, Barueri, Alphaville, Taboão da Serra
</p>
<h4>Postos de atendimento para centro, zonas leste, oeste, norte e sul.
</h4>
<p>Posto de atendimento para toda Zona Leste nos bairros da Penha e Tatuapé.
</p>
<p>Posto para Zona Norte nos bairros da Casa Verde e em Cahoeirinha
</p>
<p>Posto Zona Sul no bairro da Saúde
</p>
<p>Posto Zona Oeste na Lapa.
</p>
<p>Posto no Centro na Vila buaque.
</p>
<h4>Atendemos a todos bairros de São Paulo. Consulte
</h4>

<table class="table">
    <tbody>
        @foreach($post as $valor)
        <tr>
           
            <td><a href="area/{{$valor->slug}}">{{$valor->title}}</a></td>
            
        </tr>
        @endforeach
    </tbody>
</table>

<div class="row">
    <div class="col-md-6 offset-3 bg-success text-white text-center p-4 radius">
        Orçamento Gratuito </br>
        Ligue Agora 0800 770 8600
    </div>
</div>
</div>


@endsection()