<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $clientes = Client::where("user_id", auth()->user()->id)->paginate(10);
        return view("dashboard",compact('clientes'));
    }
}
