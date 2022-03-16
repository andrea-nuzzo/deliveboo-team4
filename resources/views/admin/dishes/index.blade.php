@extends('layouts.app')

@section('content')

<div class="container position-fixed">
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
                                   
                                    {{-- <img class="pic-2" src="images/img-2.jpg"> --}}
                                </a>
                                {{-- <a href="#" class="product-like-icon" data-tip="Add to Wishlist">
                                    <i class="far fa-heart"></i>
                                </a> --}}
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
                                
                            </div>

                            <div class="product-content">
                                <h3 class="title">{{$dish->name}}</h3>
                                <div class="price">Prezzo: € {{$dish->price}}</div>
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


