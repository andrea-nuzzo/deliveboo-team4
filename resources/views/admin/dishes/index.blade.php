@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 ">
            <div class="card">
                <div class="card-header card--header d-flex justify-content-between align-items-center">
                    <div>{{ __('Lista dei piatti') }}</div>
                    <div class="socialIcons d-flex align-items-center">
                        <div class="buttonPlus"><a href="{{route("dishes.create")}}"><i class="fa-solid fa-plus"></i>Aggiungi Piatto</a></div>
                    </div>
                </div>
                
            </div>
            <div class="row my-3">
                @foreach($dishes as $dish)
                @if($dish->user_id == Auth::id())
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    @if (empty($dish->image))
                                    <img class="pic-1" src="{{asset('/storage/image/logo/placeholder.svg')}}">
                                    @else
                                        <img class="pic-1" src="{{asset("storage/{$dish->image}")}}">
                                    @endif
                                </a>
                                
                                <ul class="product-links">
                                    <li>
                                        <a href="{{route("dishes.show", $dish->id)}}">
                                            <button type="button" class="btn">
                                                <i class="fa-solid fa-binoculars "></i>
                                            </button>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route("dishes.edit", $dish->id)}}">
                                            <button type="button" class="btn">
                                                <i class="fa-solid fa-pencil "></i>
                                            </button>
                                        </a>
                                    </li>
                                    <li>
                                        <form action="{{route("dishes.destroy", $dish->id)}}" method="POST">
                                            @csrf
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button  type="submit" class="btn show_confirm"><i class="fa-solid fa-trash-can "></i></button>
                                        </form>
                                    </li>
                                </ul>

                                {{-- script modale cancellazione piatto --}}
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
                                <script>
                                    // Funzione modale per la cancellazione del piatto
                                        $('.show_confirm').click(function(event) {
                                            var form =  $(this).closest("form");
                                            var name = $(this).data("name");
                                            event.preventDefault();
                                            swal({
                                                title: `Sei sicuro di voler cancellare il piatto?`,
                                                text: "Se confermi, non potrai più tornare indietro",
                                                icon: "error",
                                                buttons: ["Annulla", true],
                                                dangerMode: true,
                                            })
                                            .then((willDelete) => {
                                                if (willDelete) {
                                                form.submit();
                                                }
                                            });
                                        });
                                </script>
                                
                            </div>

                            <div class="product-content">
                                <h3 class="title">{{$dish->name}}</h3>
                                <div class="price">Prezzo: € {{$dish->price}}</div>
                            
                                @if($dish->visible)
                                <div class="d-flex align-items-center">
                                    <span class="price">Visibile :</span>
                                   <i class="fa-solid fa-circle-check text-success mx-2"></i>
                                </div>
                                @else
                                    <div class="d-flex align-items-center">
                                        <span class="price">Visibile :</span>
                                        <i class="fa-solid fa-circle-xmark text-danger mx-2"></i>
                                    </div>
                                @endif
                            </div>

                        </div>
                        
                    </div>
                @endif
                @endforeach
            </div>               
        </div>
    </div>
</div>
@endsection


