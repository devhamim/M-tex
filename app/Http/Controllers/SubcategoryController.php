<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategorys = subcategory::all();
        $categorys = category::all();
        return view('backend.subcategory.index',[
            'subcategorys'=>$subcategorys,
            'categorys'=>$categorys,
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
            'category_id'=>'required',
            'name'      =>'required',
        ];

        $validatesData = $request->validate($rules);

        subcategory::create($validatesData);
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
        $subcategorys = subcategory::find($id);
        $categorys = category::all();
        return view('backend.subcategory.edit', [
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
            'category_id'=>'required',
            'name'=>'required',
            'status'=>'',
        ];

        $validatesData = $request->validate($rules);

        subcategory::where('id', $id)->update($validatesData);
        toast('Update Success','success');
        return redirect()->route('subcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        subcategory::find($id)->delete();
        toast('Delete Success','warning');
        return back();
    }

    public function getSubcategories($category)
{
    $subcategories = Subcategory::where('category_id', $category)->get();
    return response()->json($subcategories);
}
}
