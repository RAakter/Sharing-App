<?php

namespace App\Http\Controllers;

use App\District;
use App\Division;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    //
    //district
    public function index()
    {
        return view('backend.district.add-district',[
            'divisions'=>Division::where('division_status',1)->get()
        ]);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'district_title' => 'required|unique:districts',
            'district_status' => 'required',
            'division_id'=>'required'
        ]);

        $district = new District();
        $district->division_id     = $request->division_id;
        $district->district_title  = $request->district_title;
        $district->district_status = $request->district_status;
        $district->save();

        return back()->with('success', 'Added successfully');
    }

    public function manage()
    {
        return view('backend.district.manage-district', [
            'districts' => District::all()->sortByDesc('id')->whereNotNull('district_title'),
            'divisions' => Division::all(),
        ]);
    }

    public function edit($id)
    {
        return view('backend.district.edit-district', [
            'district' => District::find($id),
            'divisions'=>Division::where('division_status',1)->get(),
        ]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'district_title' => 'required',
            'district_status' => 'required',
            'division_id'=>'required'
        ]);
        $district = District::find($request->id);

        $district->division_id    = $request->division_id;
        $district->district_title = $request->district_title;
        $district->district_status= $request->district_status;
        $district->save();

        return redirect('admin/district/manage-district')->with('success','Updated Successfully');
    }

    public function delete(Request $request)
    {

        $district = District::find($request->id);
        $district->delete();

        return back()->with('success', 'Information deleted successfully');
    }
}
