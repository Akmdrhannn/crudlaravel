<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\categories;
use App\Models\products;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class productsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['productsModel']=products::with('categories')->get();
        return view('products/products',$data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categoriesModel']= categories::all();
        return view('products/add',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nameInput' => 'required|string',
            'descInput' => 'required|string|min:65|max:255|nullable',
            'priceInput' => 'required',
            'qtyInput' => 'required|int',
            'categoriesInput' => 'required'
        ]);

        products::create([
            'name' => $validated['nameInput'],
            'description' => $validated['descInput'],
            'price' => $validated['priceInput'],
            'qty' => $validated['qtyInput'],
            'categories_id' => $validated['categoriesInput'],
        ]);
        return redirect('/admin')->with('success', 'New data have been added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['productsModel'] = products::find($id);
        $data['categoriesModel']= categories::all();
        return view('products/edit',$data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nameInput' => 'required|string',
            'descInput' => 'required|string|min:65|max:255|nullable',
            'priceInput' => 'required|numeric',
            'qtyInput' => 'required|int',
            'categoriesInput' => 'required',
        ]);

        products::where('id',$id)->update([
            'name' => $validated['nameInput'],
            'description' => $validated['descInput'],
            'price' => $validated['priceInput'],
            'qty' => $validated['qtyInput'],
            'categories_id' => $validated['categoriesInput']
        ]);
        return redirect('/admin')->with('success','Edit data success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        products::destroy($id);
        Alert::error('Data Deleted');
        return redirect('/admin');
    }
}
