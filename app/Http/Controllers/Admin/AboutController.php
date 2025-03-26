<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\About\StoreAboutRequest;
use App\Http\Requests\About\UpdateAboutRequest;
use App\Models\About;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AboutController extends Controller
{
    
    public function index()
    {
        $abouts = About::all();
       return view('admin.about.index',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAboutRequest $request)
    {
       About::create($request->validated());
       Alert::success('About created successfully');//yo wala
        return back();
    }


  
     public function edit(About $about)
     {
         return view('admin.about.edit',compact('about'));
     }
 public function update(UpdateAboutRequest $request,About $about)
     {
        $about->update($request->validated());
        return redirect(route('admin.about.index'));
     }
 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
