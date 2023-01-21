<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/custom-bootstrap.css" />
  <link rel="stylesheet" href="/css/style.css" />
  <script src="https://kit.fontawesome.com/204aa4dead.js" crossorigin="anonymous"></script>


  <title>@yield('title')</title>
  <meta name='description' content="@yield('description')" />
  <meta name='robots' content='index, follow' />
  <link rel='canonical' href='{{url("/") }}' />

  <meta property='og:title' content="@yield('title')" />
  <meta property='og:description' content="@yield('description')" />
  <meta property='og:url' content='{{url("/") }}' />
  <meta property='og:image' content='{{url("image/logo.png") }}' />

  <meta name='twitter:title' content="@yield('title')" />
  <meta name='twitter:description' content="@yield('description')" />
  <meta name='twitter:url' content='{{url("/") }}' />
  <meta name='twitter:image' content='{{url("image/logo.png") }}' />

  <meta itemprop='name' content="@yield('title')" />
  <meta itemprop='description' content="@yield('description')" />
  <meta itemprop='url' content='{{url("/") }}' />
  <meta itemprop='image' content='{{url("image/logo.png") }}' />

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-G5J7MWER15"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-G5J7MWER15');
  </script>

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-white bordanav p-4">
    <a class="navbar-brand" href="#">
      <img src="/image/logo.png" width="200" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="/"><i class="fa-solid fa-house"></i> Home <span class="sr-only">(página atual)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/empresa"><i class="fa-solid fa-building"></i> Empresa</a>
        </li>



        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa-solid fa-toolbox"></i> Serviços
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/dedetizacao-de-baratas">Dedetização Baratas</a>
            <a class="dropdown-item" href="/dedetizacao-de-cupins-descupinizacao">Dedetização Cupins / Descupinização</a>
            <a class="dropdown-item" href="/dedetizacao-de-escorpioes">Tratamento Especial Escorpiões</a>
            <a class="dropdown-item" href="/dedetizacao-de-formigas">Tratamento Especial Formigas</a>
            <a class="dropdown-item" href="/dedetizacao-de-carrapatos">Tratamento Especial Carrapatos</a>
            <a class="dropdown-item" href="/dedetizacao-de-percevejo">Tratamento Especial Percevejo</a>
            <a class="dropdown-item" href="/dedetizacao-de-pombos">Tratamento Especial Pombos</a>
            <a class="dropdown-item" href="/dedetizacao-de-pulgas">Dedetização Pulgas</a>
            <a class="dropdown-item" href="/dedetizacao-de-ratos-desratizacao">Dedetização Ratos / Desratização</a>
            <a class="dropdown-item" href="/limpeza-caixa-dagua">Limpeza de Caixa d'água</a>
            <!--a class="dropdown-item" href="/impermeabilizacao">Impermeabilização</a-->

          </div>
        <li class="nav-item">
          <a class="nav-link" href="/desentupimento"><i class="fa-solid fa-house-flood-water"></i> Desentupimento</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/localizacao"><i class="fa-solid fa-location-dot"></i> Localização</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/area"><i class="fa-solid fa-globe"></i> Atendimento </a>
        </li>
        <!--li class="nav-item">
        <a class="nav-link" href="/atendimento"><i class="fa-solid fa-headset"></i> Atendimento</a>
      </li-->
        <!--li class="nav-item">
        <a class="nav-link" href="/orcamentos"><i class="fa-solid fa-file"></i> Orçamentos</a>
      </li-->
        <li class="nav-item">
          <a class="nav-link" href="/contato"><i class="fa-solid fa-envelopes-bulk"></i>Contato</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login" target="_blank"> <i class="fa-solid fa-unlock"></i> Admin</a>
        </li>
        </li>

      </ul>

    </div>
  </nav>


  @yield('content')


  <div class="container_fluid bg-roxo text-center p-5 bordaatend">
    <div class="row">
      <div class="col-md-4">
        <img src="image/atendimento.jpg" class="radiushome" width="100%" />
      </div>
      <div class="col-md-8 text-center p-5">
        <h2 class="text-right text-white">ATENDIMENTO 24 HS</h2>
        <!--h1 class="text-right text-warning">0800 770 8600</h1-->
        <h2 class="text-right text-white">Whatsapp</h2>
        <h4 class="text-right text-white">
          <a href="https://api.whatsapp.com/send/?phone=5511948583294" target="_blank"> <button class="btn btn-warning p-4"> <i class="fa-brands fa-whatsapp"></i> (11) 94858-3294 </button> </a>
        </h4>

      </div>
    </div>
  </div>

  <footer class="container_fluid bg-dark text-white bordafooter">
    <div class="row">
      <div class="col-md-4 text-white">
        <h3 class="text-white bordinha p-2"><i class="fa-solid fa-toolbox"></i> Serviços</h3>
        <ul>
          <a href="/dedetizacao-de-baratas" class="link">
            <li class="text-white">Dedetização de Baratas</li>
          </a>
          <a href="/dedetizacao-de-cupins-descupinizacao" class="link">
            <li class="text-white">Descupinização</li>
          </a>
          <a href="/dedetizacao-de-escorpioes" class="link">
            <li class="text-white">Dedetização de Escorpião</li>
          </a>
          <a href="/dedetizacao-de-formigas" class="link">
            <li class="text-white">Dedetização de Formigas</li>
          </a>
          <a href="/dedetizacao-de-carrapatos" class="link">
            <li class="text-white">Dedetização de Carrapatos</li>
          </a>
          <a href="/dedetizacao-de-percevejo" class="link">
            <li class="text-white">Dedetização de Percevejo</li>
          </a>
          <a href="/dedetizacao-de-pombos" class="link">
            <li class="text-white">Dedetização de Pombos/ Tratamento especial</li>
          </a>
          <a href="/dedetizacao-de-pulgas" class="link">
            <li class="text-white">Dedetização de Pulgas</li>
          </a>
          <a href="/dedetizacao-de-ratos-desratizacao" class="link">
            <li class="text-white">Dedetização de Ratos / Desratização</li>
          </a>
          <a href="/limpeza-caixa-dagua" class="link">
            <li class="text-white">Limpeza Caixa D'Água</li>
          </a>
          <a href="/desentupimento" class="link">
            <li class="text-white">Desentupimento</li>
          </a>

        </ul>
      </div>

      <div class="col-md-4">
        <h3 class="text-white p-2 bordinha">Atendimento</h3>
        <p>Aceitamos todas as formas de Pagamento</p>
        <img src="image/bandeiras.jpg" width="100%" />
      </div>

      <div class="col-md-4">
        <h3 class="text-white p-2 bordinha">Contato</h3>


        <p>Celular: (11) 94858-3294 </p>
        <p>E-mail: atendimento@biocontrolpragas.com.br</p>


        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14634.67217846225!2d-46.5273121!3d-23.5084633!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb315ccf0928079bf!2sBio%20Control%20Pragas!5e0!3m2!1spt-BR!2sbr!4v1656518376977!5m2!1spt-BR!2sbr" width="90%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


      </div>

    </div>

  </footer>

  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>