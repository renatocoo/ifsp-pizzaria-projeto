@extends('common.basic-template')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto mt-5">

            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $user)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{$user['nome']}}</td>
                            <td>{{$user['snome']}}</td>
                            <td>{{$user['insta']}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>              
    </div>
</div>