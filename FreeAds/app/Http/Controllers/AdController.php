<?php
namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Ad::latest()->paginate(5);

        return view('ads.index', compact('ads'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'departement' => 'required',
            'price' => 'required',
        ]);

        Ad::create($request->all());

        return redirect()->route('ads.index')
            ->with('success', 'Ads created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ad  $ads
     * @return \Illuminate\Http\Response
     */
    public function show(ad $ads)
    {
        return view('ads.show', compact('ads'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ad  $ads
     * @return \Illuminate\Http\Response
     */
    public function edit(ad $ads)
    {
        return view('ads.edit', compact('ads'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ad  $ads
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ad $ads)
    {
        $request->validate([
            'id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'departement' => 'required',
            'price' => 'required',
        ]);
        $ads->update($request->all());

        return redirect()->route('ads.index')
            ->with('success', 'Ads updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ad  $ads
     * @return \Illuminate\Http\Response
     */
    public function destroy(ad $ads)
    {
        $ads->delete();

        return redirect()->route('ads.index')
            ->with('success', 'Ads deleted successfully');
    }
}