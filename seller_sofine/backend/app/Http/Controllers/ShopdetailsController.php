<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Image;
use App\Shop;
use App\Shopdetails;
use App\Categories;
class ShopdetailsController extends Controller
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
    // 'catname' => Shop::where('id','=',$id)->get(),
        'shop'=> Shop::orderBy('id')->join('Categories','Shops.cat_id','=','Categories.id')
       ->join('Users','shops.user_id','=','Users.id')
       ->select('Shops.*','Categories.cat_name','users.name','shops.id','users.role')
       ->where('shops.id','=',$id)
       ->get(),
       'shopdetails'=> Shopdetails::orderBy('id')->join('shops','shopdetails.shop_id','=','shops.id')
       ->join('Users','shops.user_id','=','Users.id')
       ->join('Categories','Shops.cat_id','=','Categories.id')
      ->select('Shopdetails.*','Categories.cat_name','Users.name','users.role')
      ->where('shop_id','=',$id)
      ->get()
       // return $dat;
        ]);
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
      
       $shopdetails= Shopdetails::create($request->all());
        
        return $shopdetails;
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
