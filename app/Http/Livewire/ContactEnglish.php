<?php

namespace App\Http\Livewire;

use App\Models\Email;
use Livewire\Component;

class ContactEnglish extends Component
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
        'name.required' => 'The "Name" field is required.',
        'email.required' => 'The "Email Address" field is required.',
        'email.email' => 'The "Email Address" must be a valid email address.',
        'phone.required' => 'The "Phone Number" field is required.',
        'message.required' => 'The "Message" field is required.',
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
        return view('livewire.contact-english');
    }
}
