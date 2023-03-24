<table class="table">
    <h1>Tabela sendo usada como componente</h1>
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
                    <td><i class="far fa-gem mr-2 danger-text" aria-hidden="true">{{$valor}}</td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>