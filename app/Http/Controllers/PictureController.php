<?php

//namespace App\Http\Controllers;
//
//use App\Models\Picture;
//use Illuminate\Http\Request;
//
//class PictureController extends Controller
//{
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function index()
//    {
//        $pictures = Picture::latest()->get();
//        return view('pictures.pictures', ['pictures'=>$pictures]);
//    }
//
//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create()
//    {
//        return view('pictures.create');
//
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(Request $request)
//    {
//        $this->validate($request, [
//        'fileName' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
//            'Alt' => 'required'
//        ]);
//
//        $picture = new Picture;
//        $picture->Alt = $request->Alt;
//
//        if($request->hasFile('fileName')){
//            $name = $request->file('fileName')->getClientOriginalName();
//            $picture->fileName = $name;
//            $picture->save();
//            $request->file('fileName')->storeAs('public/images', $name);
//        };
//        return redirect(route('pictures.index'));
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  \App\Models\Picture  $picture
//     * @return \Illuminate\Http\Response
//     */
//    public function show(Picture $picture)
//    {
//        //
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  \App\Models\Picture  $picture
//     * @return \Illuminate\Http\Response
//     */
//    public function edit(Picture $picture)
//    {
//        //
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \App\Models\Picture  $picture
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, Picture $picture)
//    {
//        //
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  \App\Models\Picture  $picture
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy(Picture $picture)
//    {
//        $picture->delete();
//
//        return redirect(route('pictures.index'));
//    }
//
//    /**
//     * @return array
//     */
//    protected function validatePicture(Request $request): array
//    {
//        return $request->validate([
//            'fileName' => 'required',
//            'Alt' => 'required'
//        ]);
//    }
//}
