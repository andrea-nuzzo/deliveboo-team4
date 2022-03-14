@extends('layouts.app')

@section('content')
<div class="container position-fixed">
    <div class="row ">
        <div class="col-12 d-flex justify-content-center">
            <div class="row m-3">
                @if($dish->user_id == Auth::id())

                <div class="container dishesShow p-3">
                    {{-- Sezione Immagine Piatto --}}
                    @if ($dish->image)
                        <img src="{{asset("storage/{$dish->image}")}}" alt="{{$dish->name}}">
                    @endif
                    <div class="m-2">
                        {{-- Sezione Ingredienti --}}
                        <div>
                            <div>Ingredienti : {{$dish->ingredients}}</div>
                        </div>
            
                        {{-- Sezione Descrizione --}}
                        <div>
                            <div>Descrizione : {{$dish->description}}</div>
                        </div>
            
                        {{-- Sezione Prezzo --}}
                        <div>
                            <div>Prezzo : € {{$dish->price}}</div>
                        </div>
            
                        {{-- Sezione Visibile --}}
                        <div>
                            @if($dish->visible)
                                <div class="d-flex align-items-center">Visibile :<i class="fa-solid fa-circle-check text-success mx-2"></i></div>
                            @else
                                <div class="d-flex align-items-center">Visibile :<i class="fa-solid fa-circle-xmark text-danger mx-2"></i></div>
                            @endif
                        </div>
                        <div class="mt-3 d-flex">
                            <a href="{{route("dishes.edit", $dish->id)}}"><button type="button" class="btn btn--green">Modifica</button></a>
                        
                            <a href="{{route("dishes.index")}}"><button type="button" class="btn btn-back mx-3">Ritorna alla lista</button></a>
                
                            <form action="{{route("dishes.destroy", $dish->id)}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-back"><i class="fa-solid fa-trash-can "></i></button>
                            </form>
                        </div>
                    </div>
                </div>

            @else
                <div class="container">
                    Non sei autorizzato a visionare il piatto
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

