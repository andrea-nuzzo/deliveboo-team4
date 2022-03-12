@extends('layouts.app')

@section('content')
    @if($dish->user_id == Auth::id())
        <div class="container">
            {{-- Sezione Immagine Piatto --}}
            @if ($dish->image)
                <img src="{{asset("storage/{$dish->image}")}}" alt="{{$dish->name}}">
            @endif

            {{-- Sezione Ingredienti --}}
            <div>
                <h6>Ingredienti</h6>
                <div>{{$dish->ingredients}}</div>
            </div>

            {{-- Sezione Descrizione --}}
            <div>
                <h6>Descrizione</h6>
                <div>{{$dish->description}}</div>
            </div>

            {{-- Sezione Prezzo --}}
            <div>
                <h6>Prezzo</h6>
                <div>{{$dish->price}}</div>
            </div>

            {{-- Sezione Visibile --}}
            <div>
                @if($dish->visible)
                    <div class="btn btn-success">Visibile</div>
                @else
                    <div class="btn btn-danger">Visibile</div>
                @endif
            </div>
        </div>
    @else
        <div class="container">
            Non sei autorizzato a visionare il piatto
        </div>
    @endif

    <a href="{{route("dishes.index")}}"><button type="button" class="btn plainBtn">Ritorna alla lista</button></a>

    <a href="{{route("dishes.edit", $dish->id)}}"><button type="button" class="btn">Modifica</button></a>


    <form action="{{route("dishes.destroy", $dish->id)}}" method="POST">
        @csrf
        @method("DELETE")
        <button type="submit" class="btn">Elimina</button>
    </form>

        
@endsection
