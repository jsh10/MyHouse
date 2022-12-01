<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Validator;

use Illuminate\Support\Str;

class ProductsController extends Controller
{
    /**
     * Muestra la lista de productos registrados sobre la BD.
     *
     * @param \App\Models\Products
     * @return \Illuminate\Http\Response
    */

    public function index()
    {
       //
       $datos = Products::all();
       return view('dashboard', compact('datos'));
    }


    /**
     * Muestra el formulario para crear un nuevo producto.
     *
     * @return \Illuminate\Http\Response
    */

    public function create()
    {
       //
       return view('/dashboard/create');
    }


    /**
     * Almacena en la BD la información del nuevo producto a registrar.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products $products
     * @return \Illuminate\Http\Response
    */

    public function store(Request $request)
    {
       //
       $products = new Products;
       $products->name = $request->post('name');
       $products->slug = $request->post('slug');
       $products->details = $request->post('details');
       $products->price = $request->post('price');
       $products->shipping_cost = $request->post('shipping_cost');
       $products->description = $request->post('description');
       $products->category_id = $request->post('category_id');
       $products->brand_id = $request->post('brand_id');
       $products->image_path = $request->post('image_path');
       $products->save();

       return redirect()->route('dashboard.index')->with('success', 'Item agregado con exito');
    }


    /**
     * Muestra la vista de confirmación para eliminar el producto seleccionado.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
    */

    public function show(Products $products)
    {
       //
       return view('/dashboard/destroy');
    }


    /**
     * Muestra el formulario para editar los datos del producto seleccionado.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
    */

    public function edit($id)
    {
        //
        $products = Products::find($id);
        return view('/dashboard/edit', compact('products'));
    }


    /**
     * Actualiza y almacena los datos del producto seleccionado.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
    */

    public function update(Request $request, $id)
    {
       //
       $products = Products::find($id);
       $products->name = $request->post('name');
       $products->slug = $request->post('slug');
       $products->details = $request->post('details');
       $products->price = $request->post('price');
       $products->shipping_cost = $request->post('shipping_cost');
       $products->description = $request->post('description');
       $products->category_id = $request->post('category_id');
       $products->brand_id = $request->post('brand_id');
       $products->image_path = $request->post('image_path');
       $products->save();

       return redirect()->route('dashboard.index')->with('success', 'Item actualizado con exito');
    }


    /**
     * Elimina el producto de la BD (Método sin utilizar).
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
    */
    public function destroy(Products $products)
    {
       //
    }

    public function upload(Request $request){
        $path = '';
        $original_name = $request->file('file')->getClientOriginalName();
        $final_name = Str::slug($request->file('file')->getClientOriginalName().'_'.time()).'.'.trim($request->file('file')->getClientOriginalExtension());
        $request->file->storeAs($path, $original_name, 'uploads');

        return redirect(url('dashboard'));
    }
}
