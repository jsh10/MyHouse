<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use PDF;

class CartController extends Controller

{
    /**
     * Función para mostrar los productos registrados sobre la base de datos.
     *
     * @return Muestra los productos Registrados sobre la BD de la plataforma.
    */

    public function shop(){
        $products = Product::all();/** Muestra todos los items de la BD*/
        return view('shop')->with(['products' => $products]); /** Retorna los datos a la vista */
    }


    /**
     * Función para convertir una vista HTML a formato PDF.
     *
     * @return Genera una factura PDF descargable.
    */

    public function pdf(){
        $products = \Cart::getContent(); /** Retoma los datos del carrito de compras */
        $pdf = PDF::loadview('index2',compact('products')); /** Se utiliza el Pluggin Don PDF */
        return $pdf->stream();
    }


    /**
     * Función para generar un carrito de compras.
     *
     * @return  Almacena los items que el usuario ha seleccionado.
    */

    public function cart(){
        $cartCollection = \Cart::getContent();
        return view('cart')->with(['cartCollection' => $cartCollection]);;
    }


    /**
     * Función para remover un producto del carrito de compras.
     *
     * @return  Se elimina un item del carrito.
    */

    public function remove(Request $request){
        \Cart::remove($request->id); /** Se remueve el item del carrito segun el ID que le pasamos */
        return redirect()->route('cart.index')->with('success_msg', 'Item removido');
    }


    /**
     * Función para agregar un producto al carrito de compra.
     *
     * @return  Agrega al carrito de compras la información del item seleccionado.
    */

    public function add(Request $request){

        \Cart::add(array(

            'id' => $request->id,

            'name' => $request->name,

            'price' => $request->price,

            'quantity' => $request->quantity,

            'attributes' => array(

                'image' => $request->img,

                'slug' => $request->slug

            ) /** Se agrega toda la información que luego podemos retomar en el carrito, factura, etc. */

        ));

        return redirect()->route('cart.index')->with('success_msg', 'Item agregado a su carrito');

    }


    /**
     * Función para actualizar los productos del carrito.
     *
     * @return  Actualiza la cantidad de productos que el usuario desea comprar.
    */

    public function update(Request $request){

        \Cart::update($request->id,

            array(

                'quantity' => array(

                    'relative' => false,

                    'value' => $request->quantity

                ), /**Se actualiza la cantidad de productos y subtotal generado por cada producto seleccionado*/

        ));

        return redirect()->route('cart.index')->with('success_msg', 'Carrito actualizado');

    }


    /**
     * Función para  borrar los productos del carrito de compras.
     *
     * @return  Borra los items almacenados en el carrito de compra.
    */

    public function clear(){

        \Cart::clear(); /**Se utiliza el método clear() pra eliminar los datos de los productos seleccionados*/

        return redirect()->route('cart.index')->with('success_msg', 'Se han borrado los items');

    }


    /**
     * Función para retornar vista.
     *
     * @return Retorna una vista HTML que se convertirá en PDF.
    */

    public function venta(){
        return view('/envio2');
    }


    /**
     * Función para reiniciar el carrito de compras.
     *
     * @return Borra la información del carrito de compras luego de la compra del usuario.
    */

    public function reiniciar(){
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Compra realizada');
        /**Reinicia el carrito luego de la compra del usuario usando el método clear() */
    }


}
