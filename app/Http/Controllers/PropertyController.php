<?php

namespace App\Http\Controllers;

use App\Property;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PropertyController extends Controller
{
    function __construct()
    {
        //$this->middleware(['auth','role:admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = auth()->user()->id;
        $properties= Property::all();
        return view('properties.index',compact('properties', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('properties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user()->id;

//echo "<pre>";
//var_dump($request)->state;
//die;
        $path=$request->file('photo');
            $foto=$path->store('photos','public');
        Property::create(['description'=>$request->description,
            'price'=>$request->price,
            'user_id'=>$user,
            'photo'=>$foto,
            'type'=>$request->type,
            'state'=>$request->state

        ]);
        return redirect()->route('propiedades.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property=Property::find($id);
        return view('properties.view', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property=Property::find($id);
        $users=User::all();
        return view('properties.edit',compact('property','users'));
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
        $property=Property::find($id);
        $property->update(['description'=>$request->description,
            'price'=>$request->price,
            'owner_id'=>$request->owner_id
        ]);

        return redirect()->route('propiedades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property=Property::find($id);
        $property->delete();
        return redirect()->route('propiedades.index');
    }


}
