@extends('layouts.app')

@section('content')
<div class="container position-fixed">
    <div class="row justify-content-center">
        <div class="col-12">
                
                <div class="row d-flex flex-column text-center my-5">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col-12">
                        <img src="{{ asset("storage/{$user->image}") }}" alt="Logo users" class="rounded-circle img-show"> 
                    </div>

                    <div class="col-12 my-3">
                        <h1 class="color-main">{{$user->name}}</h1>
                    </div>
                </div>
        </div>
    </div>
</div>

@endsection
