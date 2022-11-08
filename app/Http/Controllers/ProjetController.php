<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Matiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjetController extends Controller
{
    public function insertionNote()
    {
        $users = User::where("admin", 1)->get();
        return View("professeur.insertionNote", [
            "users" => $users,
        ]);
    }

    public function storeNote(Request $request)
    {
        $request->validate([
            "email" => "required",
            "note1" => "required|numeric",
            "note2" => "required|numeric",
            "devoir" => "required|numeric",
        ]);

        $user_email = $request->email;
        $etudiant = User::where("email", $user_email)->first();
        $matiere_id = $request->matiere_id;
        $matieres = Matiere::findOrFail($matiere_id);
        $nom_matiere = $matieres->nom;

       $matiere= $etudiant->matieres()->create([
            "nom" => $nom_matiere,
        ]);

        $matiere->notes()->create([
            "interro1" => $request->note1,
            "interro2" => $request->note2,
            "devoir" => $request->devoir,
        ]);

        return redirect("insertionNote")->with("message", "ajouter encore un autre");
    }

    public function etudiantNote()
    {
        $userAuth = Auth::User();
       // dd($userAuth);
        return view("etudiants.etudiantNote", [
            "userAuth" => $userAuth
        ]);
    }

    public function listeEtudiant()
    {
        $etudiants = User::where("admin", 0)->get();
        return view("professeur.listeEtudiant", [
            "etudiants" => $etudiants,
        ]);
    }
}
