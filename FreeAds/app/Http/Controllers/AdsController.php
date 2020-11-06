<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ads;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*public function index()
    {
        return view('create');
    }*/

    public function create()
{
    return view('ads.create');
}

        public function store(Request $request)
        {
            $data = $request->validate([
                'title' => 'required|max:100',
                'description' => 'required|max:500',
                'category_id' => 'required|max:20',
                'price' => 'required|max:7',
                'commune' => 'required|max:35',
            ]);
            $Ads = new Ads;
            $Ads->title = $request->title;
            $Ads->description = $request->description;
            $Ads->category_id = $request->category_id;
            $Ads->price = $request->price;
            $Ads->commune = $request->commune;
            $Ads->save();
            return back()->with('message', "L'annonce' a bien été créée !");
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
        //
    }




    
}
