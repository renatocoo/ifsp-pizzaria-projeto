@extends('common.basic-template')

@section('content')
<div class="container">

    <div class="row my-5">
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
            <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Secondary Panel title</h5>
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
    </div>

    <div class="col-5 mx-auto">
        <form class="text-center border border-light p-5" action="#!">
            <p class="h4 mb-4">Fazer Login</p>

            <div class="form-outline mb-4">
                <input type="email" name="email" id="email" class="form-control" />
                <label class="form-label" for="email">Email</label>
            </div>

            <div class="form-outline mb-4">
                <input type="password" name="senha" id="senha" class="form-control" />
                <label class="form-label" for="senha">Senha</label>
            </div>

            <button type="submit" class="btn btn-secondary btn-block my-5">Fazer Login</button>

        </form>
    </div>


</div>