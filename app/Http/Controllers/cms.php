<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\products;

class cms extends Controller
{

    public function pr()
    {
        $data['productsModel']=products::all();
        return view('admin/pr',$data);
        

    }

    public function ct(){
        $data['categoriesModel']=categories::all();
        return view('admin/ct',$data);
    }
}
