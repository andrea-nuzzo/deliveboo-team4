@extends('layouts.app')

@section('content')
<div>
    @foreach ($order->dishes as $dish)
    <li>
        <span class="my_food_list">
            {{ $dish->name }}
        </span>
        <span>
            x{{ $dish->pivot->quantity }}
        </span>
    </li>
@endforeach
</div>
@endsection