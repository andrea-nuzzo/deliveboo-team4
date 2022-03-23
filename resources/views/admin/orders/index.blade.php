@extends('layouts.app')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Cognome</th>
        <th scope="col">Telefono</th>
        <th scope="col">Indirizzo</th>
        <th scope="col">dishes</th>

      </tr>
    </thead>
    <tbody>
    @foreach ($orders as $order)
        
      <tr>
        <th>{{$loop->index + 1}}</th>
        <td>{{$order->first_name}}</td>
        <td>{{$order->last_name}}</td>
        <td>{{$order->phone}}</td>
        <td>{{$order->address}}</td>
        <td>{{foreach($order->dish as $dish)}}</td>
      </tr>
    
      @endforeach

    </tbody>
  </table>
  @dd($orders)
    {{-- @foreach ($dishes as $item)
        @dd($item)
    @endforeach --}}
@endsection