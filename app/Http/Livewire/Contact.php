<?php

namespace App\Http\Livewire;

use App\Models\AssuranceRequest;
use Livewire\Component;
use Illuminate\Validation\Rule;

class Contact extends Component
{
    public $service; 
    public $name;
    public $email;
    public $phone;
    public $message;
    public $status = null;  // To track the success or error status

    // Validation rules
    protected $rules = [
        'name' => 'required|string|max:256',
        'email' => 'required|email|max:256',
        'phone' => 'required|numeric|max:15',
        'message' => 'required|string|max:5000',
    ];

    // Custom error messages in Spanish
    protected $messages = [
        'name.required' => 'El campo "Apellido y Nombre" es obligatorio.',
        'email.required' => 'El campo "Dirección de correo electrónico" es obligatorio.',
        'email.email' => 'El formato del correo electrónico no es válido.',
        'phone.required' => 'El campo "Número de teléfono" es obligatorio.',
        'phone.numeric' => 'El campo "Número de teléfono" debe ser un número.',
        'message.required' => 'El campo "Tu mensaje" es obligatorio.',
    ];

    public function submit()
    {
        // Validate the form data
        $this->validate();

        try {
            // Save the data to the AssuranceRequest model
            AssuranceRequest::create([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'message' => $this->message,
            ]);

            // If the data is saved successfully, show success message
            $this->status = 'success';
        } catch (\Exception $e) {
            // If something goes wrong, show error message
            $this->status = 'error';
        }
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
