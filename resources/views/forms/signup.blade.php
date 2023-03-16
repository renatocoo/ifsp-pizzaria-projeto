@extends('common.basic-template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <!-- Default form register -->
            <form method="POST" class="text-center border border-light p-5 mt-5" action="{{ url('save') }}">
                @csrf
                <p class="h4 mb-4">Cadastra-se</p>

                <div class="form-row mb-4">
                    <div class="col">
                        <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome">
                    </div>
                    <div class="col">
                        <input type="text" id="snome" name="snome" class="form-control" placeholder="Sobrenome">
                    </div>
                </div>

                <div><input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail"></div>

                <div><input type="password" id="senha" name="senha" class="form-control" placeholder="Senha"></div>
                <br>

                <input type="text" id="telefone" name="telefone" class="form-control" placeholder="Telefone">
                
                <button class="btn btn-info my-4 btn-block" type="submit">ENVIAR</button>

        </div>
    </div>
</div>