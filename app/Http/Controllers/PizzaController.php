<?php

namespace App\Http\Controllers;

use App\Models\Pizza as ModelsPizza;
use Illuminate\Http\Request;
use App\Models\Pizza;
class PizzaController extends Controller
{ 
    //? protect all routes for this controller
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index() {
        $pizza = Pizza::all();
        // $pizza = Pizza::orderBy('name','asc')->get();
        // $pizza = Pizza::where('name','asmaa')->get();
        return view('pizzas.index',
            [
                "pizza" => $pizza,
                // example for query parameter
                // 'user' => request('user'),
                // 'age' => request('age')
            ],
        );
    }

    public function show($id) {
        $pizza = Pizza::findOrfail($id);
        return view('pizzas.show',
            [
                "pizza" => $pizza,
            ],
        );
    }

    public function create() {
        return view('pizzas.create');
    }

    public function store() {
        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        $pizza->save();
        return redirect('/')->with('msg','Thanks for Your Order!');
    }

    public function destroy($id) {
        $pizza = Pizza::findOrfail($id);
        $pizza->delete();
        return redirect('/pizzas');
    }
}
