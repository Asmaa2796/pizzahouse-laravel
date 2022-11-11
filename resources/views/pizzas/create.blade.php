@extends('layouts.app')
@section('content')    
<div class="container">
    <h3 class="text-center title">
        {{-- native php --}}
        @php
            $name = "Add a New Pizza";
            echo($name);
        @endphp
    </h3>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card border rounded my-3 shadow-sm p-4">
                <form action="/pizzas" method="POST" class="bg-gray-100">
                    {{-- ? Cross-site Request Forgery [ blade directive ] --}}
                    @csrf
                    <label for="">Name</label>
                    <input type="text" name="name" id="name" required>
                    <label for="">Type</label>
                    <select name="type" id="type">
                        <option value="Volcano">Volcano</option>
                        <option value="Hawain">Hawain</option>
                        <option value="Supreme">Supreme</option>
                        <option value="Pepperoni">Pepperoni</option>
                    </select>
                    <label for="">Base</label>
                    <select name="base" id="base">
                        <option value="Cheesy crust">Cheesy crust</option>
                        <option value="Garlic crust">Garlic crust</option>
                        <option value="Thin & crispy">Thin & Crispy</option>
                        <option value="Thick">Thick</option>
                    </select>
                    <fieldset>
                        <label>Extra toppings::</label>
                        <label class="d-flex no-label"> <input type="checkbox" name="toppings[]" value="Mushroom">&nbsp; Mushroom</label>
                        <label class="d-flex no-label"> <input type="checkbox" name="toppings[]" value="Garlic">&nbsp; Garlic</label>
                        <label class="d-flex no-label"> <input type="checkbox" name="toppings[]" value="Olives">&nbsp; Olives</label>
                        <label class="d-flex no-label"> <input type="checkbox" name="toppings[]" value="Peppers">&nbsp; Peppers</label>
                    </fieldset>
                    <div class="text-center">
                        <button type="submit">Order pizza</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection