@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header card--header">{{ __('Registrati') }}</div>



                <div class="card-body">
                    <form method="POST" name="myForm" action="{{ route('register') }}" onsubmit="return validateForm()" enctype="multipart/form-data">
                        @csrf
                        
                        {{-- Section Name --}}
                        {{-- <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome Ristorante *') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        {{-- Section E-mail --}}
                        {{-- <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo E-Mail *') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        {{-- Section Password --}}
                        {{-- <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password *') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" minlength="8" required  autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                
                            </div>
                        </div> --}}

                        {{-- Section Confirm Password --}}
                        {{-- <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Conferma Password *') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required minlength="8" autocomplete="new-password"
                                onSubmit="validate()">
                            </div>
                        </div> --}}

                        {{-- Section Address --}}
                        {{-- <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo *') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        {{-- Section Partita IVA --}}
                        {{-- <div class="form-group row">
                            <label for="p_iva" class="col-md-4 col-form-label text-md-right">{{ __('Partita Iva *') }}</label>
                            <div class="col-md-6">
                                <input id="p_iva" type="text"  class="form-control @error('p_iva') is-invalid @enderror" name="p_iva" value="{{ old('p_iva') }}" 
                                required 
                                pattern="[0-9]+"
                                oninvalid="this.setCustomValidity('La Partita IVA deve contenere solo numeri')"
                                oninput="this.setCustomValidity('')"
                                maxlength="11"
                                minlength="11"
                                autocomplete="p_iva" autofocus>

                                @error('p_iva')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        {{-- Section Phone --}}
                        {{-- <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>
                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        {{-- Section Typologies --}}
                        <div class="form-group row">
                            <label for="typologies" class="col-md-4 col-form-label text-md-right">{{ __('Tipologie *') }}</label>
                            <div class="col-md-6">
                                @foreach ($typologies as $typology)
                                    <div class="form-check form-check-inline col-3">
                                        <input type="checkbox" id="{{$typology->slug}}" name="typologies[]" class="form-check-input" 
                                        value="{{$typology->id}}" {{in_array($typology->id, old("typologies", [])) ? 'checked' : ''}}>
                                        <label class="form-check-label" for="{{$typology->slug}}">{{$typology->type}}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        {{-- Section Upload Image --}}
                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{__('Aggiungi un immagine')}}</label>
                            <div class="col-md-6 d-flex align-items-center">
                                <img id="uploadPreview" width="100" src="http://drive.google.com/uc?export=view&id=1RvAowCnXCvqajysCVqzhMseDH85cBJbo" class="rounded">
                                <input type="file" class="form-control-file mx-3 @error('image') is-invalid @enderror" id="image" required name="image" onchange="PreviewImage();">

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- This function allows you to have the preview of the image --}}
                            <script type="text/javascript">
                                function PreviewImage() {
                                    var oFReader = new FileReader();
                                    oFReader.readAsDataURL(document.getElementById("image").files[0]);

                                    oFReader.onload = function (oFREvent){
                                        document.getElementById("uploadPreview").src= oFREvent.target.result;
                                    };
                                };
                            </script>
                        </div>

                        {{-- Button Register --}}
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn--green">
                                    {{ __('Registrati') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class=" col-md-6 capiObbligatori text-center my-3">* Campi obbligatori</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
