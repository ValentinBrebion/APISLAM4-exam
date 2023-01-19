<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    function creerClient(Request $request){
        $Client = new Client();
        $Client->nom = $request->nom;
        $Client->prenom = $request->prenom;
        $Client->email = $request->email;
        $Client->password = $request->password;
        $Client->save();
        return response()->json($Client);
    }

    
}
