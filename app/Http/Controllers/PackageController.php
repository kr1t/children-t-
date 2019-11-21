<?php

namespace App\Http\Controllers;

use App\Package;
use App\PackageList;
use App\ProductAmount;
use App\PackageListRentProduct;



use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::get();
        return $packages;
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

    public function addPackageLists(Request $request)
    {
        $user = $request->user();
        $expiry_date = Package::find($request->package_id)->expiry_date;
        PackageList::create([
            "package_id" => $request->package_id,
            "user_id" => $user->id,
            "expiry_date" => $expiry_date
        ]);
    }

    public function addPackageListRents(Request $request)
    {
        $product_id = ProductAmount::find($request->product_amount_id)->product_id;
        $lists = PackageList::where('id', $request->package_list_id)->get();
        PackageListRentProduct::create([
            "package_list_id" => $request->package_list_id,
            "product_id" =>  $product_id,
            "product_amount_id" => $request->product_amount_id,
            "swapped_at" => count($lists) > 0 ? Carbon::now() : null,
            "amount" => 1
        ]);
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        //
    }
}