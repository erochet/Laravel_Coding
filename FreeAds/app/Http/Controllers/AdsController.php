<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $ads = Ad::all();
        return view('ads.index', compact('ads'));
    }








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
                'picture' => 'required|max:500',
                'price' => 'required|max:7',
                'commune' => 'required|max:35',
            ]);
            $ad = new Ad;
            $ad->title = $request->title;
            $ad->description = $request->description;
            $ad->category_id = $request->category_id;
            $ad->picture = $request->picture;
            $ad->price = $request->price;
            $ad->commune = $request->commune;
            $ad->save();
            return back()->with('message', "L'annonce a bien été créée !");
        }

        



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ad $ad)
    {
        return view('ads.show', compact('ad'));
    }



            public function edit(Ad $ad)
        {
            return view('ads.edit', compact('ad'));
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ad $ad)
    {
        $data = $request->validate([
            'title' => 'required|max:100',
            'description' => 'required|max:500',
            'picture' => 'required|max:500',
            'category_id' => 'required|max:20',
            'price' => 'required|max:7',
            'commune' => 'required|max:35',
        ]);
        $ad->title = $request->title;
        $ad->description = $request->description;
        $ad->category_id = $request->category_id;
        $ad->picture = $request->picture;
        $ad->price = $request->price;
        $ad->commune = $request->commune;
        $ad->save();
        return back()->with('message', "L'annonce a bien été modifiée !");        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad $ad)
    {
        $ad->delete();
        return back();
    }




    
}
