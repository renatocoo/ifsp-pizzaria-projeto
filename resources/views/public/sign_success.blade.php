@extends('common.basic-template')

@section('content')
<div class="container mx-auto">
    <div class="row mt-5 mx-auto">
            <div class="row row-cols-1 row-cols-md-3 mx-auto">
                <div class="col mb-4 mx-auto">
                    <div class="card h-100">
                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.webp"
                        alt="Card image cap">
                        <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title">{{ $info['nome'].' '.$info['snome'] }}</h4>
                        <!--Text-->
                        <p class="card-text">{{ $info['email'].' '.$info['senha'].' '.$info['telefone'] }}</p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <button type="button" class="btn btn-light-blue btn-md mx-auto">Saiba Mais</button>

                    </div>
                </div>
        </div>
    </div>
</div>

