<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\categories;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class categoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['categoriesModel']=categories::all();
        return view('categories/categories',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function dashboard()
    {
        $data['categoriesModel']=categories::all();
        return view('admin/ct',$data);
    } 
    public function create()
    {
        return view('categories/add');
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
            'nameInput1' => 'required|string|max:20'

        ]);

        categories::create([
            'name' =>$validated['nameInput1']
        ]);
        return redirect('admin/ct')->with('success', 'New data have been added');
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
        $data['categoriesModel']= categories::find($id);
        return view('/categories/edit',$data);
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
            'nameInput1' => 'required|string|max:20'
        ]);

        categories::where('id',$id)->update([
            'name' => $validated['nameInput1']
        ]);
        return redirect('/admin/ct')->with('success','Edit data success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        categories::destroy($id);
        Alert::error('Data Deleted');
        return redirect('/admin/ct');
    }
}
