<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home = Home::all();
        return view('home.index', compact('home'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $home = Home::all();
        return view('home.create', compact('home'));
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
            'a',
            'aa',
            'b',
            'bb',
            'c',
            'cc',
            'd',
            'dd',
            'about_title',
            'about',
            'address',
            'phone',
            'mail',
            'office_hour',
        ]);

        DB::beginTransaction();

        try {
            if ($request->hasFile('a')) {
                $img1 = $request->file('a')->getClientOriginalName();
                $filename = pathinfo($img1, PATHINFO_FILENAME);
                $extension = $request->file('a')->getClientOriginalExtension();
                $save_img1 = $filename.'_'.time().'.'.$extension;
                $path = $request->file('a')->storeAs('/public/img', $save_img1);
            } else {
                "NULL";
            }
            if ($request->hasFile('aa')) {
                $img15 = $request->file('aa')->getClientOriginalName();
                $filename = pathinfo($img1, PATHINFO_FILENAME);
                $extension = $request->file('aa')->getClientOriginalExtension();
                $save_img15 = $filename.'_'.time().'.'.$extension;
                $path = $request->file('aa')->storeAs('/public/img', $save_img15);
            } else {
                "NULL";
            }
            if ($request->hasFile('b')) {
                $img2 = $request->file('b')->getClientOriginalName();
                $filename = pathinfo($img1, PATHINFO_FILENAME);
                $extension = $request->file('2b')->getClientOriginalExtension();
                $save_img2 = $filename.'_'.time().'.'.$extension;
                $path = $request->file('b')->storeAs('/public/img', $save_img2);
            } else {
                "NULL";
            }

            if ($request->hasFile('c')) {
                $img2 = $request->file('c')->getClientOriginalName();
                $filename = pathinfo($img1, PATHINFO_FILENAME);
                $extension = $request->file('c')->getClientOriginalExtension();
                $save_img3 = $filename.'_'.time().'.'.$extension;
                $path = $request->file('c')->storeAs('/public/img', $save_img3);
            } else {
                "NULL";
            }

            if ($request->hasFile('d')) {
                $img4 = $request->file('d')->getClientOriginalName();
                $filename = pathinfo($img1, PATHINFO_FILENAME);
                $extension = $request->file('d')->getClientOriginalExtension();
                $save_img4 = $filename.'_'.time().'.'.$extension;
                $path = $request->file('d')->storeAs('/public/img', $save_img4);
            } else {
                "NULL";
            }

            $home = Home::create([
                'a' => $save_img1,
                'aa' => $save_img15,
                'b' => $save_img2,
                'bb' =>$request->bb,
                'c'=> $save_img3,
                'cc' => $request->cc,
                'd' => $save->img4,
                'dd' => $request->dd,
                'about_title' =>$request->about_title,
                'about' => $request->about,
                'address' =>$request->address,
                'phone' => $request->phone,
                'mail' =>$request->mail,
                'office_hour' =>$request->office_hour,
            ]);

            DB::commit();
            return redirect(url()->previous());
        } catch (\Exception $e) {
            //throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }
}
