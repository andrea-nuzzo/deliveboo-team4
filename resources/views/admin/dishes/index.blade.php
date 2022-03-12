@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($dishes as $dish)
        @if($dish->user_id == Auth::id())
            <div class="row my-2">
                <div class="col">{{$dish->name}}</div>
                <div class="col">{{$dish->price}}</div>
                @if($dish->visible)
                    <div class="col btn btn-success">Visibile</div>
                @else
                    <div class=" col btn btn-danger">Visibile</div>
                @endif

                {{-- Sezione Bottoni Piatto --}}
                <div class="col">
                    <a href="{{route("dishes.show", $dish->id)}}"><button type="button" class="btn">Visualizza</button></a>
                </div>
                <div class="col">
                    <a href="{{route("dishes.edit", $dish->id)}}"><button type="button" class="btn">Modifica</button></a>
                </div>
                <div class="col">
                    <form action="{{route("dishes.destroy", $dish->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn">Elimina</button>
                    </form>
                </div>
            </div>
        @endif
    @endforeach
</div>

@endsection
