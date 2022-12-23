<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <title>Fluxo de Caixa</title>

  <link rel="icon" href="https://maisconsultoria.com.br/wp-content/uploads/2021/08/favicon.png" sizes="192x192">
  <link rel="icon" href="https://maisconsultoria.com.br/wp-content/uploads/2021/08/favicon.png" sizes="32x32">
  <link rel="apple-touch-icon" href="https://maisconsultoria.com.br/wp-content/uploads/2021/08/favicon.png">

  <!-- Custom fonts for this template-->
  <script src="https://kit.fontawesome.com/a84fbcf12f.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Raleway:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
  <script src="https://kit.fontawesome.com/fd016a7d8f.js" crossorigin="anonymous"></script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion d-print-none" style= "background-color: #3f4142" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{asset('home')}}">
        <div class="sidebar-brand-icon">
          <img height="50px" src="image/logoMais.png"/>
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading" style="font-size: 12.5px; color: white; font-family:Ralew Bold">
        Gerenciar
      </div>

    <!-- Nav Item - Cadastro de Membros -->
    <li class="nav-item">
        <a class="nav-link" href="{{asset('home')}}">   <!-- href deve ser o nome da rota que esta em web.php -->
          <i class="bi bi-receipt"></i>  <!-- i são icones -->
          <span style="font-size: 14.5px; font-family:Ralew">HOME</span></a>
      </li>

      <!-- Nav Item - Cadastro de Membros -->
      <li class="nav-item">
        <a class="nav-link" href="{{asset('cadastroMembros')}}">   <!-- href deve ser o nome da rota que esta em web.php -->
          <i class="bi bi-receipt"></i>  <!-- i são icones -->
          <span style="font-size: 14.5px; font-family:Ralew">Cadastro de Membros</span></a>
      </li>
  
      <!-- Nav Item - Vagas Disponíveis -->
      <li class="nav-item">
        <a class="nav-link" href="{{asset('vagasDisponiveis')}}">  <!-- href deve ser o nome da rota que esta em web.php -->
          <i class="bi bi-bag"></i>  <!-- esse é outro icone -->
          <span style="font-size: 14.5px; font-family:Raleway">Vagas Disponíveis</span></a>
      </li>

      @if(auth()->check() && auth()->user()->user) 
      <!-- Divider -->
      <hr class="half-rule"/>
      <!-- Heading -->
      <div class="sidebar-heading" style="font-size: 12.5px; color: white; font-family:Ralew Bold">
        ADMIN
      </div>
      <!-- Nav Item - Página do Ponto -->
      <li class="nav-item">
        <a class="nav-link" href="{{asset('controleDeMembros')}}">
        <i class="fa fa-address-card iconmenu" aria-hidden="true"></i>
          <span style="font-size: 14.5px; color: #fff">Controle de Membros</span></a>
      </li>
    @endif

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Logout -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
          <i class="fas fa-sign-out-alt" style="margin-left: 1%"></i>
          <span style="font-size: 14.5px; margin-left: 1%;">Logout</span></a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar)
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div> -->

    </ul>
    <!-- Fim da barra lateral -->

    <!-- Aqui vai o conteudo da página -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content" style="background-color:transparent"> <!-- cor de fundo -->
      

      @yield('content')
      </div>
      <!-- Aqui vai a view -->

      <!-- Footer -->
      <footer class="sticky-footer" style="background-color: transparent; height:1%">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <h6 style="height:1%">Copyright &copy; CONSELT 2021</h6>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- Fim do conteudo da página -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <!-- <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

  <!-- Core plugin JavaScript-->
  <script defer src="{{asset('js/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script defer src="{{asset('js/sb-admin-2.js')}}"></script>
  <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.0.2/chart.min.js')}}"></script>

</body>

</html>
