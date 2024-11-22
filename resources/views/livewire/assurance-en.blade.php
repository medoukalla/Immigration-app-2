<div class="contacts-2-form-wrapper">
    <div class="form-block-contacts w-form" style="padding-top:40px">

            <div class="contact-method-payment">
                <div class="banks">
                    <p>We Accept All Payment Methods in Morocco</p>
                    <div class="payments">
                        <img src="{{ asset('img/mar-banks.svg') }}" alt="Morocco banks">
                    </div>
                </div>
                <div class="banks">
                    <p>We Accept All Payment Methods in Spain</p>
                    <div class="payments">
                        <img src="{{ asset('img/sp-banks.svg') }}" alt="Morocco banks">
                    </div>
                </div>
            </div>
            <div class="note-important">
                Fill Out the Following Information to Calculate the price of Insurance
            </div>
            <h6>1 - Full Name :</h6>
            <input wire:model="full_name" class="contacts-input white-style w-input" maxlength="256" name="name"  placeholder="Please provide your full name." type="text" id="name-2"  />
            
            <h6>2 - Select Insurance Type :</h6>
            <select  name="assurance" id="assurance" class="white-style" required>
                <option value="DKV">DKV</option>
                <option value="SANITAS">SANITAS</option>
                <option value="MAPFRE">MAPFRE</option>
                <option value="ASISA">ASISA</option>
                <option value="ADESLAS">ADESLAS</option>
            </select>
            <h6>3 -  Date of Birth :</h6>
            <div class="date">
                <input wire:model="day" type="number" name="day" placeholder="Day" required>
                <input wire:model="month" type="number" name="month" placeholder="Month" required>
                <input wire:model="year" type="number" name="year" placeholder="Year" required>
            </div>
            
            <h6 style="margin-top: 20px">4 -  Gender :</h6>
            <div class="check-type" style="margin-bottom: 40px">
                <div class="type man">
                    <input type="radio" name="sex" value="Hombre" id="man" wire:model="sex">
                    <label for="man">Male</label>
                </div>
                <div class="type femal">
                    <input type="radio" name="sex" value="Mujer" id="woman" wire:model="sex">
                    <label for="woman">Female</label>
                </div>
            </div>   

            @error('full_name')
                <div class="error-message w-form-fail" style="color: rgb(209, 89, 89) !important;">{{ $message }}</div>
            @enderror
            @error('day')
                <div class="error-message w-form-fail" style="color: rgb(209, 89, 89) !important;">{{ $message }}</div>
            @enderror
            @error('month')
                <div class="error-message w-form-fail" style="color: rgb(209, 89, 89) !important;">{{ $message }}</div>
            @enderror
            @error('year')
                <div class="error-message w-form-fail" style="color: rgb(209, 89, 89) !important;">{{ $message }}</div>
            @enderror
            @error('sex')
                <div class="error-message w-form-fail" style="color: rgb(209, 89, 89) !important;">{{ $message }}</div>
            @enderror
            
            <br>

            <input wire:click="validate_first_step()" type="button" class="primary-button full-width-mobile w-button mt-3" value="calculate the price of insurance"  />

            <!-- Background Overlay Div -->
            <div class="overlay" @if ( $step != 2) style="display: none;" @endif>
                <!-- Modal Content (Popup) -->
                <div class="modal-content-container">
                    <div class="modal-content">
                        <!-- Custom Close Button with SVG -->
                        <button type="button" class="custom-close-btn" aria-label="Close" wire:click="close_popup()">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path d="M12 10.585l4.707-4.707 1.414 1.414L13.414 12l4.707 4.707-1.414 1.414L12 13.414l-4.707 4.707-1.414-1.414L10.585 12 5.878 7.293l1.414-1.414L12 10.585z"/>
                            </svg>
                        </button>
                        <!-- Modal Body -->
                        <div class="modal-body">

                            <div @if ( $request_sent == 'true') style="display: none;" @endif >
                                <h4>Fill out the following information to receive the price of your insurance</h4>
                                <form action="">
                                    <div class="InputItem">
                                        <label for="number">Phone number :</label>
                                        <input wire:model="phone" type="number" name="phone" id="number" class="fcontacts-input white-style w-input" placeholder="+000 000 000 000" required>
                                    </div>
                                    <div class="InputItem">
                                        <label for="mail">Email address :</label>
                                        <input wire:model="email" type="email" name="email" id="mail" class="fcontacts-input white-style w-input" placeholder="exemple@domaine.com" required>
                                    </div>
                                    @error('phone')
                                        <div class="error-message w-form-fail" style="color: rgb(209, 89, 89) !important;">{{ $message }}</div>
                                    @enderror
                                    @error('email')
                                        <div class="error-message w-form-fail" style="color: rgb(209, 89, 89) !important;">{{ $message }}</div>
                                    @enderror
                                    <br>
                                    <button wire:click="validate_second_step()" class="primary-button full-width-mobile w-button" type="button">Receive the award</button>
                                </form>
                            </div>

                            <div @if ( $request_sent == 'false' ) style="display: none;" @endif >
                                <div class="alert alert-success">
                                    Success message here
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </form>
            
    </div>

    <style>
        /* Full-screen overlay */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Black with 50% transparency */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1050; /* Make sure it's above everything else */
        }
    
        /* Modal Content Container (centered popup) */
        .modal-content-container {
            display: flex;
            justify-content: center;
            align-items: center;
            /* position: relative; */
            z-index: 1060; /* Popup should be on top of the overlay */
        }
    
        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px; /* Max width for the modal */
        }
    
        /* Custom Close Button Styling */
        .custom-close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: none;
            border: none;
            cursor: pointer;
            padding: 8px;
            z-index: 1070;
        }
    
        /* Close icon (SVG) */
        .custom-close-btn svg {
            fill: #333;
            width: 24px;
            height: 24px;
        }
    
        /* Modal Body */
        .modal-body {
            padding: 20px 0;
        }
    
        .InputItem {
            margin-bottom: 15px;
        }
    
    </style>
</div>