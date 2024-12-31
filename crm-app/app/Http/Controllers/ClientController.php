<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('shares.client-form');
    }
    public function create()
    {
        $valid = request()->validate([
            'name' => 'required|min:3|max:255',
            'commpany' => 'required',
            'email' => 'required|email|',
            'phone' => 'required|string|max:15|regex:/^\+?[0-9]{10,15}$/',
            'note'=> 'max:255',
        ]);
        $valid['user_id'] = auth()->id();
        Client::create([
            'name'=> $valid['name'],
            'user_id'=> $valid['user_id'],
            'email'=> $valid['email'],
            'commpany'=> $valid['commpany'],
            'phone'=> $valid['phone'],
            'note'=> $valid['note'],
        ]);
        return redirect()->route('dashboard')->with('success','Client create successfull!!');
    }
    public function delete(Client $client){
        $client->delete();
        return redirect()->route('dashboard')->with('success', 'delete client successfull');
    }
    public function edit(Client $client){
        return view('shares.edit-client-form',compact('client'));
    }
    public function update(Client $client){
        $valid = request()->validate([
            'name' => 'required|min:3|max:255',
            'commpany' => 'required',
            'email' => 'required|email|',
            'phone' => 'required|string|max:15|regex:/^\+?[0-9]{10,15}$/',
            'note'=> 'max:255',
        ]);
        $client->name = $valid['name'];
        $client->email = $valid['email'];
        $client->commpany = $valid['commpany'];
        $client->phone = $valid['phone'];
        $client->note = $valid['note'];
        $client->save();
        return redirect()->route('dashboard')->with('success', 'update client successfull');

    }
}
