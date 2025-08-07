<?php
// app/Http/Controllers/ContactController.php
namespace App\Http\Controllers;

use App\Models\Contact;
use Exception;
use Illuminate\Http\Request;
use App\Mail\ContactConfirmationMail;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'noms' => 'required|string|max:255',
                'email' => 'required|email',
                'phonenumber' => 'nullable|string|max:20',
                'message' => 'required|string',
            ]);

            $contact = ContactMessage::create($validated);

            Mail::to($contact->email)->send(new ContactConfirmationMail($contact));
            return redirect()->route('acceuil')->with('success', 'Votre message a été envoyé avec succès. Nous vous répondrons dans les plus brefs délais.');
        } catch (Exception $e) {            
            return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'envoi de votre message. Veuillez réessayer plus tard.');
        }
    }
}
