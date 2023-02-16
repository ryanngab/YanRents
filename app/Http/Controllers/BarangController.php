<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Motor;
use App\Models\Category;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $category = Category::all();


        $barang = Barang::get();

        return view('barang.index' , compact('category', 'barang'));
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('barang.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validateDate = $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'nomorbarang' => 'required',
            'harga' => 'required',
            'image' => 'image|file|max:1024',

        ]);

        if ($request->file('image')) {
            $validateDate['image'] = $request->file('image')->store('project-images');
        }

        // $validateDate['user_id'] = auth()->user()->id;

        Barang::create($validateDate);
            return redirect()->route('user.index')
                ->with('success', 'Berhasil Menyimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $barang = Barang::where('id', $id)->first();
        $category = Category::all();

        return view('dashboard.show', compact('barang', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang, $id)
    {
        //
        $barang = Barang::where('id' , $id)->first();
            return view('barang.edit',compact('barang'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        //
         $request->validate([

            'name' => 'required',
            'category_id' => 'required',
            'nomorbarang' => 'required',
            'harga' => 'required',
            'image' => 'image|file|max:1024',
        ]);

        $barang->update($request->all());
            return redirect()->route('dashboard.index')->with('success', 'Berhasil Menyimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang, $id)
    {
        //
        if($barang->image) {
            Storage::delete($barang->image);
        }
         Barang::where('id', $id)->delete();

        $barang->delete();
         return redirect()->route('dashboard.index')
                ->with('success', 'berhasil yeyyy!');

    }
}