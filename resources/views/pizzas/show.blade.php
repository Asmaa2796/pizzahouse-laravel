@extends('layouts.app')
@section('content')    
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="container">
                <h2 class="text-center title">
                    {{-- native php --}}
                    @php
                        $name = "Pizzas details";
                        echo($name);
                    @endphp
                </h2>
                <div class="card border rounded my-3 shadow-sm p-4">
                    <h6 style="font-size: 16px;" class="mb-3 text-dark"><b>Order for:</b> {{$pizza->name}}</h6>
                    <h6 style="font-size: 16px;" class="mb-3 text-dark"><b>Type:</b> {{$pizza->type}}</h6>
                    <h6 style="font-size: 16px;" class="mb-3 text-dark"><b>Base:</b> {{$pizza->base}}</h6>
                    <h6 style="font-size: 16px;" class="mb-3 text-dark"><b>Extra toppings:</b></h6>
                    <div class="toppings">
                        @foreach($pizza->toppings as $topping)
                        <span>{{$topping}}</span>
                        @endforeach
                    </div>
                    <hr>
                    <div class="row pt-2">
                        <div class="col-lg-6 col-md-6 col-12 text-left">
                            <form action="/pizzas/{{$pizza->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn-dark">Complete order</button>
                            </form>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 text-right">
                            <a href="/pizzas" class="back custom-btn">Back to all pizzas -></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
