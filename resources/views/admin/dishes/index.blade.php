@extends('layouts.app')

@section('content')
<div class="container position-fixed">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">{{ __('Lista dei piatti') }}</div>
                <a href="{{route("dishes.create")}}"><button type="button" class="btn">Aggiungi Piatto</button></a>
                
                <div class="card-body row">
                    @foreach ($dishes as $dish)
                    @if($dish->user_id == Auth::id())
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
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td></td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>

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
            </div>
        </div>
    </div>
</div>
@endsection
