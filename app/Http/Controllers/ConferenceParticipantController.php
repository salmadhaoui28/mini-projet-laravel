<?php
// app/Http/Controllers/ConferenceParticipantController.php

namespace App\Http\Controllers;

use App\Models\ConferenceParticipant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConferenceParticipantController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Recherche de l'utilisateur par e-mail
        $participant = ConferenceParticipant::where('email', $request->input('email'))->first();

        if ($participant) {
            // Mise à jour si l'utilisateur existe déjà
            $participant->update([
                'name' => $request->input('name'),
                'password' => bcrypt($request->input('password')),
            ]);
        } else {
            // Création d'un nouvel enregistrement si l'utilisateur n'existe pas
            ConferenceParticipant::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
            ]);
        }

        // Authentification de l'utilisateur
        $participant = ConferenceParticipant::where('email', $request->input('email'))->first();
        Auth::login($participant);

        // Redirection vers la page appropriée
        if ($participant->role === 'admin') {
            return redirect('/admin/dashboard');
        } else {
            return redirect('payement');
        }
    }
}

