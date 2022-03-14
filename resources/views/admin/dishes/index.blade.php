@extends('layouts.app')

@section('content')
<div class="container position-fixed">
    <div class="row justify-content-center">
        <div class="col-12 ">
            <div class="card">
                <div class="card-header card--header d-flex justify-content-between align-items-center">
                    <div>{{ __('Lista dei piatti') }}</div>
                    <a href="{{route("dishes.create")}}"><button type="button" class="generalBtn btn--white">Aggiungi Piatto</button></a>
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
                                    <img class="pic-1" src="http://drive.google.com/uc?export=view&id=1RvAowCnXCvqajysCVqzhMseDH85cBJbo">
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
                                            @method("DELETE")
                                            <button type="submit" class="btn"><i class="fa-solid fa-trash-can "></i></button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h3 class="title">{{$dish->name}}</h3>
                                <div class="price">€ {{$dish->price}}</div>
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


