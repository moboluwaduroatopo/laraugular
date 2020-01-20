<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Image;
use App\Shop;
use App\Categories;
class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
    //    $catid= $request->id;
    return response()->json([
    'catname' => Categories::where('id','=',$id)->get(),
        'cat'=> Shop::orderBy('id')->join('Categories','shops.cat_id','=','Categories.id')
        ->join('Users','shops.user_id','=','Users.id')
       ->select('shops.*','Categories.cat_name','Users.name','Users.ufile','Users.role')
       ->where('cat_id','=',$id)
       ->get()
       // return $dat;
        ]);
    }
    public function shopid()
    {
    //    $catid= $request->id;
    return response()->json([
    //'catname' => Shop::all()
        'shopid'=> Shop::orderBy('id')->join('Categories','shops.cat_id','=','Categories.id')
        ->join('Users','shops.user_id','=','Users.id')
       ->select('shops.*','Categories.cat_name','Users.name','Users.email')
      // ->where('cat_id','=',$id)
       ->get()
       // return $dat;
        ]);
    }
    public function shop()
    {
        return response()->json([
            'tailor'=>Shop::orderBy('id')->join('Categories','shops.cat_id','=','Categories.id')
        ->join('Users','shops.user_id','=','Users.id')
       ->select('shops.*','Categories.cat_name','Users.name','Users.ufile','Users.role')
       ->where('role','=','tailor')
       //->where('cat_id','=',$id)   ->paginate(4),
       ->get(),
       'shop'=>Shop::orderBy('id')->join('Categories','shops.cat_id','=','Categories.id')
        ->join('Users','shops.user_id','=','Users.id')
       ->select('shops.*','Categories.cat_name','Users.name','Users.ufile','Users.role')
       ->where('role','=','shop')
       //->where('cat_id','=',$id)
       ->get()
            //'shop' => Categories::where('cat_type','shop')->get()
        ]);
        
        //return $tailor;
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
          if ($request->file ){
              $file=$request->file;
              $filename=time().'.' . explode('/', explode(':', substr($file, 0, strpos($file,';')))[1])[1];
             // $filename= time().'.'.$file->getClientOriginalExtension();
              Image::make($file)->resize(300, 300)->save(public_path('/upload/uploads/'.$filename));
             //$user=auth()->user();
              $request->merge(['file'=>$filename]);
              //$user->save();
          }
        
         $shop= Shop::create($request->all());
          
          return $shop;
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
