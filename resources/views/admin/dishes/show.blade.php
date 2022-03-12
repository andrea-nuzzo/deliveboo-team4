@extends('layouts.app')

@section('content')

<div class="container">
    {{-- Sezione Immagine Piatto --}}
    @if ($dish->image)
        <img src="{{asset("storage/{$dish->image}")}}" alt="{{$dish->name}}">
    @endif

    {{-- Sezione Ingredienti --}}
    <div>
        <h6>Ingredineti</h6>
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

@endsection
