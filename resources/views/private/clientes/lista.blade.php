@extends('common.basic-template')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto mt-5">

            @component('components.table', ['cols' => $cols, 'data' => $data]) @endcomponent

        </div>              
    </div>
</div>