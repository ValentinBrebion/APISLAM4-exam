<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Commande;
use Illuminate\Http\Request;

class CommandesController extends Controller
{
    
    function ListerLesCommandes($idClient){
        return response()->json(Client::find($idClient)->commandes()->with('produit')->get());
    }

    function supprimerCommande($idCommande){
        // Code permettant de supprimer une commande
        return response()->json(Commande::destroy($idCommande));
    }
}
