@extends('common.basic-template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <form method="POST" class="text-center border border-light p-5 mt-5" action="{{ url('save') }}"><!-- Helper Function -->
                @csrf
                <p class="h4 mb-4">Cadastre-se</p>

                <div class="form-row mb-4">
                    <div class="col">
                        <!-- First name -->
                        <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome">
                    </div>
                    <div class="col">
                        <!-- Last name -->
                        <input type="text" id="snome" name="snome" class="form-control" placeholder="Sobrenome">
                    </div>
                </div>

                <!-- E-mail -->
                <input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail">

                <!-- Password -->
                <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha">
                <br>

                <!-- Phone number -->
                <input type="text" id="telefone" name="telefone" class="form-control" placeholder="Telefone">

                <!-- Sign up button -->
                <button class="btn btn-info my-4 btn-block" type="submit">Enviar</button>

            </form>
        </div>
    </div>
</div>