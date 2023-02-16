<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use App\Models\Category;
use Illuminate\Http\Request;

class MotorController extends Controller
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

        $dashboards = Motor::latest()->paginate(5);

        return view('dashboard.index' , compact('dashboards', 'category'))
        ->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.create');
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
            'tanggal_peminjaman' => 'required',
            'image' => 'image|file|max:1024',

        ]);

        if ($request->file('image')) {
            $validateDate['image'] = $request->file('image')->store('project-images');
        }

        // $validateDate['user_id'] = auth()->user()->id;

        Motor::create($validateDate);
            return redirect()->intended('/')
                ->with('success', 'Berhasil Menyimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Motor  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $dashboard = Motor::where('id', $id)->first();
        // $dashboard = Motor::all();
        return view('layouts.show', compact('dashboard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Motor  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Motor $dashboard, $id)
    {
        //
         Motor::where('id', $id)->first();
            return view('dashboard.edit',compact('dashboard'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Motor  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Motor $dashboard)
    {
        //
        $request->validate([
            'balik' => 'required',
        ]);

        $dashboard->update($request->all());
            return redirect()->route('user.index')->with('success', 'Berhasil Menyimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Motor  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Motor $dashboard, $id)
    {
        //
        if($dashboard->image) {
            Storage::delete($dashboard->image);
        }
         Motor::where('id', $id)->delete();

        $dashboard->delete();
         return redirect()->route('dashboard.index')
                ->with('success', 'berhasil yeyyy!');
    }
}