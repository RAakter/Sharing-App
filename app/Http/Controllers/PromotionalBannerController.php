<?php

namespace App\Http\Controllers;

use App\PromotionalBanner;
use Illuminate\Http\Request;

class PromotionalBannerController extends Controller
{
    //
    public function add()
    {
        return view('backend.promotional_banner.add-promotional-banner');
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'image'               =>'required|image|mimes:jpeg,png,jpg,gif,svg,JPEG,JPG,PNG',
            'status'              =>'required'

        ]);

        $banner = new PromotionalBanner();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->hashName();
            $directory = 'assets/backend/images/promotional_banner_images/';
            $image->move($directory,$imageName);
            $banner->image = $imageName;
        }
        $banner->title             =$request->title;
        $banner->description       =$request->description;
        $banner->status            =$request->status;
        $banner->save();

        return back()->with('success', 'Added successfully');
    }

    public function manage()
    {
        return view('backend.promotional_banner.manage-promotional-banner', [
            'banners' => PromotionalBanner::all()
        ]);
    }
    public function edit($id){
        return view('backend.promotional_banner.edit-promotional-banner', [
            'banner' => PromotionalBanner::find($id)
        ]);
    }
    public function update(Request $request){
        $this->validate($request, [
            'image'          =>'image|mimes:jpeg,png,jpg,gif,svg,JPEG,JPG,PNG',
        ]);

        $banner= PromotionalBanner::find($request->id);

        if ($request->hasFile('image')) {
            @unlink($banner->image);
            $image = $request->file('image');
            $imageName = $image->hashName();
            $directory = 'assets/backend/images/promotional_banner_images/';
            $image->move($directory, $imageName);
            $banner->image =$imageName;
        }
        $banner->title             =$request->title;
        $banner->description       =$request->description;
        $banner->status            =$request->status;
        $banner->save();

        return redirect()->route('manage.promotional.banner')->with('success','Updated Successfully.');
    }
    public function delete(Request $request){

        $banner = PromotionalBanner::find($request->id);
        $image_path = "assets/backend/images/promotional_banner_images/".$banner->image;

        if (file_exists($image_path)) {
            @unlink($image_path);
        }
        $banner->delete();
        return back()->with('success','Information deleted successfully');
    }
}
