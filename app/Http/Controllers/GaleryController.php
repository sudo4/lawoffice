<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;
use DB;


class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galery = Galery::all();
        return view('gallery.index', compact('galery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $galery = Galery::all();
        return view('gallery.create', compact('galery'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'img',
            'title',
        ]);

        DB::beginTransaction();

        try {
            if ($request->has('img')) {
                $img = $request->file('img')->getClientOriginalName();
                $filename = pathinfo($img, PATHINFO_FILENAME);
                $extension = $request->file('img')->getClientOriginalExtension();
                $save_img = $filename.'-'.time().'.'.$extension;
                $path = $request->file('img')->storeAs('public/gallery', $save_img);
            }

            $data = Galery::create([
                'img' => $save_img,
                'title' => $request->title,
            ]);

            DB::commit();
            return view('/galery');

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect(url()->previous());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function show(Galery $galery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function edit(Galery $galery)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galery $galery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galery $galery)
    {
        //
    }
}
