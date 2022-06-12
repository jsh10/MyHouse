<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use PDF;

class CartController extends Controller

{

    public function shop(){
        $products = Product::all();
        //dd($products);
        return view('shop')-> withTitle ('E-COMMERCE STORE | SHOP')->with(['products' => $products]);
    }

    public function pdf(){
        $products = \Cart::getContent();
        //dd($products);
        $pdf = PDF::loadview('index2',compact('products'));
        //$pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();
        //return view('index2', compact('products'));
        }

    public function cart(){
        $cartCollection = \Cart::getContent();
        return view('cart')->withTitle('E-COMMERCE STORE | CART')->with(['cartCollection' => $cartCollection]);;
    }

    public function remove(Request $request){

        \Cart::remove($request->id);

        return redirect()->route('cart.index')->with('success_msg', 'Item removido');

    }


    public function add(Request$request){

        \Cart::add(array(

            'id' => $request->id,

            'name' => $request->name,

            'price' => $request->price,

            'quantity' => $request->quantity,

            'attributes' => array(

                'image' => $request->img,

                'slug' => $request->slug

            )

        ));

        return redirect()->route('cart.index')->with('success_msg', 'Item agregado a su carrito');

    }


    public function update(Request $request){

        \Cart::update($request->id,

            array(

                'quantity' => array(

                    'relative' => false,

                    'value' => $request->quantity

                ),

        ));

        return redirect()->route('cart.index')->with('success_msg', 'Carrito actualizado');

    }


    public function clear(){

        \Cart::clear();

        return redirect()->route('cart.index')->with('success_msg', 'Se han borrado los items');
    }

    public function venta(){
        return view('/envio2');
    }

    public function reiniciar(){
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Compra realizada');
    }


}