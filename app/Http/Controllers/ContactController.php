<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Mail\ContactConfirmationMail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:100',
            'email' => 'required|email',
            'subject' => 'required|min:5|max:200',
            'message' => 'required|min:10|max:1000'
        ]);

        try {
            // 1. Envoi de l'email à votre adresse Gmail (notification)
            Mail::to('lalyaisidore@gmail.com')->send(new ContactFormMail($validated));

            // 2. Envoi de l'email de confirmation automatique au visiteur
            Mail::to($validated['email'])->send(new ContactConfirmationMail($validated));

            return redirect()->route('contact')->with('success', 'Merci pour votre message ! Je vous répondrai dans les plus brefs délais.');
        } catch (\Exception $e) {
            return redirect()->route('contact')->with('error', 'Une erreur est survenue lors de l\'envoi du message. Veuillez réessayer.');
        }
    }
}
