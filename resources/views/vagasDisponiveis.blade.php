@extends('layouts.template_base')

@section('content')

<!-- Fonte -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

<!-- Barra de Pesquisa -->
<nav class="navbar navbar-light"  style="background-color: #696D70;">
    <form class="form-inline" style="display: inline-block;">
        <input class="form-control mr-sm-2" type="search" placeholder="Procure Aqui..." aria-label="Search">
        <button class="btn btn-primary" style="background-color: #E83A42; border-color: #E83A42; display:inline-block">Pesquisar</button>
    </form>

    <button class="btn btn-primary" style="background-color: #E83A42; border-color: #E83A42; display:inline-block">Adicionar</button>

</nav>

<!-- Cards -->
<div class="container" style="font-family: Raleway;">
    <div class="jumbotron" style="background-color:#DADADA ;">
        <div class="card-deck">
        
            <div class="card" style="width:400px; background-color: #696D70; color:white; border-color: black;">
                <img class="card-img-top" src="https://thumbs.dreamstime.com/b/%C3%ADcone-do-pic-perfil-isolado-no-fundo-branco-133862807.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Empresa</h4>
                    <hr class="solid" style="border-top: 3px solid #FFFFFF;">
                    <h5>Vaga - Area</h5>
                    <p></p>
                    <a data-toggle="modal" data-target="#exampleModal" type="button" href="#" class="btn btn-primary" style="background-color: #E83A42; border-color: #E83A42; display:inline-block; transition:none">Saiba Mais</a>
                </div>
            </div>

            <div class="card" style="width:400px; background-color: #696D70; color:white; border-color: black;">
                <img class="card-img-top" src="https://thumbs.dreamstime.com/b/%C3%ADcone-do-pic-perfil-isolado-no-fundo-branco-133862807.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Empresa</h4>
                    <hr class="solid" style="border-top: 3px solid #FFFFFF;">
                    <h5>Vaga - Area</h5>
                    <p></p>
                    <a data-toggle="modal" data-target="#exampleModal" type="button" href="#" class="btn btn-primary" style="background-color: #E83A42; border-color: #E83A42; display:inline-block; transition:none">Saiba Mais</a>
                </div>
            </div>

            <div class="card" style="width:400px; background-color: #696D70; color:white; border-color: black;">
                <img class="card-img-top" src="https://thumbs.dreamstime.com/b/%C3%ADcone-do-pic-perfil-isolado-no-fundo-branco-133862807.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Empresa</h4>
                    <hr class="solid" style="border-top: 3px solid #FFFFFF;">
                    <h5>Vaga - Area</h5>
                    <p></p>
                    <a data-toggle="modal" data-target="#exampleModal" type="button" href="#" class="btn btn-primary" style="background-color: #E83A42; border-color: #E83A42; display:inline-block; transition:none">Saiba Mais</a>
                </div>
            </div>

        </div>
    </div>
</div>




<!-- Modal Saiba mais -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Saiba Mais</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Empresa</h4>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque incidunt molestiae dicta cupiditate, quidem, fugit asperiores eveniet accusantium consequatur beatae, explicabo corrupti itaque quo optio dolor eius laboriosam recusandae velit.</p>
        <hr>
        <h4>Vaga</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui repudiandae quaerat sint tempora quasi provident fuga animi. Veritatis, pariatur quo vero, expedita temporibus commodi id recusandae voluptas maiores eaque nisi.</p>  
        <hr>
        <h4>Contatos</h4>
        <!-- Google -->
        <a class="btn btn-primary" style="background-color: #dd4b39;" href="#!" role="button">
        <i class="fab fa-google"></i>
        </a>
        <!-- Linkedin -->
        <a class="btn btn-primary" style="background-color: #0082ca;" href="#!" role="button">
        <i class="fab fa-linkedin-in"></i>
        </a>
        <!-- Whatsapp -->
        <a class="btn btn-primary" style="background-color: #25d366;" href="#!" role="button">
        <i class="fab fa-whatsapp"></i>
        </a>

    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #E83A42; border-color: #E83A42; display:inline-block">Ok</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #E83A42; border-color: #E83A42; display:inline-block">Ok</button>

      </div>
    </div>
  </div>
</div>






@endsection