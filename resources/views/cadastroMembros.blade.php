@extends('layouts.template_base')

@section('content')

<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cadastro</title>
  <link rel="stylesheet" href="css/styles.css">

  <Style>
    /* geral */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Helvetica, sans-serif;
  border: none;
}

input, label {
  display: block;
  outline: none;
  width: 100%;
}

a {
  color: #E60084;
}

.label{
    color:#323232;
}

/* form */
#main-container {
  width: 500px;
  margin-left: auto;
  margin-right: auto;
  background-color: #FFF;
  border-radius: 10px;
  padding: 25px;
  margin-top: 50px;
  
}

#main-container h1 {
  text-align: center;
  margin-bottom: 25px;
  font-size: 1.6rem;
  color:#CF3740;
}

form {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.full-box {
  flex: 1 1 100%;
  position: relative;
}


.half-box {
  flex: 1 1 45%;
  position: relative;
}

.spacing {
  margin-right: 2.5%;
}

label {
  font-weight: bold;
  font-size: .8rem;
}

input {
  border-bottom: 2px solid #323232;
  padding: 10px;
  font-size: .9rem;
  margin-bottom: 40px;
}

input:focus {
  border-color: #CF3740
;
}

input[type="submit"] {
  background-color: #CF3740
;
  color: #FFF;
  border: none;
  border-radius: 20px;
  height: 40px;
  cursor: pointer;
}

#agreement {
  margin-right: 5px;
}

#agreement, #agreement-label {
  display: inline-block;
  width: auto;
}

.error-validation {
  color: #ff1a1a;
  position: absolute;
  top: 57px;
  font-size: 12px;
}

.template {
  display: none;
}

input[tpe='file']{
  display:none;
}

#imgPhoto{
  position:center;
  max-width:100px;
  max-height:100px;
  padding:10px;
  background-color:#eee;
  border: 3px solid #ccc;
  border-radius: 50%;
  cursor:pointer;
  transition: background .5s;
}

#imgPhoto:hover{
  background-color: rgb(180, 180, 180);
  border: 5px solid #111;
}


  </Style>
</head>
<body>

  <?php
    use App\Models\Membro;
    $contador = Membro::count();
  ?>

  <div id="main-container">
    <h1>Cadastro de Membros</h1>

    <p>Quantidade de registros: <?php echo $contador;?></p>

    <!-- A action 'store' está dando erro -->
    <form id="register-form" action="{{action([App\Http\Controllers\MembrosController::class, 'store'])}}" method="POST" enctype="multipart/form-data">
      {{csrf_field()}}

      <div class="half-box spacing">
          <label for="name" class="label">Nome</label>
          <input type="text" name="name" id="name" placeholder="Digite seu nome" data-required data-min-length="3" data-max-length="16">
      </div>
      <div class="half-box">
          <label for="lastname" class="label">Sobrenome</label>
          <input type="text" name="lastname" id="lastname" placeholder="Digite seu sobrenome" data-required data-only-letters>
      </div>
      <div class="half-box spacing">
        <label for="email" class="label">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Digite seu e-mail" data-min-length="2" data-email-validate>
      </div>
      <div class="half-box spacing">
          <label for="name" class="label">Telefone</label>
          <input type="tel" name="telefone" id="telefone" placeholder="(xx) xxxxx-xxxx" data-required data-min-length="3" data-max-length="16">
      </div>
      <div class="half-box spacing">
          <label for="lastname" class="label">Área de Interesse</label>
          <input type="text" name="interesse" id="interesse" placeholder="Digite sua área de interesse" data-required data-only-letters>
      </div>
      <!--<div class="half-box">
        <label for="lastname" class="label">Foto de Perfil</label>
        <input type="image">
      </div>-->
      <div class="full-box">
    
        <div class="imageContainer">
          <img src="image/usuario.png" alt="Selecione uma Imagem" id="imgPhoto">
          <input type="file" name="FlImage" id="FlImage" onchange="previewFile()" accept="image/*">
        </div>
      </div>
      

      <script src="js/imgPerfil.js"></script>
      
      <div>
      </div>
      <div class="full-box">
        <input id="btn-submit" type="submit" value="Cadastrar">
      </div>
    </form>


  </div>
  <div>
  </div>
  <p class="error-validation template"></p>
  <script src="js/scripts.js"></script>
</body>
</html>

@endsection