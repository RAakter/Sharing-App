<?php

namespace App\Http\Controllers;

use App\Area;
use App\District;
use App\Division;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    //
    public function index()
    {
        return view('backend.area.add-area',[
            'divisions'=>Division::where('division_status',1)->get(),
            'districts'=>District::where('district_status',1)->get(),
        ]);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'division_id' => 'required',
            'district_id' => 'required',
            'area_title'=>'required|unique:areas',
            'status'=>'required',
        ]);

        $area = new Area();
        $area->division_id      = $request->division_id;
        $area->district_id      = $request->district_id;
        $area->area_title       = $request->area_title;
        $area->status           = $request->status;
        $area->save();

        return back()->with('success', 'Added successfully');
    }

    public function manage()
    {
        return view('backend.area.manage-area', [
            'subs'=>Area::all()->sortByDesc('id')->whereNotNull('area_title'),
            'districts' => District::all(),
            'divisions' => Division::all(),
        ]);
    }

    public function edit($id)
    {
        return view('backend.area.edit-area', [
            'subdistrict' => Area::find($id),
            'districts' => District::where('district_status',1)->get(),
            'divisions'=>Division::where('division_status',1)->get(),
        ]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'division_id' => 'required',
            'district_id' => 'required',
            'area_title'=>'required',
            'status'=>'required',
        ]);
        $area = Area::find($request->id);

        $area->division_id     = $request->division_id;
        $area->district_id     = $request->district_id;
        $area->area_title      = $request->area_title;
        $area->status          = $request->status;
        $area->save();

        return redirect('admin/area/manage-area')->with('success','Updated Successfully');
    }

    public function delete(Request $request)
    {

        $area = Area::find($request->id);
        $area->delete();

        return back()->with('success', 'Information deleted successfully');
    }
}
