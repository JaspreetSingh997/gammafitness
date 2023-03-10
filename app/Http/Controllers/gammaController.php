<?php

namespace App\Http\Controllers;

use App\Models\Gamma;
use Illuminate\Http\Request;

class gammaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account.index');
        
        // @TODO
        // $gamma = Gamma::latest()->paginate(5);
        // return view('Gamma.index', compact('gamma'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function loginCheck() {
        return view('account.logcheck');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // @TODO
        return view('gamma.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // @TODO 
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gamma  $gamma
     * @return \Illuminate\Http\Response
     */
    public function show(Gamma $gamma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gamma  $gamma
     * @return \Illuminate\Http\Response
     */
    public function edit(Gamma $gamma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gamma  $gamma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gamma $gamma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gamma  $gamma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gamma $gamma)
    {
        //
    }

    public function dash()
    {
        return view('dash.index');
    }

    public function products()
    {
        return view('dash.products.index');
    }
    public function productadd()
    {
        return view('dash.products.add.index');
    }

    public function view()
    {
        return view('product.view.index');
    }

    public function changeView() {
        return view('product.view.change.changePDetails');
    }

    public function productView() 
    {
        return view('product.index');
    }
}
