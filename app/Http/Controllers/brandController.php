<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class brandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('backend.brand.list',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view ('backend.brand.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $validator = $request->validate([
            'name' =>['required','string','max:255','unique:brands'],
            'photo' => 'required|mimes:jpeg,bmp,png,jpg' //unique a nouk ka table

        ]);

        if($validator) {
            $name = $request->name; //name ko u
            $photo = $request->photo; //photo ko u
            // dd($photo);

            //File Upload 
            $imageName = time ().'.'.$photo->extension();
            $photo->move(public_path('images/brand/'),$imageName);
            $filepath = 'images/brand/'.$imageName;

            //Datat Insert
            $brand = new Brand;
            $brand->name = $name; //this iscolumn name = a paw ka name
            $brand->logo = $filepath;
            $brand->save();

            return redirect()-> route('backside.brand.index')->with("successMsg",'New Brand is ADDED in your data');
        }
        else
        {
            return redirect::back()->withErrors($validator);
        }

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand ->delete();

        return redirect()->route('backside.brand.index')->with('successMsg','Existing Brand is DELETED in your data');
    }
}
