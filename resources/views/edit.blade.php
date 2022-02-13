@extends('layouts.main')

@section('title', 'Editando: ' . $client->first_name)

@section('content')

    <h1>Editar</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('update', $client->id) }}" method="post">
        @csrf
        @method('PUT')
        <label>Nome:</label><br>
        <input type="text" name="first_name" placeholder="" value="{{ $client->first_name }}"><br>

        <label>Sobrenome:</label><br>
        <input type="text" name="last_name" placeholder="" value="{{ $client->last_name }}"><br>

        <label>Cpf:</label><br>
        <input type="text" name="cpf" placeholder="" value="{{ $client->cpf }}"><br>

        <label>Cep:</label><br>
        <input type="text" name="zipcode" placeholder="" value="{{ $client->zipcode }}"><br>

        <label>Rua:</label><br>
        <input type="text" name="street" placeholder="" value="{{ $client->street }}"><br>

        <label>Número:</label><br>
        <input type="text" name="number" placeholder="" value="{{ $client->number }}"><br>

        <label>Estado:</label><br>
        <input type="text" name="state" placeholder="" value="{{ $client->state }}"><br>

        <label>Cidade:</label><br>
        <input type="text" name="city" placeholder="" value="{{ $client->city }}"><br>

        <label>Profissão:</label><br>
        <input type="text" name="occupation" placeholder="" value="{{ $client->occupation }}"><br>

        <input type="submit" name="enviar" value="Enviar">
    </form>

@endsection
