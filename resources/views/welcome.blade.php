@extends('layouts.layout')
@section('content')    
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="container">
        <div class="content text-center">
            <img src="/img/pizza-house.png" class="img" alt="pizza house logo">
            <h1 class="title m-b-md text-center">
                The North's Best Pizzas
            </h1>
            <div class="msg">{{ session('msg') }}</div>
            <br>
            <div><a href="/pizzas/create" class="custom-btn"> Order a pizza -></a></div>
        </div>
    </div>
</div>
@endsection