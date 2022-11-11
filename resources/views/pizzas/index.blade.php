@extends('layouts.app')
@section('content')
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="container">
                <h1 class="text-center title">
                    @php
                        $name = 'Pizzas List';
                        echo $name;
                    @endphp
                </h1>
                {{-- <div class="text-center">
                <div>{{$user}}</div>
                <div>{{$age}}</div>
            </div> --}}
                {{--
            <div class="text-center">
                <span>{{$type}} -</span>
                <span>{{$ingredients}} -</span>
                <span>{{$price}}</span>
            </div>
            @if ($price > 10)
                <p class="text-center">This pizza is expensive</p>
            @elseif($price < 5)
                <p class="text-center">This pizza is cheap</p>
            @else
                <p class="text-center">This pizza is normally priced</p>
            @endif

            @unless($ingredients == 'cheese')
                <p class="text-center">You don't have cheese ingredients</p>
            @endunless --}}

                {{-- @for ($i = 0; $i < count($pizza); $i++)
                <div>{{$pizza[$i]['type']}}</div>
            @endfor --}}
                @if ($pizza->count() > 0)
                    <div class="row">
                        @foreach ($pizza as $item)
                            <div class="col-lg-3 col-md-4 col-12">
                                <div class="card pizza-card border rounded my-3 shadow-sm text-center p-3">
                                    <img src="/img/pizza.gif" width="80px" class="d-block mx-auto my-2"
                                        alt="pizza house logo">
                                    <h4>{{ $item['name'] }}</h4>
                                    <p class="mb-2"><b>Type ::</b> {{ $item['type'] }} </p>
                                    <p class="mb-3"><b>Base ::</b> {{ $item['base'] }}</p>
                                    <a href="/pizzas/{{ $item['id'] }}" class="back text-white btn btn-md">
                                        View details ->
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div>No Pizzas Found</div>
                @endif
            </div>
        </div>
    </div>
@endsection
