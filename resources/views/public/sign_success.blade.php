@extends('common.basic-template')

@section('content')

<div class="containt">

    <div class="row">

                <!-- Card -->
        <div class="card">

        <!-- Card image -->
        <img class="card-img-top" src="https://avatars.githubusercontent.com/u/108884191?v=4" alt="Card image cap">

        <!-- Card content -->
        <div class="card-body">

        <!-- Title -->
        <h4 class="card-title"><a>{{$info['nome'].' '.$info['snome']}}</a></h4>
        <!-- Text -->
        <p class="card-text">Card</p>

        </div>

        </div>
        <!-- Card -->
    </div>
</div>