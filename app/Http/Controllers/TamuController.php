<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = array(
            'tamus' => Tamu::all()
        ) ;
        return view('back.index',$data);
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
        if($request->isMethod('post')){
            $tamu = new Tamu();
            $tamu->name = $request->name;
            $tamu->from = $request->from;
            $tamu->instagram = $request->instagram;
            $tamu->pesan = $request->pesan;
            $tamu->save();
            return redirect('/')->with(['success' => 'your message has been sent']);
        }
        return view('front.home');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tamu  = Tamu::find($request->id);
        $data = array(
            'tamu' => $tamu
        );

        if($request->isMethod('post')){
            $tamu->name = $request->name;
            $tamu->from = $request->from;
            $tamu->instagram = $request->instagram;
            $tamu->pesan = $request->pesan;
            $tamu->save();
            return redirect('/back/portofolio')->with(['success' => 'Update successful']);
        }
        return view('front.home',$data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $tamu = Tamu::find($request->id);
        $tamu->delete();
        return redirect('/back/portofolio')->with(['delete' => 'data has been successfully deleted']);
    }
}
