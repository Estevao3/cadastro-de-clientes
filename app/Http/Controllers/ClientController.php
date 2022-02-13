<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();

        return view('index', ['clients' => $clients]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(ClientRequest $request)
    {
        Client::create($request->all());

        return redirect()->route('index')->with('msg', 'Cliente cadastrado com sucesso');
    }

    public function edit($id)
    {
        $client = Client::findOrFail($id);

        return view('edit', ['client' => $client]);
    }

    public function update(ClientRequest $request)
    {
        Client::findOrFail($request->id)->update($request->all());

        return redirect()->route('index')->with('msg', 'Cliente editado');
    }

    public function destroy($id)
    {
        Client::findOrFail($id)->delete();

        return redirect()->route('index')->with('msg', 'Cliente excluído com sucesso!');
    }
}
