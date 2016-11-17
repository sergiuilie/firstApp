<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops = \App\Shop::where('user_id', \Auth::user()->id)->get();

        return view('modules.shop.index')->with('shops', $shops);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('modules.shop.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         \App\Shop::create([
            'produs' => $request->input('produs'),
            'user_id' => \Auth::user()->id,
            'cantitate' => $request->input('cantitate')
        ]);

        return redirect()->route('shop.index');
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
    public function edit(\App\Shop $shop)
    {
        return view('modules.shop.edit')
            ->with('shop', $shop);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, \App\Shop $shop)
    {
        $shop->update(['produs' => $request->input('produs'),
                       'cantitate' => $request->input('cantitate')
        ]);
        return redirect()->route('shop.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(\App\Shop $shop)
    {
        $shop->delete();
        return redirect()->route('shop.index');
    }
}
