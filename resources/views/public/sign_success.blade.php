@extends('common.basic-template')

@section('content')

<div class="containt">

    <div class="row">

        <div class="card">

        <img class="card-img-top" src="https://avatars.githubusercontent.com/u/108884191?v=4" alt="Card image cap">

        <div class="card-body">

        <h4 class="card-title"><a>{{$info['nome'].' '.$info['snome']}}</a></h4>
        
        <p class="card-text">Cartão do homem mais lindo que este país já viu!</p>

        </div>

        </div>
    </div>
</div>