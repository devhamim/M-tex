<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use App\Models\subcategory;
use Illuminate\Http\Request;
use Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = product::all();
        $categorys = category::all();
        $subcategorys = subcategory::all();
        return view('backend.product.index', [
            'products'=>$products,
            'categorys'=>$categorys,
            'subcategorys'=>$subcategorys,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'category_id'      =>'required',
            'subcategory_id'      =>'required',
            'name'      =>'required',
            // 'title'         =>'',
            'image'         =>'required',
            // 'description'   =>'',
        ];

        $validatesData = $request->validate($rules);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/product'), $file_name);
            $validatesData['image'] = $file_name;
        }

        product::create($validatesData);
        toast('Add Success','success');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products = product::find($id);
        $categorys = category::all();
        $subcategorys = subcategory::all();
        return view('backend.product.edit', [
            'products'=>$products,
            'categorys'=>$categorys,
            'subcategorys'=>$subcategorys,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'category_id'      =>'required',
            'subcategory_id'      =>'required',
            'name'          =>'required',
            // 'title'         =>'',
            'image'         =>'',
            // 'description'   =>'',
            'status'        =>'required',
        ];

        $validatesData = $request->validate($rules);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/product'), $file_name);
            $validatesData['image'] = $file_name;
        }

        product::where('id', $id)->update($validatesData);
        toast('Update Success','success');
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        product::find($id)->delete();
        toast('Delete Success','warning');
        return back();
    }
}
