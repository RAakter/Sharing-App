<?php

namespace App\Http\Controllers;

use App\ProductDeal;
use Illuminate\Http\Request;

class ProductDealController extends Controller
{
    //
    public function add()
    {
        return view('backend.deal_product.add-deal-product');
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'image'               =>'required|image|mimes:jpeg,png,jpg,gif,svg,JPEG,JPG,PNG',
            'status'              =>'required'

        ]);

        $deal = new ProductDeal();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->hashName();
            $directory = 'assets/backend/images/product_deal_images/';
            $image->move($directory,$imageName);
            $deal->image = $imageName;
        }

        $deal->title                 =$request->title;
        $deal->description           =$request->description;
        $deal->price                 =$request->price;
        $deal->discount              =$request->discount;
        $deal->discount_type         =$request->discount_type;
        if ($request->discount_type == '%'){
            $deal->discount_amount   =($request->discount/100) * ($request->price);
        }
        elseif ($request->discount_type == 'TK'){
            $deal->discount_amount   =$request->discount;
        }
        $deal->status                =$request->status;
        $deal->save();

        return back()->with('success', 'Added successfully');
    }

    public function manage()
    {
        return view('backend.deal_product.manage-deal-product', [
            'deals' => ProductDeal::all()
        ]);
    }
    public function edit($id){
        return view('backend.deal_product.edit-deal-product', [
            'deal' => ProductDeal::find($id)
        ]);
    }
    public function update(Request $request){
        $this->validate($request, [
            'image'          =>'image|mimes:jpeg,png,jpg,gif,svg,JPEG,JPG,PNG',
        ]);

        $deal= ProductDeal::find($request->id);

        if ($request->hasFile('image')) {
            @unlink($deal->image);
            $image = $request->file('image');
            $imageName = $image->hashName();
            $directory = 'assets/backend/images/product_deal_images/';
            $image->move($directory, $imageName);
            $deal->image =$imageName;
        }
        $deal->title                 =$request->title;
        $deal->description           =$request->description;
        $deal->price                 =$request->price;
        $deal->discount              =$request->discount;
        $deal->discount_type         =$request->discount_type;
        if ($request->discount_type == '%'){
            $deal->discount_amount   =($request->discount/100) * ($request->price);
        }
        elseif ($request->discount_type == 'TK'){
            $deal->discount_amount   =$request->discount;
        }
        $deal->status                =$request->status;
        $deal->save();

        return redirect()->route('manage.deal.product')->with('success','Updated Successfully.');
    }
    public function delete(Request $request){

        $deal = ProductDeal::find($request->id);
        $image_path = "assets/backend/images/product_deal_images/".$deal->image;

        if (file_exists($image_path)) {
            @unlink($image_path);
        }
        $deal->delete();
        return back()->with('success','Information deleted successfully');
    }
}
