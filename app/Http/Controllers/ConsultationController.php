<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewConsultationAdminNotification;
use App\Mail\ConsultationConfirmation;
use Illuminate\Support\Facades\Log;

class ConsultationController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validate the incoming data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'company_name' => 'nullable|string|max:255',
            'service' => 'required|string',
            'description' => 'nullable|string',
            'preferred_date' => 'nullable|date',
            'preferred_time' => 'nullable|string',
        ]);

        // 2. Create and save the new consultation record
        $consultation = Consultation::create($validatedData);

        // 3. Send email notifications
        try {
            Mail::to('fortinform@gmail.com')->send(new NewConsultationAdminNotification($consultation));
            Mail::to($consultation->email)->send(new ConsultationConfirmation($consultation));
        } catch (\Exception $e) {
            // If mail fails, we don't want to show an error to the user.
            // We can log this error for debugging on the server.
            Log::error("Mail sending failed: " . $e->getMessage());
        }

        // 4. Redirect back with a success message
        return redirect()->route('consultation.form')->with('success', 'Ваша заявка на консультацию принята! Мы скоро свяжемся с вами.');
    }
}
