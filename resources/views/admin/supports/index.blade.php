<h1>Listas dos suportes</h1>

<a href="{{ route('supports.create') }}">Criar dúvida</a>

<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descricao</th>
        <tbody>
            @foreach($supports as $support)
            <tr>
                <td>{{$support->subject}}</td>
                <td>{{$support->status}}</td>
                <td>{{$support->body}}</td>
                <td>
                    <a href="{{ route('supports.show', $support->id) }}">Ir</a>
                    <a href="{{ route('supports.edit', $support->id) }}">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </thead>
</table>