<?php

namespace App\Http\Controllers;

use App\PackageList;
use App\User;

use Illuminate\Http\Request;

class PackageListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = $request->user();
        $user->package_lists;
        foreach ($user->package_lists as $l) {
            $l->lists;

            foreach ($l->lists as $x) {
                $x->amount_data->product;
            }
        }
        return  $user->package_lists;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PackageList  $packageList
     * @return \Illuminate\Http\Response
     */
    public function show(PackageList $packageList)
    {
        return $packageList;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PackageList  $packageList
     * @return \Illuminate\Http\Response
     */
    public function edit(PackageList $packageList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PackageList  $packageList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PackageList $packageList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PackageList  $packageList
     * @return \Illuminate\Http\Response
     */
    public function destroy(PackageList $packageList)
    {
        //
    }
}