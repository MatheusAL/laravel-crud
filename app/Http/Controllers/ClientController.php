<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    //
    public function index() {
        return view('clients.index');
    }

    public function create() {
        return view('clients.index');
    }

    public function search() {
        $clients = DB::table('clients')->get();
        return view('clients.search', ['clients'=> $clients]);
    }

    public function store(Request $request) {
        $client_data = $request->validate([
            'name' => 'required',
            'cpf' =>  'required',
            'address' => 'required',
            'birth' => 'required',
            'state' => 'required',
            'city' => 'required',
            'sex' => 'required',
        ]);

        $client = Client::create($client_data);

        return redirect(route('clients.index'))->with('success', 'Cliente adicionado com sucesso');
    }

    public function get(Request $request) {
        
        $name = $request->name;
        $cpf = $request->cpf;
        $address = $request->address;
        $sex = $request->sex;
        $birth = $request->birth;
        $state = $request->state;
        $city = $request->city;

        $clients = DB::table('clients')->when($name, function ($query) use ($name) {
            return $query->where('name', 'LIKE', "%$name%");
        });
        if(!empty($name)){
            $clients = $clients->where('name','LIKE', $name); 
        }  
        if(!empty($cpf)){
            $clients = $clients->where('cpf', $cpf); 
        }  
        if(!empty($address)){
            $clients = $clients->where('address', $address); 
        }  
        if(!empty($sex)){
            $clients = $clients->where('sex', $sex); 
        }  
        if(!empty($birth)){
            $clients = $clients->where('birth', $birth); 
        }  
        if(!empty($state) && $state != "Selecione"){
            $clients = $clients->where('state', $state); 
        } 
        if(!empty($city) && $city != "Selecione"){
            $clients = $clients->where('city', $city); 
        }
        $clients = $clients->get();
 
        return view('clients.search', ['clients' => $clients]);
    }

    public function delete(Client $client) {
        $client->delete();
        return redirect(route('clients.search'))->with('success', 'Cliente excluído com sucesso');
    }
}
