@extends('main')

@section('title', 'Nova Inscrição')

@section('content')
<div class="row">
    @if (session()->has('message'))
    <p class="msg">
        {{ session('message') }}
    </p>
    @endif
</div>
<h2>Realize sua inscrição</h2>
<form method="POST">
    <div class="mb-3 row">
        <div class="col-sm-10">
            <input style="font-weight: lighter;" type="email" class="form-control" id="email" placeholder="Digite seu email">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-10">
            <input style="font-weight: lighter;" type="text" class="form-control" id="nome" placeholder="Digite seu nome">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-10">
            <input style="font-weight: lighter;" type="text" class="form-control" id="telefone" placeholder="Digite seu celular">
        </div>
    </div>

    <button style="margin-left: -20%; width: 41%; margin-bottom: 3%;" type="button" class="btn btn-outline-dark">Enviar</button>
</form>

<p>Ou <button type="button" class="btn btn-outline-light">Clique aqui</button> para ver a classificação </p>
@endsection