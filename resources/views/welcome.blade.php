@extends('template/template')

@section('title' , 'Bio Tec Control Pragas Controle de Pragas')

@section('description' , 'A Bio Tec Control Dedetizadora e Desentupidora Ltda. é a controladora de pragas urbanas que atua há 15 anos na Grande São Paulo, cidades vizinhas, litoral e interior. Com seriedade e respeito ao seu cliente se tornou uma das empresas respeitadas no segmento de controle de pragas urbanas')

@section('content')

<div class="container_fluid">

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="image/banner1.gif" alt="Primeiro Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/banner2.png" alt="Segundo Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/banner3.png" alt="Terceiro Slide">
    </div>
  </div>
</div>
   
</div>

<div class="container bg-white p-4">
    <h5 class="text-success bordinha"><i class="fa-solid fa-house"></i>  DEDETIZADORA - DESENTUPIDORA</h5>
    <div class="row">

    <div class="col-md-6">
        <img src="image/cupim_destaque.jpg" width="100%" />
    </div>

    <div class="col-md-6">

    <p>A Bio Tec Control Dedetizadora e Desentupidora Ltda. é a controladora de pragas urbanas que atua há 15 anos na Grande São Paulo, cidades vizinhas, litoral e interior. Com seriedade e respeito ao seu cliente se tornou uma das empresas respeitadas no segmento de controle de pragas urbanas.</p>
    <p>Sempre trabalhando com produtos de qualidade com total eficiência nos controles realizados e acompanhando sempre a evolução dos laboratórios fabricantes, que desenvolvem cada vez mais produto eficazes e com baixo impacto ao meio ambiente.</p>
</div>
    </div>

    </div>

<div class="container_fluid bg-laranja text-center p-4">
    <div class="row">
        <div class="col-md-8">
            <img src="image/ompany.png" width="100%" />
        </div>
        <div class="col-md-4 text-center p-5">
            <h3 class="text-right text-white">ATENDIMENTO 24 HS</h3>
         
            <h3 class="text-right text-white">Whatsapp</h3>
            <h4 class="text-right text-white"><i class="fa-brands fa-whatsapp"></i> (11) 94858-3294</h4>
            <a href="https://api.whatsapp.com/send/?phone=5511948583294" target="_blank"> <button class="btn btn-warning p-4"> <i class="fa-brands fa-whatsapp"></i> (11) 94858-3294 </button> </a>

        </div>
    </div>
</div>

<div class="container boxconteudo bg-white p-4">
    <h3 class="bordinha text-success"><i class="fa-solid fa-toolbox"></i> Serviços</h3>
    <div class="row">
        <div class="bloco">
        <h4 class="bordinha p-2"> <i class="fa-solid fa-tornado"></i> Desentupidora</h4>
        <p>Desentupidora de esgotos, calhas, canos, tubulações, caixa de gordura , entupiu não quebre ... </p>
        </div>

        <div class="bloco">
        <h4 class="bordinha p-2"><i class="fa-solid fa-bug"></i> Descupinização</h4>
        <p>Em caráter curativo e preventivo este serviço tem como objetivo o controle de insetos xilófagos (que se alimentam de madeira e celulose). </p>

        </div>

        <div class="bloco">
        <h4 class="bordinha p-2"><i class="fa-solid fa-viruses"></i> Desratização</h4>
        <p>Realizada para controle e extermínio de roedores (ratazanas de esgoto, ratos de telhado e camundongos).</p>
        </div>

        <div class="bloco">
        <h4 class="bordinha p-2"><i class="fa-solid fa-spider"></i> Desinsetização</h4>
<p>É realizada para controle e extermínio de insetos que infestam as residências, comércios e indústrias.</p>
	
        </div>

        <div class="bloco">
        <h4 class="bordinha p-2"><i class="fa-solid fa-dove"></i> Controle de Pombos</h4>
<p>Os dejetos e secreções dos pombos são potenciais transmissores de perigosas doenças.</p>

        </div>

        <div class="bloco">
        <h4 class="bordinha p-2"><i class="fa-solid fa-bug"> </i> Remoção de enxame de abelhas e marimbondos</h4>
<p>Remoção de abelhas e marimbondos, sem matalas, temos apicultores profissionais.</p>

        </div>


    </div>
    
 

</div>
  


@endsection