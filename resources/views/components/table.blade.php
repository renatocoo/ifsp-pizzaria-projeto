<table class="table">
    <p>Tabela sendo usada como componente</p>
    <thead class="black white-text">
        <!-- <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr> -->
        @foreach ($cols as $col)
            <th scope="col">{{$col}}</th>
        @endforeach
    </thead>
    <tbody>
        @foreach ($data as $user)
            <tr>
                <!-- <th scope="row">-></th>
                <td>{{$user['nome']}}</td>
                <td>{{$user['snome']}}</td>
                <td>{{$user['idade']}}</td>
                <td>{{$user['insta']}}</td> -->

                @foreach($user as $nome => $valor)
                    <td>{{$valor}}</td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>