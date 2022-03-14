@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{route("dishes.store")}}" method="POST" enctype="multipart/form-data">
        @csrf
    
        {{-- Section Name --}}
        <div class="form-group">
            <label for="name">Nome *</label>
            <input type="text" class="form-control 
            @error('name') is-invalid @enderror" 
            name="name" 
            id="name" 
            placeholder="Aggiungi il nome del piatto" 
            value="{{old('name')}}"
            required oninvalid="this.setCustomValidity('Il campo Nome è obbligatorio')">

            @error('name')
             <div class="alert alert-danger my-2"> {{$message}}</div>
            @enderror
        </div>
    
        {{-- Section Ingredients --}}
        <div class="form-group">
            <label for="ingredients">Ingredienti *</label>
            <input type="text" class="form-control
            @error('ingredients') is-invalid @enderror" 
            name="ingredients" 
            id="ingredients" 
            placeholder="Aggiungi gli ingredienti" 
            value="{{old('ingredients')}}"
            required oninvalid="this.setCustomValidity('Il campo Ingredienti è obbligatorio')">
            
            @error('ingredients')
             <div class="alert alert-danger my-2"> {{$message}}</div>
            @enderror
        </div>
    
        {{-- Section Description --}}
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea type="text" class="form-control 
            @error('description') is-invalid @enderror" 
            name="description" 
            id="description" 
            placeholder="Aggiungi la descrizione" 
            rows="5">
            {{old('description')}}</textarea>
            @error('description')
             <div class="alert alert-danger my-2"> {{$message}}</div>
            @enderror
        </div>
    
        {{-- Section Price --}}
        <div class="form-group">
            <label for="price">Prezzo *</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">€</span>
                </div>
                <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" name="price" 
                id="price" 
                placeholder="Aggiungi il prezzo" 
                value="{{old('price')}}" 
                required oninvalid="this.setCustomValidity('Il campo Prezzo è obbligatorio')">
            </div>

            @error('price')
             <div class="alert alert-danger my-2"> {{$message}}</div>
            @enderror
        </div>
    
        {{-- Section Visible --}}
        <div class="form-group">
            <div class="form-check form-check-inline">
                <label class="form-check-label mr-2" for="visible">Visibile</label>
                <input class="form-check-input" type="checkbox" id="visible" name="visible" {{old('visible') ? "checked" : ""}} >
            </div>

            @error('visible')
             <div class="alert alert-danger my-2"> {{$message}}</div>
            @enderror
        </div>

        {{-- Section Image --}}
        <div class="form-group">
            <label for="image" class="col-form-label text-md-right">Aggiungi un immagine</label>
            <div class="d-flex align-items-center">
                <img id="uploadPreview" width="100" src="http://drive.google.com/uc?export=view&id=1RvAowCnXCvqajysCVqzhMseDH85cBJbo" class="rounded">
                <input type="file" class="form-control-file mx-3 @error('image') is-invalid @enderror" id="image" name="image" onchange="PreviewImage();">

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
    
        {{-- Section Button --}}
        <button type="submit" class="btn btn--green">Crea</button>
    
        <a href="{{route("dishes.index")}}"><button type="button" class="btn btn-back">Ritorna alla lista</button></a>
    
    </form>
</div>
@endsection
