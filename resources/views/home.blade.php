@extends('layouts.template_base')

@section('content')

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title></title>

    <!-- Referências em CSS -->
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css"/>

    <!-- Referências em JS -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js" defer></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>

</head>

<body>
    <div id="mãe">
        <!-- <div id="containerSuperior"></div> -->
        <div id="containerInferior"><br />
            <div id="boxTabela">
                <div id="componentesTabela">
                    <div class="card">
                        <table id="example" class="table striped">
                            <thead id="headTable">
                                <tr>
                                    <th scope="col">Imagem de perfil</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Telefone</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Area de interesse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="https://s2.glbimg.com/19J9NXPOE9EvzcwcsxwUs_0uT4g=/0x0:1440x800/924x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_e84042ef78cb4708aeebdf1c68c6cbd6/internal_photos/bs/2017/n/B/bEDK6CRByxaLqqPA3kog/20091021-a-grande-familia-ac-006-abre.jpg" alt="" id="perfil"></td>
                                    <td>Augistinho Carrara</td>
                                    <td>(70)7070-7070</td>
                                    <td>guguCarrara@gmail.com</td>
                                    <td>Vendas</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Imagem de perfil</th>
                                    <th>Nome</th>
                                    <th>Telefone</th>
                                    <th>E-mail</th>
                                    <th>Area de interesse</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- <style>
    .card{
        padding: 8px; 
        border: 5px solid black; 
        border: 2px solid black;
        border-color: #bb4560;
        border-radius: 25px;

    }
    #example{
        width:100%; 
        height: 300px;
        text-align:center;
        font-size: 15px;
    }
    #headTable{
        text-align:center;
        font-size: 15px;
    }
    #btnTable{

    }


</style>

<div class="container">
<h2> Ficha Técnica </h2>
<p>Essa tela é dedicada para o gerenciamento de todos os insumos possíveis para a criação de todas as fichas técnicas dos drinques.</p>

<div class="card">
    <table id="example" class="table striped">
        <thead id="headTable">
            <tr>
                <th>Nome</th>
                <th>Preços</th>
                <th>Ingredientes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Vodka</td>
                <td>
                    Kislla: R$15,00<br>
                </td>
                <td><button type="button" id="btnTable">Botão</button></td>
            </tr>
        <tfoot>
            <tr>
                <th>Nome</th>
                <th>Preços</th>
                <th>Ingredientes</th>
            </tr>
        </tfoot>
    </table>
</div>
</div>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css"/>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js" defer></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script> -->
    
    <!-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div> -->
@endsection
