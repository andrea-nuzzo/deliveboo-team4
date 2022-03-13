@extends('layouts.app')

@section('content')
<div class="container position-fixed">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">{{ __('Lista dei piatti') }}</div>
                <a href="{{route("dishes.create")}}"><button type="button" class="btn">Aggiungi Piatto</button></a>
                
                <div class="card-body row">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Prezzo</th>
                            <th scope="col">Visibilità</th>
                            <th scope="col">Visualizza</th>
                            <th scope="col">Modifica</th>
                            <th scope="col">Elimina</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($dishes as $dish)
                        @if($dish->user_id == Auth::id())
                          <tr class="{{$loop->index % 2 == 0 ? "card--header" : "" }}">
                            <th scope="row">{{$loop->index + 1}}</th>
                            <td>{{$dish->name}}</td>
                            <td>€ {{$dish->price}}</td>
                            @if($dish->visible)
                                <td>Visibile</td>
                            @else
                                <td>Non Visibile</td>
                            @endif
                            <td class="text-center">
                                <a href="{{route("dishes.show", $dish->id)}}">
                                    <button type="button" class="btn">
                                        <i class="fa-solid fa-binoculars"></i>
                                    </button>
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="{{route("dishes.edit", $dish->id)}}">
                                    <button type="button" class="btn">
                                        <i class="fa-solid fa-pencil"></i>
                                    </button>
                                </a>
                            </td>
                            <td class="text-center">
                                <form action="{{route("dishes.destroy", $dish->id)}}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn"><i class="fa-solid fa-trash-can"></i></button>
                                </form>
                            </td>
                          </tr>
                        @endif
                        @endforeach
                        </tbody>
                      </table>               
            </div>
        </div>
    </div>
</div>
@endsection
