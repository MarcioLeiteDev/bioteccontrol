<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/custom-bootstrap.css" />
    <link rel="stylesheet" href="/css/admin.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

    <script src="https://kit.fontawesome.com/204aa4dead.js" crossorigin="anonymous"></script>


<title>ADMIN BIO CONTROL PRAGAS</title>
 
  </head>

  
  <body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> ... </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="{{url('dashboard')}}" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">
                <img src="/image/logo.png" width="125" />
            </span> </a>
                <div class="nav_list"> 
                <a href="{{url('dashboard/home')}}" class="nav_link active" title="Home"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> 
                
                <a href="{{url('dashboard/usuarios')}}" class="nav_link" title="usuários"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Usuários</span> </a> 
                
                <a href="{{url('dashboard/clientes')}}" class="nav_link" title="clientes"> <i class='bx bx-heart nav_icon'></i> <span class="nav_name">Clientes</span> </a> 
                
                <a href="{{url('dashboard/orcamentos')}}" class="nav_link" title="orçamentos"> <i class='bx bx-pen nav_icon'></i> <span class="nav_name">Orçamentos</span> </a> 
               
                <a href="{{url('dashboard/servicos')}}" class="nav_link" title="serviços"> <i class='bx bx-wrench nav_icon'></i> <span class="nav_name">Serviços</span> </a> 
               
                <a href="{{url('dashboard/financeiro')}}" class="nav_link" title="financeiro"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Financeiro</span> </a>  
                
                <a href="{{url('dashboard/post')}}" class="nav_link" title="post"> <i class='bx bx-world nav_icon'></i> <span class="nav_name">Post</span> </a> 
            
            </div>
            </div> <a href="{{url('dashboard/sair')}}" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Sair</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light">
        <div class="container_fluid bg-info p-3 text-white text-right">Olá <b>{{ auth()->user()->name }}</b> você esta logado. </div>
        @yield('content')
    </div>
    <!--Container Main end-->



    <!-- JavaScript (Opcional) -->
   
    <script src="/js/admin.js"> </script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>"
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>