@extends('layouts.app')

@section('content')
{{$user}}
{{-- @if($user_id == Auth::id()) --}}
    <div class="container">
        <div class="row">
            <div class="col-6">
                <canvas id="myChart" width="400" height="400"></canvas>
            </div>
            <div class="col-6">
                <canvas id="myChart2" width="400" height="400"></canvas>
            </div>
        </div>
    </div>
{{-- @endif --}}
<script>

    const ctx = document.getElementById('myChart');
    const myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: {!! json_encode($dishName) !!} ,
            datasets: [{
                label: 'Quantità di piatti venduti',
                
                data:  {!! json_encode($totalQuantity) !!} ,
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 206, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(153, 102, 255)',
                    'rgb(255, 159, 64)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 206, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(153, 102, 255)',
                    'rgb(255, 159, 64)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    const ctx2 = document.getElementById('myChart2');
    const myChart2 = new Chart(ctx2, {
        type: 'line',
        data: {
            labels: {!! json_encode($orderDate) !!} ,
            datasets: [{
                label: 'Incassi per Ordine',
                
                data:  {!! json_encode($totalPrice) !!} ,
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 206, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(153, 102, 255)',
                    'rgb(255, 159, 64)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 206, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(153, 102, 255)',
                    'rgb(255, 159, 64)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection