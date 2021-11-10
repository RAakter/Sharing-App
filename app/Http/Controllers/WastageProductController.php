<?php

namespace App\Http\Controllers;

use App\WastageProduct;
use Illuminate\Http\Request;

class WastageProductController extends Controller
{
    //
    public function add()
    {
        return view('backend.wastage_product.add-wastage-product');
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'image'               =>'required|image|mimes:jpeg,png,jpg,gif,svg,JPEG,JPG,PNG',
            'status'              =>'required'

        ]);

        $wastage = new WastageProduct();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->hashName();
            $directory = 'assets/backend/images/wastage_product_images/';
            $image->move($directory,$imageName);
            $wastage->image = $imageName;
        }

        $wastage->title             =$request->title;
        $wastage->description       =$request->description;
        $wastage->price             =$request->price;
        $wastage->measurement_unit  =$request->measurement_unit;
        $wastage->status            =$request->status;
        $wastage->save();

        return back()->with('success', 'Added successfully');
    }

    public function manage()
    {
        return view('backend.wastage_product.manage-wastage-product', [
            'wastages' => WastageProduct::all()->sortByDesc('id')
        ]);
    }
    public function edit($id){
        return view('backend.wastage_product.edit-wastage-product', [
            'wastage' => WastageProduct::find($id)
        ]);
    }
    public function update(Request $request){
        $this->validate($request, [
            'image'          =>'image|mimes:jpeg,png,jpg,gif,svg,JPEG,JPG,PNG',
        ]);

        $wastage= WastageProduct::find($request->id);

        if ($request->hasFile('image')) {
            @unlink($wastage->image);
            $image = $request->file('image');
            $imageName = $image->hashName();
            $directory = 'assets/backend/images/wastage_product_images/';
            $image->move($directory, $imageName);
            $wastage->image =$imageName;
        }
        $wastage->title             =$request->title;
        $wastage->description       =$request->description;
        $wastage->price             =$request->price;
        $wastage->measurement_unit  =$request->measurement_unit;
        $wastage->status            =$request->status;
        $wastage->save();

        return redirect()->route('manage.wastage.product')->with('success','Updated Successfully.');
    }
    public function delete(Request $request){

        $wastage = WastageProduct::find($request->id);
        $image_path = "assets/backend/images/wastage_product_images/".$wastage->image;

        if (file_exists($image_path)) {
            @unlink($image_path);
        }
        $wastage->delete();
        return back()->with('success','Information deleted successfully');
    }
}
