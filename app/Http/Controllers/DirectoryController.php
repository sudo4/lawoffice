<?php

namespace App\Http\Controllers;

use App\Models\Directory;
use Illuminate\Http\Request;
use DB;

class DirectoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directory = Directory::all();
        return view('directory.index', compact('directory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('directory.create');
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
            'title',
            'link',
        ]);

        DB::beginTransaction();
        
        try {
            $directory = Directory::create([
                'title' => $request->title,
                'link' => $request->link, 
            ]);

            DB::commit();
            return redirect(url('directory'));
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e);
            return redirect(url()->previous());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Directory  $directory
     * @return \Illuminate\Http\Response
     */
    public function show(Directory $directory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Directory  $directory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $directory = Directory::findOrFail($id);
        return view('directory.edit', compact('directory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Directory  $directory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->only([
            'title',
            'link',
        ]);
        
        $directory = Directory::findOrFail($id);
        DB::beginTransaction();
        
        try {
            
            if ($request->only('title')) {
                $data = [
                    'title' => $request->title, 
                ];
            }
            if ($request->only('link')) {
                $data = [
                    'link' => $request->link, 
                ];
            }

            $directory->update($data);

            DB::commit();

            return redirect(url('directory'));

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect(url()->previous());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Directory  $directory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Directory $directory)
    {
        //
    }
}
