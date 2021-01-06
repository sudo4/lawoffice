<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use DB;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::all();
        return view('team.index', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $team = Team::all();
        return view('team.create', compact('team'));
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
            'preface',
            'preface_img',
            'img',
            'title',
            'subtitle',
        ]);

        DB::beginTransaction();
        try {
            if ($request->hasFile('preface_img')) {
                $preface = $request->file('preface_img')->getClientOriginalName();
                $filename = pathinfo($preface, PATHINFO_FILENAME);
                $extension = $request->file('preface_img')->getClientOriginalExtension();
                $save_preface = $filename.'-'.time().'.'.$extension;
                $path = $request->file('preface_img')->storeAs('public/team', $save_preface);

            }

            if ($request->hasFile('img')) {
                $img = $request->file('img')->getClientOriginalName();
                $filename = pathinfo($img, PATHINFO_FILENAME);
                $extension = $request->file('img')->getClientOriginalExtension();
                $save_img = $filename.'-'.time().'.'.$extension;
                $path = $request->file('img')->storeAs('public/storage', $save_img);
            }

            $team = Team::create([
                'preface'=>$request->preface,
                'preface_img'=>$save_preface,
                'img'=>$save_img,
                'title'=>$request->title,
                'subtitle'=>$request->subtitle,
            ]);

            DB::commit();
            return view('team.index');

        } catch (\Exception $e) {
            DB::rollBack();
            dd($e);
            return redirect(url()->previous());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $data =  $request->only([
            'preface',
            'title',
            'subtitle',
        ]);

        DB::beginTransaction();
        try {
            if ($request->hasFile('preface_img')) {
                $preface = $request->file('preface_img')->getClientOriginalName();
                $filename = pathinfo($reface, PATHINFO_FILENAME);
                $extension = $request->file('preface_img')->getClientOriginalExtension();
                $save_preface = $filename.'-'.time().'.'.$extension;
                $path = $request->file('preface_img')->storeAs('public/team', $save_preface);

                $data = [
                    'preface_img' => $save_preface,
                ];
            }

            if ($request->hasFile('img')) {
                $img = $request->file('img')->getClientOriginalName();
                $filename = pathinfo($img, PATHINFO_FILENAME);
                $extension = $request->file('img')->getClientOriginalExtension();
                $save_img = $filename.'-'.time().'.'.$extension;
                $path = $request->file('img')->storeAs('public/storage', $save_img);

                $data = [
                    'img' => $save_img,
                ];
            }

            $data->update($data);

            DB::commit();
            return view('team.index');

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect(url()->previous());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
}
