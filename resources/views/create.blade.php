@extends('layouts.main')

@section('title', 'Cadastrar Cliente')

@section('content')

<h1>Create Post</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('store') }}" method="post">
    @csrf
    <label>Nome:</label><br>
    <input type="text" name="first_name" placeholder="" value="{{ old('first_name') }}"><br>

    <label>Sobrenome:</label><br>
    <input type="text" name="last_name" placeholder="" value="{{ old('last_name') }}"><br>

    <label>Cpf:</label><br>
    <input type="text" name="cpf" placeholder="" value="{{ old('cpf') }}"><br>

    <label>Cep:</label><br>
    <input type="text" name="zipcode" placeholder="" value="{{ old('zipcode') }}"><br>

    <label>Rua:</label><br>
    <input type="text" name="street" placeholder="" value="{{ old('street') }}"><br>

    <label>Número:</label><br>
    <input type="text" name="number" placeholder="" value="{{ old('number') }}"><br>

    <label>Estado:</label><br>
    <input type="text" name="state" placeholder="" value="{{ old('state') }}"><br>

    <label>Cidade:</label><br>
    <input type="text" name="city" placeholder="" value="{{ old('city') }}"><br>

    <label>Profissão:</label><br>
    <input type="text" name="occupation" placeholder="" value="{{ old('occupation') }}"><br>

    <input type="submit" name="enviar" value="Enviar">
</form>

@endsection
