<x-en.head title="{{ setting('site.title') }}" />

<!-- Top menu navbar -->
    <x-en.main-navbar route="{{route('frontend.sp.contact') }}" />


    <!-- Banner hero section -->
    <x-en.contact-hero />


    <!-- Services contact form -->
    <div class="section without-bottom-spacing">
        <div class="base-container w-container">
            <div data-w-id="502c5dca-196a-0aae-1f67-5b18c9a90237" class="contacts-2-wrapper">
                <div class="contacts-2-content-wrapper">
                    <div class="image-box">
                        <img src="{{ asset('assets/images/contact-image.png') }}" alt="Contact image">
                    </div>
                    <div class="contacts-title">
                        <h2 class="in-section-title">Contactanos Estamos aquí para atenderte!</h2>
                    </div>
                    <div class="contacts-2-content">
                        <p>Si tienes dudas sobre los trámites de extranjería, contáctanos. Estaremos encantados de atenderte.</p>
                    </div>
                    <div class="contacts-info">
                        <div class="contacts-info-wrapper">
                            <div class="c-info-icon">
                                <img src="/assets/images/svg/c-email.svg" alt="Contact Info">
                            </div>
                            <div class="c-info-content">
                                <div class="c-info-title">
                                    Escríbenos
                                </div>
                                <p>consulta@novaextranjeria.com</p>
                            </div>
                        </div>
                        <div class="contacts-info-wrapper">
                            <div class="c-info-icon">
                                <img src="{{ asset('assets/images/svg/c-phone.svg') }}" alt="Contact Info">
                            </div>
                            <div class="c-info-content">
                                <div class="c-info-title">
                                    Llámanos
                                </div>
                                <p>+34 951 256 762</p>
                            </div>
                        </div>
                        <div class="contacts-info-wrapper">
                            <div class="c-info-icon">
                                <img src="{{ asset('assets/images/svg/c-location.svg') }}" alt="Contact Info">
                            </div>
                            <div class="c-info-content">
                                <div class="c-info-title">
                                    Visítanos
                                </div>
                                <p>Calle Mauricio Moro Pareto, 15. 29006. Málaga</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact Form -->
                <div class="contacts-2-form-wrapper">
                    <div class="form-block-contacts w-form">
                        <form id="contact-form" name="contact-form" method="POST" action="{{ route('frontend.sp.contact.store') }}" class="form">

                            @csrf

                            <h3 class="form-heading">Contact Form</h3>
                            <br>
                        
                            <h6>1 - Your First Name :</h6>
                            <input class="contacts-input white-style w-input" maxlength="256" name="first_name" placeholder="Please provide your first name." type="text" id="first_name" required>
                        
                            <h6>2 - Your Last Name :</h6>
                            <input class="contacts-input white-style w-input" maxlength="256" name="last_name" placeholder="Please provide your last name." type="text" id="last_name" required>
                        
                            <h6>3 - Your Email Address :</h6>
                            <input class="contacts-input white-style w-input" maxlength="256" name="email" placeholder="Please provide your email address." type="email" id="email" required>
                        
                            <h6>4 - Your Phone Number :</h6>
                            <input class="contacts-input white-style w-input" maxlength="256" name="phone" placeholder="Please provide your phone number." type="tel" id="phone" required>
                        
                            <h6>5 - Service of Interest :</h6>
                            <select name="service_interest" id="service_interest" class="white-style">
                                <option value="">Select the service you are interested in.</option>
                                <option value="servicio1">Servicio 1</option>
                                <option value="servicio2">Servicio 2</option>
                                <option value="servicio3">Servicio 3</option>
                                <option value="servicio4">Servicio 4</option>
                            </select>
                        
                            <h6>6 - Your Nationality :</h6>
                            <select name="nationality" id="nationality" class="white-style">
                                <option value="">Please indicate your nationality.</option>
                                <option value="nacionalidad1">Nacionalidad 1</option>
                                <option value="nacionalidad2">Nacionalidad 2</option>
                                <option value="nacionalidad3">Nacionalidad 3</option>
                                <option value="nacionalidad4">Nacionalidad 4</option>
                            </select>
                        
                            <h6>7 - Your Place of Residence </h6>
                            <select name="residence" id="residence" class="white-style">
                                <option value="">Please indicate where you currently reside.</option>
                                <option value="ubicacion1">Ubicación 1</option>
                                <option value="ubicacion2">Ubicación 2</option>
                                <option value="ubicacion3">Ubicación 3</option>
                                <option value="ubicacion4">Ubicación 4</option>
                            </select>
                        
                            <h6>8 - Tell Us More About Your Situation :</h6>
                            <textarea class="contacts-input white-style w-input" name="situation_description" id="situation_description" cols="30" rows="10" placeholder="Briefly describe your situation in a few sentences."></textarea>
                        
                            <input type="submit" class="primary-button full-width-mobile w-button" value="Submit">
                        </form>
                        
                        <div class="success-message w-form-done">
                            
                        </div>
                        <div class="error-message w-form-fail">
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Partners -->
    <x-en.partners-white />
    

    <!-- contact-components -->
    <x-en.contact-info />
    
    
    <!-- Feedback -->
    <x-en.testimonials :testimonials="$testimonials" />
    

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            // Handle the form submission via AJAX
            $('#contact-form').submit(function(e) {
                e.preventDefault();  // Prevent the default form submission

                var formData = $(this).serialize();  // Serialize the form data

                $.ajax({
                    url: '{{ route("frontend.sp.contact.store") }}',  // Use the named route for the POST request
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        // Clear any previous error or success messages
                        $('.error-message').hide();
                        $('.success-message').hide();

                        if(response.status === 'success') {
                            // Set the success message inside the success-message div
                            $('.success-message').html(response.message);
                            // Show the success message div
                            $('.success-message').show();
                            // Optionally reset the form
                            $('#contact-form')[0].reset();  // Reset the form fields
                        }
                    },
                    error: function(xhr) {
                        // Clear any previous error or success messages
                        $('.error-message').hide();
                        $('.success-message').hide();

                        // Handle validation or other errors
                        if(xhr.responseJSON && xhr.responseJSON.errors) {
                            // Collect all the error messages and join them into a single string
                            var errorMessages = Object.values(xhr.responseJSON.errors).join('<br>');

                            // Set the error message inside the error-message div
                            $('.error-message').html('Por favor corrija los siguientes errores: <br>' + errorMessages);
                            // Show the error message div
                            $('.error-message').show();
                        } else {
                            // Generic error message if the server didn't return validation errors
                            $('.error-message').html('¡Vaya! Algo salió mal al enviar el formulario.');
                            $('.error-message').show();
                        }
                    }
                });
            });
        });
    </script>

<x-en.footer />

