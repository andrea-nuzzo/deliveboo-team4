@extends('layouts.app')

@section('content')
<div class="container tableOrder">
  <table class="table tableOrder table-bordered mt-5">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Cognome</th>
          <th scope="col">Telefono</th>
          <th scope="col">Indirizzo</th>
          <th scope="col">Piatti</th>
  
        </tr>
      </thead>
      <tbody>
      @foreach ($orders as $order)
          
        <tr  class="{{$loop->index % 2 == 0 ? "backgroundLight" : "" }}">
          <th>{{$loop->index + 1}}</th>
          <td>{{$order->first_name}}</td>
          <td>{{$order->last_name}}</td>
          <td>{{$order->phone}}</td>
          <td>{{$order->address}}</td>
          <td>{{($order->dish)}}
            @foreach ($order->dishes as $dish)
                <div>
                    <span>{{$dish->name}},</span> 
                    <span>quantita: {{$dish->pivot->quantity}}</span>
                </div>
            @endforeach 
          </td>
        </tr>
      
        @endforeach
  
      </tbody>
    </table>
</div>
@endsection