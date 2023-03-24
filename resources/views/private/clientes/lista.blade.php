@extends('common.basic-template')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto mt-5">

            <table class="table">
                <thead>
                    <tr>                    
                    @foreach ($cols as $col)
                        <th scope="col">{{$col}}</th>
                    @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $user)
                        <tr>
                            <!--<th scope="row">-></th>
                            <td>{{$user['nome']}}</td>
                            <td>{{$user['snome']}}</td>
                            <td>{{$user['idade']}}</td>
                            <td>{{$user['insta']}}</td>-->

                            @foreach($user as $nome => $valor)
                                <td>{{$valor}}</td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>              
    </div>
</div>