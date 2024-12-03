<?php

namespace App\Http\Livewire;

use App\Models\Email;
use Livewire\Component;

class ContactSpanish extends Component
{

    public $name;
    public $email;
    public $phone;
    public $message;
    public $status = null;  // To track the success or error status

    public $service;

    // Validation rules
    protected $rules = [
        'name' => 'required|string|max:256',
        'email' => 'required|email|max:256',
        'phone' => 'required|string|max:15',
        'message' => 'required|string|max:5000',
    ];

    // Custom error messages in English
    protected $messages = [
        'name.required' => 'El campo "Nombre" es obligatorio.',
        'email.required' => 'El campo "Dirección de Correo Electrónico" es obligatorio.',
        'email.email' => 'La "Dirección de Correo Electrónico" debe ser una dirección de correo válida.',
        'phone.required' => 'El campo "Número de Teléfono" es obligatorio.',
        'message.required' => 'El campo "Mensaje" es obligatorio.',
    ];

    public function submit()
    {
        
        // Validate the form data
        $this->validate();

        try {
            // Save the data to the AssuranceRequest model
            Email::create([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'message' => $this->message,
                'service' => $this->service
            ]);

            // Clear the form fields after successful submission
            $this->reset(['name', 'email', 'phone', 'message']);

            // If the data is saved successfully, show success message
            $this->status = 'success';
        } catch (\Exception $e) {
            // If something goes wrong, show error message
            $this->status = 'error';
        }
    }
    public function render()
    {
        return view('livewire.contact-spanish');
    }
}
