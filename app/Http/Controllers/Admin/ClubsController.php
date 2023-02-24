<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\ClubResource;
use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class ClubsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clubs = ClubResource::collection(Club::all());
        return Inertia::render('Admin/Club/Index', compact('clubs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Admin/Club/Create');
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
           'title'=>['required', 'min:2'],
           'logo'=>['required', 'image'],
           'members'=>['required'],
           'banner'=>['required', 'image'],
           'email'=>['required', 'min:3'],
           'description'=>['required', 'min:10'],
        ]);
        if ($request->hasFile('logo')){
            $logo = $request->file('logo')->store('logos');
            $banner = $request->file('banner')->store('banners');

            Club::create([
                'title'=>$request->title,
                'logo'=>$logo,
                'members'=>$request->members,
                'banner'=>$banner,
                'email'=>$request->email,
                'description'=>$request->description,
            ]);
            return Redirect::route('clubs.index');
        }
        return Redirect::back();



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
    public function edit(Club $club)
    {
        return Inertia::render('Admin/Club/Edit', compact('club'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Club $club)
    {
//        $logo = $club->logo;
//        $banner = $club->banner;
//        $request-> validate([
//            'title'=>['required', 'min:2'],
//            'members'=>['required'],
//            'email'=>['required', 'min:3'],
//            'description'=>['required', 'min:10'],
//        ]);
//        if ($request->hasFile('logo')){
//            Storage::delete($club->logo);
//            Storage::delete($club->banner);
//
//            $logo = $request-> file('logo')->store('logos');
//            $banner = $request-> file('banner')->store('banners');
//        }
//        $club->update([
//            'title'=>$request->title,
//            'logo'=>$logo,
//            'members'=>$request->members,
//            'banner'=>$banner,
//            'email'=>$request->email,
//            'description'=>$request->description,
//        ]);
//        return Redirect::route('clubs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Club $club)
    {
        Storage::delete($club->logo);
        Storage::delete($club->banner);
        $club->delete();

        return Redirect::back();
    }
}
