<?php

namespace App\Http\Livewire;

use App\Models\AssuranceRequest;
use Livewire\Component;

class Assurance extends Component
{

    public $step = 1;
    public $request_sent = 'false';

    // inputs of first step 
    public $full_name;
    public $day;
    public $month;
    public $year;
    public $sex;

    // inputs of second step
    public $phone;
    public $email;
    public $assurance;

    public function mount()
    {
        $this->assurance = 'DKV';
    }

    public function render()
    {
        return view('livewire.assurance');
    }



    public function validate_first_step() {
        $this->request_sent = 'false';

        $validatedData = $this->validate(
            [
                'full_name' => 'required|string',  // Full name is required and should be a string
                'day' => 'required|integer|min:1|max:31',  // Day is required, an integer between 1 and 31
                'month' => 'required|integer|min:1|max:12',  // Month is required, an integer between 1 and 12
                'year' => 'required|integer',  // Year is required and should be an integer
                'sex' => 'required|in:Hombre,Mujer',  // Sex is required and must be either 'Hombre' or 'Mujer'
            ],
            [
                'full_name.required' => 'El :attribute no puede estar vacío.',
                'full_name.string' => 'El :attribute debe ser una cadena válida.',
                'day.required' => 'El :attribute es obligatorio.',
                'day.integer' => 'El :attribute debe ser un número entero válido.',
                'day.min' => 'El :attribute debe ser al menos 1.',
                'day.max' => 'El :attribute no puede exceder 31.',
                'month.required' => 'El :attribute es obligatorio.',
                'month.integer' => 'El :attribute debe ser un número entero válido.',
                'month.min' => 'El :attribute debe ser al menos 1.',
                'month.max' => 'El :attribute no puede exceder 12.',
                'year.required' => 'El :attribute es obligatorio.',
                'year.integer' => 'El :attribute debe ser un número entero válido.',
                'sex.required' => 'Por favor, selecciona tu :attribute.',
                'sex.in' => 'El :attribute debe ser "Hombre" o "Mujer".'
            ],
            [
                'full_name' => 'Nombre completo',
                'day' => 'Día',
                'month' => 'Mes',
                'year' => 'Año',
                'sex' => 'Sexo',

            ]
        );


        // move to step 2 
        $this->step = 2;
        
    }

    public function validate_second_step() {

        $this->request_sent = 'false';

        $validatedData = $this->validate(
            [
                'phone' => 'required|numeric|digits_between:10,15',  // Phone is required, numeric, and between 10 and 15 digits
                'email' => 'required|email',  // Email is required and must be a valid email address
            ],
            [
                'phone.required' => 'El número de teléfono es obligatorio.',
                'phone.numeric' => 'El número de teléfono debe ser un valor numérico.',
                'phone.digits_between' => 'El número de teléfono debe tener entre 10 y 15 dígitos.',
                'email.required' => 'La dirección de correo electrónico es obligatoria.',
                'email.email' => 'La dirección de correo electrónico no es válida.',
            ],
            [
                'phone' => 'Número de teléfono',
                'email' => 'Correo electrónico',
            ]
        );


        // everything is good 

        // Combine the date fields into one 'date' string in the format YYYY-MM-DD
        $formattedDate = "{$this->year}-{$this->month}-{$this->day}";

        AssuranceRequest::create([
            'name' => $this->full_name,
            'date' => $formattedDate,
            'sex' => $this->sex,
            'phone' => $this->phone,
            'email' => $this->email,
            'assurance' => $this->assurance, 
        ]);

        // clear inputs
        $this->reset(['full_name', 'day', 'month', 'year', 'sex', 'phone', 'email']);

        $this->request_sent = 'true';

    }

    public function close_popup() {
        $this->step = 1;
    }
}
