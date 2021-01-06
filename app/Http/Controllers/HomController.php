<?php

namespace App\Http\Controllers;

use App\Models\Hom;
use Illuminate\Http\Request;
use DB;

class HomController extends Controller
{


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
        $hom = hom::all();
        return view('hom.index', compact('hom'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hom = Hom::all();
        return view('hom.create', compact('hom'));
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
                'null.jpg';
            }
            if ($request->hasFile('aa')) {
                $img15 = $request->file('aa')->getClientOriginalName();
                $filename = pathinfo($img15, PATHINFO_FILENAME);
                $extension = $request->file('aa')->getClientOriginalExtension();
                $save_img15 = $filename.'_'.time().'.'.$extension;
                $path = $request->file('aa')->storeAs('/public/img', $save_img15);
            } else {
                'null.jpg';;
            }
            if ($request->hasFile('b')) {
                $img2 = $request->file('b')->getClientOriginalName();
                $filename = pathinfo($img2, PATHINFO_FILENAME);
                $extension = $request->file('b')->getClientOriginalExtension();
                $save_img2 = $filename.'_'.time().'.'.$extension;
                $path = $request->file('b')->storeAs('/public/img', $save_img2);
            } else {
                'null.jpg';;
            }

            if ($request->hasFile('c')) {
                $img3 = $request->file('c')->getClientOriginalName();
                $filename = pathinfo($img3, PATHINFO_FILENAME);
                $extension = $request->file('c')->getClientOriginalExtension();
                $save_img3 = $filename.'_'.time().'.'.$extension;
                $path = $request->file('c')->storeAs('/public/img', $save_img3);
            } else {
                "NULL";
            }

            if ($request->hasFile('d')) {
                $img4 = $request->file('d')->getClientOriginalName();
                $filename = pathinfo($img4, PATHINFO_FILENAME);
                $extension = $request->file('d')->getClientOriginalExtension();
                $save_img4 = $filename.'_'.time().'.'.$extension;
                $path = $request->file('d')->storeAs('/public/img', $save_img4);
            } else {
                'null.jpg';;
            }

            $hom = hom::create([
                'a' => $save_img1,
                'aa' => $save_img15,
                'b' => $save_img2,
                'bb' =>$request->bb,
                'c'=> $save_img3,
                'cc' => $request->cc,
                'd' => $save_img4,
                'dd' => $request->dd,
                'about_title' =>$request->about_title,
                'about' => $request->about,
                'address' =>$request->address,
                'phone' => $request->phone,
                'mail' =>$request->mail,
                'office_hour' =>$request->office_hour,
            ]);

            DB::commit();
            return redirect('/home')->with('success', 'Data Berhasil Ditambahkan');
        } catch (\Exception $e) {
           DB::rollBack();
           dd($e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hom  $hom
     * @return \Illuminate\Http\Response
     */
    public function show(hom $hom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hom  $hom
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Hom::findOrfail($id);
        return view('hom.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hom  $hom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->only([
            
            'bb',
            'cc',
            'dd',
            'about_title',
            'about',
            'address',
            'phone',
            'mail',
            'office_hour',
        ]);

        $home = Hom::findOrfail($id);
        db::beginTransaction();

        try {
            if ($request->has('a')) {
                $img1 = $request->file('a')->getClientOriginalName();
                $filename = pathinfo($img1, PATHINFO_FILENAME);
                $extension = $request->file('a')->getClientOriginalExtension();
                $save_img1 = $filename.'_'.time().'.'.$extension;
                $path = $request->file('a')->storeAs('/public/img', $save_img1);

                $data = [
                    'a' => $save_img1,
                    
                ];
            
            }
            if ($request->has('aa')) {
                $img15 = $request->file('aa')->getClientOriginalName();
                $filename = pathinfo($img15, PATHINFO_FILENAME);
                $extension = $request->file('aa')->getClientOriginalExtension();
                $save_img15 = $filename.'_'.time().'.'.$extension;
                $path = $request->file('aa')->storeAs('/public/img', $save_img15);
                
                $data = [
                    'aa' => $save_img15,
                    
                ];
            }
            if ($request->has('b')) {
                $img2 = $request->file('b')->getClientOriginalName();
                $filename = pathinfo($img2, PATHINFO_FILENAME);
                $extension = $request->file('b')->getClientOriginalExtension();
                $save_img2 = $filename.'_'.time().'.'.$extension;
                $path = $request->file('b')->storeAs('/public/img', $save_img2);
            
                
                $data = [
                    'b' => $save_img2,
                   
                ];
            }

            if ($request->has('c')) {
                $img3 = $request->file('c')->getClientOriginalName();
                $filename = pathinfo($img3, PATHINFO_FILENAME);
                $extension = $request->file('c')->getClientOriginalExtension();
                $save_img3 = $filename.'_'.time().'.'.$extension;
                $path = $request->file('c')->storeAs('/public/img', $save_img3);
            
                $data = [
                    
                    'c'=> $save_img3,
                   
                ];
            }

            if ($request->has('d')) {
                $img4 = $request->file('d')->getClientOriginalName();
                $filename = pathinfo($img4, PATHINFO_FILENAME);
                $extension = $request->file('d')->getClientOriginalExtension();
                $save_img4 = $filename.'_'.time().'.'.$extension;
                $path = $request->file('d')->storeAs('/public/img', $save_img4);
            
                $data = [   
                    'd' => $save_img4,
                ];

            }

            
            
        $home->update($data);
            
        DB::commit();
            return redirect('/home')->with('success', 'Data Berhasil Ditambahkan');
        } catch (\Exception $e) {
           DB::rollBack();
           dd($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hom  $hom
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
}
