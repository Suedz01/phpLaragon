@extends('layouts.template_base')

@section('content')

<div class="container">
  <table class="table">
    <thead>
      <tr>
        <!--@foreach($ids as $id)
        @endforeach-->
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Senha</th>
        <th scope="col">Operação</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Admin</td>
        <td>Admin@admin.com</td>
        <td>123456789</td>
        <td>
          <button type="submit" class="btn btn-primary">Editar</button>
          <button type="submit" class="btn btn-danger">Deletar</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>



@endsection