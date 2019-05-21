@extends('layout.site')

@section('titulo','Login')

@section('conteudo')
<div class="container">
  <h3 class="center">Login no sistema</h3>
  <div class="row">
    <form class="" action="{{ route('login.entrar') }}" method="post">
      {{ csrf_field() }}

      <div class="input-field">
        <input type="text" name="email" value="">
        <label>E-Mail</label>
      </div>

      <div class="input-field">
        <input type="password" name="senha" value="">
        <label>Senha</label>
      </div>

      <button class="btn deep-orange">Login</button>
    </form>
  </div>

</div>
@endsection
