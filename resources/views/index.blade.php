@extends('layouts.main')

@section('title', 'Clientes')

@section('content')
    <a href="{{ route('create') }}">Cadastrar Cliente</a>

    @if(count($clients) > 0)
        <table border="1px">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Cpf</th>
                    <th>Cep</th>
                    <th>Rua</th>
                    <th>Número</th>
                    <th>Estado</th>
                    <th>Cidade</th>
                    <th>Profissão</th>
                </tr>
            </thead>
            <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->first_name }}</td>
                    <td>{{ $client->last_name }}</td>
                    <td>{{ $client->cpf }}</td>
                    <td>{{ $client->zipcode }}</td>
                    <td>{{ $client->street }}</td>
                    <td>{{ $client->number }}</td>
                    <td>{{ $client->state }}</td>
                    <td>{{ $client->city }}</td>
                    <td>{{ $client->occupation }}</td>
                    <td><a href="{{ route('edit', $client->id) }}"> <input type="submit" value="Editar"></a></td>
                    <td>
                        <form action="{{ route('delete', $client->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="excluir">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
    <p>Não há clientes cadastrados</p>
    @endif
@endsection
