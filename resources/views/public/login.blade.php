@extends('common.basic-template')

@section('content')
<div class="container">

    <div class="row mb-5 mt-5">
        <div class="col">
            <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Primary Panel title</h5>
                    <p class="card-text text-white">Some quick example text to build on the panel title and make up the bulk of the panel's content.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
                <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Secondary Panel title</h5>
                        <p class="card-text text-white">Some quick example text to build on the panel title and make up the bulk of the panel's content.</p>
                    </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Success Panel title</h5>
                    <p class="card-text text-white">Some quick example text to build on the panel title and make up the bulk of the panel's content.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">

        <div class="col-5 mx-auto">

            <form class="text-center border border-light p-5" action="#!">

                <p class="h4 mb-4">Fazer Login</p>

                <input type="email" id="email" name ="email" class="form-control mb-4" placeholder="E-mail">
                <input type="password" id="senha" name="senha" class="form-control mb-4" placeholder="Senha">

                <button class="btn btn-info btn-block my-5" type="submit">Entrar</button>

            </form>

        </div>

    </div>

</div>