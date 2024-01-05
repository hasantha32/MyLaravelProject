<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Photos;
use App\Models\Products;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    //


    public function adding(ProductRequest $request)
    {

        try {
            DB::beginTransaction();
            $items = new Products();
            $items->name=$request->name;
            $items->value=$request->value;
            $items->price=$request->price;
            $items->quantity=$request->quantity;
            $items->type=$request->type;

            $items->save();


//added image
            $imageName =  $request->image->getClientOriginalName();
            $request->image->move(public_path('image'),$imageName);

            $photos = new Photos();
            $photos->path = 'images/' . $imageName;
            $photos->product_id = $items->id;
            $photos->save();
            DB::commit();
            return back();
        }catch (\Exception $e){
            DB::rollBack();
            return back()->with($e);
        }

//

//        return response()->json('Added Successfully');
    }

    public function read()
    {
//        $items = Products::all();
        $items = Products::with('photo')->get();

        return view('pages.read',compact('items'));
    }

    public function edit(Request $request)
    {
        $items = Products::findorfail($request->id);

        $items->name=$request->name;
        $items->value=$request->value;
        $items->price=$request->price;
        $items->quantity=$request->quantity;
        $items->type=$request->type;

        $items->update();

        return response()->json('Updated Successfully');
    }

    public function delete(Request $request)
    {
        $items = Products::findorfail($request->id)->delete();

        return response()->json('Deleted Successfully');
    }

    public function getData()
    {
        $items = Products::all();

        return response()->json($items);
    }



}
