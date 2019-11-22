<?php

namespace App\Http\Controllers;

use App\PackageListRentProduct;
use Illuminate\Http\Request;

class PackageListRentProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $plrp = PackageListRentProduct::create($request->all());
        return $plrp;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PackageListRentProduct  $packageListRentProduct
     * @return \Illuminate\Http\Response
     */
    public function show(PackageListRentProduct $packageListRentProduct)
    {
        return $packageListRentProduct;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PackageListRentProduct  $packageListRentProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(PackageListRentProduct $packageListRentProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PackageListRentProduct  $packageListRentProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PackageListRentProduct $packageListRentProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PackageListRentProduct  $packageListRentProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(PackageListRentProduct $packageListRentProduct)
    {
        //
    }
}