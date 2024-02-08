<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{

      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorys = category::all();
        return view('backend.category.index',[
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
            'name'=>'required',
        ];

        $validatesData = $request->validate($rules);

        category::create($validatesData);
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
        $categorys = category::find($id);
        return view('backend.category.edit', [
            'categorys'=>$categorys,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'name'=>'required',
            'status'=>'',
        ];

        $validatesData = $request->validate($rules);

        category::where('id', $id)->update($validatesData);
        toast('Update Success','success');
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        category::find($id)->delete();
        toast('Delete Success','warning');
        return back();
    }
}
